<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Clinics".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $contact
 *
 * @property Doctors[] $doctors
 * @property Services[] $services
 */
class Clinics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clinics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'contact'], 'required','message' => 'Iltimos, Maydonni to\'ldirishni unutmang!'],
            [['name'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 500],
            [['contact'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'address' => 'Manzil',
            'contact' => 'Mobil raqam',
        ];
    }

    /**
     * Gets query for [[Doctors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctors()
    {
        return $this->hasMany(Doctors::class, ['clinicId' => 'id']);
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::class, ['clinicId' => 'id']);
    }
}
