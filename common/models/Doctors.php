<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Doctors".
 *
 * @property int $id
 * @property int|null $clinicId
 * @property string $firstName
 * @property string $lastName
 * @property string|null $specialization
 * @property string|null $education
 * @property string|null $contact
 * @property string|null $email
 * @property string|null $dateOfBirth
 * @property string|null $gender
 * @property string|null $biography
 * @property string|null $image
 * @property int $status
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Appointments[] $appointments
 * @property Clinics $clinic
 * @property Feedback[] $feedbacks
 */
class Doctors extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'Doctors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clinicId',], 'integer'],
            [['firstName', 'lastName',  'status','contact','email','specialization', 'gender','education','dateOfBirth'], 'required','message' => 'Iltimos, Maydonni to\'ldirishni unutmang!'],
            [['dateOfBirth', 'created_at', 'updated_at'], 'safe'],
            [['biography'], 'string'],
            [['firstName', 'lastName'], 'string', 'max' => 50],
            [['specialization', 'education', 'email'], 'string', 'max' => 100],
            [['contact'], 'string', 'max' => 15],
            [['gender'], 'string', 'max' => 20],
            [['contact'], 'unique'],
            [['email'], 'unique'],
            [['clinicId'], 'exist', 'skipOnError' => true, 'targetClass' => Clinics::class, 'targetAttribute' => ['clinicId' => 'id']],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['clinicId'], 'required', 'message' => 'Iltimos, Klinika nomini tanlashni unutmang!'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clinicId' => 'Klinika nomi',
            'firstName' => 'Ism',
            'lastName' => 'Familiya',
            'specialization' => 'Mutaxassisligi',
            'education' => 'Ta\'lim',
            'contact' => 'Telefon raqami',
            'email' => 'Elektron pochta',
            'dateOfBirth' => 'Tug\'ilgan sanasi',
            'gender' => 'Jinsi',
            'biography' => 'Biografiya',
            'image' => 'Rasmi',
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
        return $this->hasMany(Appointments::class, ['doctorId' => 'id']);
    }

    /**
     * Gets query for [[Clinic]].
     *
     * @return bool
     *
     */
    public function upload($imageName)
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $imageName . '.' . $this->imageFile->extension);
            return true;
        }
        return false;

    }


    public function getClinic()
    {
        return $this->hasOne(Clinics::className(), ['id' => 'clinicId']);
    }


    /**
     * Gets query for [[Feedbacks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedback::class, ['doctorId' => 'id']);
    }
}
