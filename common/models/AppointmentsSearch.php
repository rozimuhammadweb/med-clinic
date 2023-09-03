<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Appointments;

/**
 * AppointmentsSearch represents the model behind the search form of `common\models\Appointments`.
 */
class AppointmentsSearch extends Appointments
{
    /**
     * {@inheritdoc}
     */
    public $doctorName;
    public $serviceName;
    public $patientName;
    public $searchType;
    public $firstName;


    public function rules()
    {
        return [
            [['id',], 'integer'],
            [['doctorName', 'serviceName', 'patientName', 'firstName'], 'safe'],
            [['appointmentDate', 'doctorId', 'patientId','searchType', 'notes', 'created_at', 'serviceId', 'updated_at'], 'safe'],
            [['doctorName', 'serviceName', 'patientName'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
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
        $query = Appointments::find();
        $query->joinWith('doctor');
        $query->joinWith('service');
        $query->joinWith('patient');


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);

        $dataProvider->sort->attributes['doctorName'] = [
            'asc' => ['doctors.firstName' => SORT_ASC],
            'desc' => ['doctors.firstName' => SORT_DESC],
        ];


        $dataProvider->sort->attributes['serviceName'] = [
            'asc' => ['services.name' => SORT_ASC],
            'desc' => ['services.name' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['patientName'] = [
            'asc' => ['patients.firstName' => SORT_ASC],
            'desc' => ['patients.firstName' => SORT_DESC],
        ];
        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }
        if ($this->searchType == 'patientName') {
            $query->andFilterWhere(['like', 'Patients.firstName', $this->firstName]);
        } elseif ($this->searchType == 'doctorName') {
            $query->andFilterWhere(['like', 'Doctors.firstName', $this->firstName]);
        } elseif ($this->searchType == 'serviceName') {
            $query->andFilterWhere(['like', 'Services.name', $this->firstName]);
        }


        $query->andFilterWhere([
            'id' => $this->id,
            'patientId' => $this->patientId,
            'doctorId' => $this->doctorId,
            'serviceId' => $this->serviceId,
            'appointmentDate' => $this->appointmentDate,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'Doctors.firstName', $this->doctorName])
            ->andFilterWhere(['like', 'Services.name', $this->serviceName])
            ->andFilterWhere(['like', 'Patients.firstName', $this->patientName]);

        return $dataProvider;
    }

}
