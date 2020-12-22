<?php
namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name Имя
 * @property string $password Пароль
 * @property string|null $email Электронная почта
 *
 * @property Favorites[] $favorites
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            [['name'], 'string', 'max' => 150],
            [['password'], 'string', 'max' => 50],
            [['email', 'telephone'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'password' => 'Пароль',
            'email' => 'Электронная почта',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavorites()
    {
        return $this->hasMany(Favorites::className(), ['idUser' => 'id']);
    }
}
