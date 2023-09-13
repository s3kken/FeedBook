<?php

namespace app\models;
use yii\web\IdentityInterface;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $role
 * @property string $image
 * 
 *
 * @property Review[] $reviews
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public $repeat_password;
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public static function findIdentity($id)
    {
       return static::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
       return static::findOne(['access_token' => $token]);
    }
    public function getId()
    {
       return $this->id;
    }
    public function getAuthKey()
    {
    
    }
    public function validateAuthKey($authKey)
    {
    
    }    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'login', 'email', 'password', 'repeat_password'], 'required'],
            [['role'], 'integer'],
            [['email'], 'email'],
            [['fio', 'login', 'email', 'password', 'image'], 'string', 'max' => 255],
            [['fio'], 'match', 'pattern' => '/^[а-яА-ЯёЁ ]+$/u'],
            [['login'], 'unique'],
            [
                ['password'],'match',
                'pattern'=> '/^[a-zA-Z ]+$/u'
            ],
            [['repeat_password'], 'compare', 'compareAttribute' => 'password'],
            [
                ['file'], 'file',
                'skipOnEmpty' => false,
                'extensions' => 'jpg, png, jpeg, bmp', 'maxSize' => 1024 * 1024 * 10
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'login' => 'Логин',
            'email' => 'Почта',
            'password' => 'Пароль',
            'repeat_password' => 'Повторите пароль',
            'role' => 'Role',
            'file' => 'Аватар',
        ];
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::class, ['id_user' => 'id']);
    }

    public function upload()
    {
   if (!$this->file)
       return false;
   $name = '/web/uploads/' . time() . rand(0, 100) . '.' . $this->file->extension;
   $filename = Yii::getAlias('@webroot') . $name;
   $url = Yii::getAlias('@web') . $name;
   if ($this->file->saveAs($filename))
       return $url;
   return false;
    }

    public function validatePassword($password)
    {
       return $this->password == $password;
    }
    

}
