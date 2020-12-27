<?php
namespace app\modules\v1\controllers;

use app\modules\v1\models\Post;
use app\modules\v1\models\Author;
use app\modules\v1\models\Date;
use Yii;

class PostController extends ApiController {

    public function actionAll() {
        return Post::find()->all();
    }

    public function actionId($id) {
        return Post::findOne(['id' => $id]);
    }

    public function actionUrl($url) {
        return Post::findOne(['url' => $url]);
    }

    public function actionIdAuthor($idAuthor) {
        return Author::findAll(['idAuthor' => $idAuthor]);
    }

    public function actionIdDate($idDate) {
        return Date::findAll(['idDate' => $idDate]);
    }

    public function actionInfo($url)
     {
         $product = Product::findOne()
             //->with(['category', 'propertiesValues', 'propertiesValues.property'])
             ->where(['url' => $url])
             ->one();

         return $product;
     }

    public function actionCreate() {
        $model = new Post();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }

}
