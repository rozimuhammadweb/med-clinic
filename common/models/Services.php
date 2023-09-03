<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Services".
 *
 * @property int $id
 * @property int|null $clinicId
 * @property string $name
 * @property string|null $description
 * @property int $status
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Appointments[] $appointments
 * @property Clinics $clinic
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clinicId'], 'integer'],
            [['name', 'status', 'status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['clinicId'], 'exist', 'skipOnError' => true, 'targetClass' => Clinics::class, 'targetAttribute' => ['clinicId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clinicId' => 'Clinic ID',
            'name' => 'Nomi',
            'description' => 'Tavsifi',
            'status' => 'Faolligi',
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
        return $this->hasMany(Appointments::class, ['serviceId' => 'id']);
    }

    /**
     * Gets query for [[Clinic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClinic()
    {
        return $this->hasOne(Clinics::class, ['id' => 'clinicId']);
    }
}
