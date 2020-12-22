<?php
namespace app\modules\v1\controllers;

use app\modules\v1\models\Author;
use Yii;

class AuthorController extends ApiController {

    public function actionAll() {
        return Author::find()->all();
    }

    public function actionId($id) {
        return Author::findOne(['id' => $id]);
    }

    public function actionCreate() {
        $author = new Author();
        $author->load(Yii::$app->request->getBodyParams(), '');
        $author->save();

        return $author;
    }
}
