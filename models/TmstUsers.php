<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmst_users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $flag_aktif
 * @property string $nama
 * @property string $auth_key
 * @property string $access_token
 */
class TmstUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmst_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'flag_aktif', 'access_token'], 'required'],
            [['flag_aktif'], 'integer'],
            [['username'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 256],
            [['nama', 'auth_key', 'access_token'], 'string', 'max' => 128],
            [['username'], 'unique'],
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
            'flag_aktif' => 'Flag Aktif',
            'nama' => 'Nama',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }
}
