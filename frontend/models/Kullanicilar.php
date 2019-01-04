<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kullanicilar".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 */
class Kullanicilar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kullanicilar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            [['username', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }
}
