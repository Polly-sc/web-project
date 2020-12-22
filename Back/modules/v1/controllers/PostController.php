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
        return Post::findAll(['idAuthor' => $idAuthor]);
    }

    public function actionIdDate($idDate) {
        return Post::findAll(['idDate' => $idDate]);
    }

    public function actionHitposts() {
        return Post::findAll(['hitPost' => 1]);
    }

    public function actionCreate() {
        $post = new Post();
        $post->load(Yii::$app->request->getBodyParams(), '');
        $post->save();

        return $post;
    }

}
