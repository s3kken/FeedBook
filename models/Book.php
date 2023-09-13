<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property int $id_genre
 * @property string $title
 * @property string $description
 * @property string $img
 * @property string $reference
 * @property int $id_author
 *
 * @property Author $author
 * @property Genre $genre
 * @property Review[] $reviews
 */
class Book extends \yii\db\ActiveRecord
{

    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */

    public function rules() 
    { 
        return [ 
            [['id_genre', 'title', 'description','id_author', 'reference'], 'required'], 
            [['id_genre'], 'integer'], 
            [['title','id_author'], 'string', 'max' => 255], 
            [['description'], 'string', 'max' => 3000],
            [ 
                ['file'], 'file', 
                'skipOnEmpty' => true, 
                'extensions' => 'jpg, png, jpeg, bmp', 'maxSize' => 1024 * 1024 * 10, 
                'message' => 'Размер файла превышает допустимые значения' 
            ], 
            [['id_genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::class, 'targetAttribute' => ['id_genre' => 'id']], 
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => Author::class, 'targetAttribute' => ['id_author' => 'id']], 
        ]; 
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_genre' => 'Жанр',
            'title' => 'Название',
            'description' => 'Аннотация',
            'file' => 'Обложка',
            'reference' => 'Ссылка на книгу',
            'id_author' => 'Автор',
            'img' => 'Картинка',

        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::class, ['id' => 'id_author']);
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::class, ['id' => 'id_genre']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::class, ['id_book' => 'id']);
    }

    public function upload() 
    { 
        if (!$this->file) 
            return false; 
        $name = '/web/uploads/' . time() . '.' . $this->file->extension; 
        $filename = Yii::getAlias('@webroot') . $name;  
        $url = $name; 
        if ($this->file->saveAs($filename)) 
            return $url; 
        return false; 
    }
}
