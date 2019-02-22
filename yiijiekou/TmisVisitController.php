<?php

namespace frontend\controllers;

use Yii;
use frontend\models\TMisVisit;
use yii\rest\Controller;
use yii\helpers\Json;

class TmisVisitController extends Controller
{
    //查询表单数据
    public function actionIndex()
    {
        $searchModel = TMisVisit::findAll(['id'=>['egt',1]]);

        echo '<pre>';print_r($searchModel);die;

        return $searchModel;
    }

    /**
     * 新增一条预约数据
     * @return TMisVisitBak|string
     */
    public function actionCreate()
    {
        $model = new TMisVisit();//实例化类

        if ($model->load(Yii::$app->request->post(),'') && $model->save()) {
            //return Json::encode(['items' => [$model],'code'=>123]);
            return $model;
        }else{
            return false;
        }

    }
}



























