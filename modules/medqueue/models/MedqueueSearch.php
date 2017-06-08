<?php

namespace app\modules\medqueue\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\medqueue\models\Medqueue;

/**
 * MedqueueSearch represents the model behind the search form about `app\modules\medqueue\models\Medqueue`.
 */
class MedqueueSearch extends Medqueue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'actual'], 'integer'],
            [['firstname', 'lastname', 'phone', 'email', 'edatetime'], 'safe'],
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

    public function validate($attributeNames = null, $clearErrors = true)
    {
        return \yii\db\ActiveRecord::validate($attributeNames, $clearErrors);
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
        $query = Medqueue::find();

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
            'edatetime' => $this->edatetime,
            'actual' => $this->actual,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
