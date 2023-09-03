<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Appointments".
 *
 * @property int $id
 * @property int|null $patientId
 * @property int|null $doctorId
 * @property int|null $serviceId
 * @property string|null $appointmentDate
 * @property string|null $notes
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Billing[] $billings
 * @property Doctors $doctor
 * @property Patients $patient
 * @property Services $service
 * @property Treatments[] $treatments
 */
class Appointments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Appointments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patientId', 'doctorId', 'serviceId'], 'integer'],
            [['appointmentDate', 'created_at', 'updated_at'], 'safe'],
            [['notes'], 'string'],
            [['patientId'], 'exist', 'skipOnError' => true, 'targetClass' => Patients::class, 'targetAttribute' => ['patientId' => 'id']],
            [['doctorId'], 'exist', 'skipOnError' => true, 'targetClass' => Doctors::class, 'targetAttribute' => ['doctorId' => 'id']],
            [['serviceId'], 'exist', 'skipOnError' => true, 'targetClass' => Services::class, 'targetAttribute' => ['serviceId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patientId' => 'Bemorning ismi',
            'doctorId' => 'Doktorning ismi',
            'serviceId' => 'Xizmat turi',
            'appointmentDate' => 'Ushrashuv sanasi',
            'notes' => 'Qaydlar',
            'created_at' => 'Yaratilgan',
            'updated_at' => 'Yangilangan',
        ];
    }

    /**
     * Gets query for [[Billings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillings()
    {
        return $this->hasMany(Billing::class, ['appointmentId' => 'id']);
    }

    /**
     * Gets query for [[Doctor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctors::class, ['id' => 'doctorId']);
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patients::class, ['id' => 'patientId']);
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Services::class, ['id' => 'serviceId']);
    }

    /**
     * Gets query for [[Treatments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTreatments()
    {
        return $this->hasMany(Treatments::class, ['appointmentId' => 'id']);
    }
}
