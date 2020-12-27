<?php
namespace app\modules\v1\controllers;

use app\modules\v1\models\Author;
use Yii;

class AuthorController extends ApiController {

    public function actionCreate() {
        $model = new Author();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }

    public function actionAll() {
        return Author::find()->all();
    }

    public function actionId($id) {
        return Author::findOne(['id' => $id]);
    }
}
