<?php
namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $name Название
 * @property string $img Ссылка на изображение
 * @property string $description Описание
 * @property string $descriptionShort Краткое описание
 * @property int $idDate Дата поста
 * @property int $idAuthor Имя автора
 *
 * @property Favorites[] $favorites
 * @property Author $idAuthor0
 * @property Date $idDate0
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'img', 'description', 'descriptionShort', 'idDate', 'idAuthor'], 'required'],
            [['description', 'descriptionShort'], 'string'],
            [['idDate', 'idAuthor'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['img'], 'string', 'max' => 255],
            [['idAuthor'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['idAuthor' => 'id']],
            [['idDate'], 'exist', 'skipOnError' => true, 'targetClass' => Date::className(), 'targetAttribute' => ['idDate' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'img' => 'Ссылка на изображение',
            'description' => 'Описание',
            'descriptionShort' => 'Краткое описание',
            'idDate' => 'Дата поста',
            'idAuthor' => 'Имя автора',
        ];
    }

    /**
     * Gets query for [[Favorites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavorites()
    {
        return $this->hasMany(Favorites::className(), ['idPost' => 'id']);
    }

    /**
     * Gets query for [[IdAuthor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdAuthor0()
    {
        return $this->hasOne(Author::className(), ['id' => 'idAuthor']);
    }

    /**
     * Gets query for [[IdDate0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdDate0()
    {
        return $this->hasOne(Date::className(), ['id' => 'idDate']);
    }
}
