<?php

namespace frontend\controllers;

use common\models\CatalogSearch;
use common\models\Program;
use common\models\SubjectBoard;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $programs = Program::find()->where(['application_type' => 1])->all();
        $programs2 = Program::find()->where(['application_type' => 2])->all();
        return $this->render('index' , [
            'programs' => $programs,
            'programs2' => $programs2,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionServices()
    {
        return $this->render('services');
    }

    public function actionCalendars()
    {
        return $this->render('calendars');
    }

    public function actionPreRegistration()
    {
        return $this->render('pre-registration');
    }

    public function actionRegistrationInformation()
    {
        return $this->render('registration-information');
    }

    public function actionCurriculum()
    {
        $programs = Program::find()->where(['application_type' => 1])->all();
        $programs2 = Program::find()->where(['application_type' => 2])->all();

        return $this->render('curriculum' , [
            'programs' => $programs,
            'programs2' => $programs2,
        ]);
    }

    public function actionTransferCredit()
    {
        return $this->render('transfer-credit');
    }

    public function actionCatalog()
    {
        $searchModel = new CatalogSearch();
        $catalog_categories = SubjectBoard::find()->all();
        $params['department'] = Yii::$app->request->get('department');
        $dataProvider2 = $searchModel->searchByDegree($params);
        $dataProvider = $searchModel->searchFilter(Yii::$app->request->queryParams);
        return $this->render('catalog', [
            'catalog_categories' => $catalog_categories,
            'dataProvider' => $dataProvider,
            'dataProvider2' => $dataProvider2
        ]);
    }

    public function actionPoliciesAndProcedures()
    {
        return $this->render('policies-and-procedures');
    }
    public function actionAnnouncement()
    {
        return $this->render('announcement');
    }

    public function actionTranscripts()
    {
        return $this->render('transcripts');
    }

    public function actionDiplomas()
    {
        return $this->render('diplomas');
    }

    public function actionRecordsPrivacy()
    {
        return $this->render('records-privacy');
    }

    public function actionPersonalInformation()
    {
        return $this->render('personal-information');
    }

    public function actionSpringDegreeDates()
    {
        return $this->render('spring-degree-dates');
    }

    public function actionGraduateDegreeRequirements()
    {
        return $this->render('graduate-degree-requirements');
    }
    public function actionUndergraduateDegreeRequirements()
    {
        return $this->render('undergraduate-degree-requirements');
    }

    public function actionAboutAdvising()
    {
        return $this->render('about-advising');
    }

    public function actionMakeAppointment()
    {
        return $this->render('make-appointment');
    }

    public function actionForms()
    {
        return $this->render('forms');
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionStatistics()
    {
        return $this->render('statistics');
    }





}
