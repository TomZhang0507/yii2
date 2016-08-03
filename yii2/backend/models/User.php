<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $lastlogindate
 * @property string $registerdate
 * @property integer $roleid
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastlogindate', 'registerdate'], 'safe'],
            [['roleid'], 'integer'],
            [['username', 'email'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'phone' => 'Phone',
            'lastlogindate' => 'Lastlogindate',
            'registerdate' => 'Registerdate',
            'roleid' => 'Roleid',
        ];
    }
}
