<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TmstUsers;

/**
 * UsersSearch represents the model behind the search form about `app\models\TmstUsers`.
 */
class UsersSearch extends TmstUsers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'flag_aktif'], 'integer'],
            [['username', 'password', 'nama'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TmstUsers::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'flag_aktif' => $this->flag_aktif,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
	
	/**
	 * @param $username
	 * @return array|null|\yii\db\ActiveRecord|TmstUsers
	 */
    public static function findByUsername($username)
	{
		return self::find()->where(['username'=>$username])->one();
	}
	
	/**
	 * @param $token
	 * @return array|null|\yii\db\ActiveRecord|TmstUsers
	 */
	public static function findByAccessToken($token)
	{
		return UsersSearch::find()->where(['access_token'=>$token])->one();
	}
}
