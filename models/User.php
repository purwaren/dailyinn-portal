<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
	

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        $user = UsersSearch::findOne(['id'=>$id]);
        
        if(!empty($user))
        	return self::createStaticObject($user);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $user = UsersSearch::findByAccessToken($token);
        if(!empty($user))
			return self::createStaticObject($user);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
       $user = UsersSearch::findByUsername($username);
       if(!empty($user))
		   return self::createStaticObject($user);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        $security = \Yii::$app->getSecurity();
        return $security->validatePassword($password, $this->password);
    }
	
	/**
	 * @param $user UsersSearch
	 * @return static
	 */
    private static function createStaticObject($user)
	{
		$obj = [
			'id'=>$user->id,
			'username'=>$user->username,
			'password'=>$user->password,
			'authKey'=>$user->auth_key,
			'accessToken'=>$user->access_token
		];
		return new static($obj);
	}
}
