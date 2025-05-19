<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'about' => 'site/about',
                'services' => 'site/services',
                'calendars' => 'site/calendars',
                'pre-registration' => 'site/pre-registration',
                'registration-information' => 'site/registration-information',
                'curriculum' => 'site/curriculum',
                'transfer-credit' => 'site/transfer-credit',
                'catalog' => 'site/catalog',
                'policies-and-procedures' => 'site/policies-and-procedures',
                'announcement' => 'site/announcement',
                'transcripts' => 'site/transcripts',
                'diplomas' => 'site/diplomas',
                'records-privacy' => 'site/records-privacy',
                'personal-information' => 'site/personal-information',
                'spring-degree-dates' => 'site/spring-degree-dates',
                'undergraduate-degree-requirements' => 'site/undergraduate-degree-requirements',
                'graduate-degree-requirements' => 'site/graduate-degree-requirements',
                'about-advising' => 'site/about-advising',
                'make-appointment' => 'site/make-appointment',
                'statistics-reports' => 'site/statistics-reports',
                'forms' => 'site/forms',
                'contact' => 'site/contact',
                'handbooks' => 'site/handbooks',
                'faq' => 'site/faq',

            ],
        ],
    ],
    'params' => $params,
];
