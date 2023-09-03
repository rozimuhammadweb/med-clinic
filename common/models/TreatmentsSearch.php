<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Treatments;

/**
 * TreatmentsSearch represents the model behind the search form of `common\models\Treatments`.
 */
class TreatmentsSearch extends Treatments
{
    /**
     * {@inheritdoc}
     */
    public $appointment;
    public function rules()
    {
        return [
            [['id',], 'integer'],
            [['description', 'date', 'created_at',  'appointmentId', 'updated_at'], 'safe'],
            [['cost'], 'number'],
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
        $query = Treatments::find();
        $query->joinWith('appointment');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
             'pagination' =>[
                 'pageSize'=> 10,
             ]
        ]);

        $dataProvider->sort->attributes['appointment'] = [
            'asc' => ['appointments.doctorId' => SORT_ASC],
            'desc' => ['appointments.doctorId' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'appointmentId' => $this->appointmentId,
            'cost' => $this->cost,
            'date' => $this->date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'appointment.doctorId', $this->appointment]);

        return $dataProvider;
    }
}
