<?php

namespace frontend\controllers;

use common\models\CatalogSearch;
use common\models\Department;
use common\models\ProgramCategory;
use common\models\ProgramSearch;
use common\models\SubjectBoard;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class CatalogController extends Controller
{
    public function actionIndex(){
        $searchModel = new CatalogSearch();
        $catalog_categories = SubjectBoard::find()->all();
        $params['department'] = Yii::$app->request->get('department');
        $dataProvider2 = $searchModel->searchByDegree($params);
        $dataProvider = $searchModel->searchFilter(Yii::$app->request->queryParams);
        return $this->render('index' , [
            'catalog_categories' => $catalog_categories,
            'dataProvider' => $dataProvider,
            'dataProvider2' => $dataProvider2
        ]);
    }


    public function actionGetDepartments()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if (Yii::$app->request->isAjax && Yii::$app->request->isGet){
            $id = Yii::$app->request->get('graduate_id');
            $departments = Department::find()->where(['graduate' => $id])->asArray()->all();
            return ['data' => $departments];
        }
    }
}