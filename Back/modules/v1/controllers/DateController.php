<?php
namespace app\modules\v1\controllers;

use app\modules\v1\models\Date;
use Yii;

class DateController extends ApiController {

    public function actionAll() {
        return Date::find()->all();
    }

    public function actionId($id) {
        return Date::findOne(['id' => $id]);
    }

    public function actionCreate() {
        $model = new Date();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}
