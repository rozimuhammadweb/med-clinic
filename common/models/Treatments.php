<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Treatments".
 *
 * @property int $id
 * @property int|null $appointmentId
 * @property string|null $description
 * @property float|null $cost
 * @property string|null $date
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Appointments $appointment
 */
class Treatments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Treatments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['appointmentId'], 'integer'],
            [['description'], 'string'],
            [['cost'], 'number'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['appointmentId'], 'exist', 'skipOnError' => true, 'targetClass' => Appointments::class, 'targetAttribute' => ['appointmentId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'appointmentId' => 'Uchrashuvlar',
            'description' => 'Tavsifi',
            'cost' => 'Narxi',
            'date' => 'Sana',
            'created_at' => 'Yaratilgan',
            'updated_at' => 'Yangilangan',
        ];
    }

    /**
     * Gets query for [[Appointment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppointment()
    {
        return $this->hasOne(Appointments::class, ['id' => 'appointmentId']);
    }
}
