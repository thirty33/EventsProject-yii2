<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Event;

/**
 * SearchEvent represents the model behind the search form of `app\models\Event`.
 */
class SearchEvent extends Event
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['event_date', 'event_name', 'event_description', 'city'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Event::find();

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
            'event_date' => $this->event_date,
        ]);

        $query->andFilterWhere(['ilike', 'event_name', $this->event_name])
            ->andFilterWhere(['ilike', 'event_description', $this->event_description])
            ->andFilterWhere(['ilike', 'city', $this->city]);

        return $dataProvider;
    }
}
