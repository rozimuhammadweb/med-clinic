<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Patients".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string|null $dateOfBirth
 * @property string|null $gender
 * @property string|null $contact
 * @property string|null $email
 * @property string|null $address
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Appointments[] $appointments
 * @property Feedback[] $feedbacks
 * @property MedicalRecords[] $medicalRecords
 */
class Patients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Patients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName'], 'required'],
            [['dateOfBirth', 'created_at', 'updated_at'], 'safe'],
            [['firstName', 'lastName'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 20],
            [['contact'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 500],
            [['contact'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'Ismi',
            'lastName' => 'Familiyasi',
            'dateOfBirth' => 'Tug\'ilgan sanasi',
            'gender' => 'Jinsi',
            'contact' => 'Mobil raqam',
            'email' => 'Elektron pochta',
            'address' => 'Manzil',
            'created_at' => 'Yaratilgan',
            'updated_at' => 'Yangilangan',
        ];
    }

    /**
     * Gets query for [[Appointments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointments::class, ['patientId' => 'id']);
    }

    /**
     * Gets query for [[Feedbacks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::class, ['patientId' => 'id']);
    }

    /**
     * Gets query for [[MedicalRecords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalRecords()
    {
        return $this->hasMany(MedicalRecords::class, ['patientId' => 'id']);
    }
}
