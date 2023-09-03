<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Doctors;

/**
 * DoctorsSearch represents the model behind the search form of `common\models\Doctors`.
 */
class DoctorsSearch extends Doctors
{
    /**
     * {@inheritdoc}
     */
    public $clinicName;

    public function rules()
    {
        return [
            [['id', 'clinicId', 'status'], 'integer'],
            [['firstName', 'clinicName', 'lastName', 'specialization', 'education', 'contact', 'email', 'dateOfBirth', 'gender', 'biography', 'image', 'created_at', 'updated_at'], 'safe'],
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
        $query = Doctors::find();
        $query->joinWith('clinic');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $dataProvider->sort->attributes['clinicName'] = [
            'asc' => ['Clinics.name' => SORT_ASC],
            'desc' => ['Clinics.name' => SORT_DESC],
        ];

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'clinicId' => $this->clinicId,
            'dateOfBirth' => $this->dateOfBirth,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);
        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'Clinics.name', $this->clinicName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'specialization', $this->specialization])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'biography', $this->biography])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
