<?php
namespace app\modules\v1\models;

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "favorites".
 *
 * @property int $id
 * @property int $idPost Пост
 * @property int $idUser Пользователь
 * @property string|null $name Название
 *
 * @property Post $idPost0
 * @property User $idUser0
 */
class Favorites extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'favorites';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idPost', 'idUser'], 'required'],
            [['idPost', 'idUser'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['idPost'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['idPost' => 'id']],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['idUser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idPost' => 'Пост',
            'idUser' => 'Пользователь',
            'name' => 'Название',
        ];
    }

    /**
     * Gets query for [[IdPost0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdPost0()
    {
        return $this->hasOne(Post::className(), ['id' => 'idPost']);
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'idUser']);
    }
}
