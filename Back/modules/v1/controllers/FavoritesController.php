<?php
namespace app\modules\v1\controllers;

use app\modules\v1\models\Favorites;
use app\modules\v1\models\User;
use Yii;

class FavoritesController extends ApiController {

    public function actionAll() {
        return Favorites::find()->all();
    }

    public function actionId($id) {
        return Favorites::findOne(['id' => $id]);
    }

    public function actionIduser($idUser) {
        return Favorites::findAll(['idUser' => $idUser]);
    }

    public function actionCreate() {
        $model = new Favorites();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return '$model';
    }
}
