<?php

namespace frontend\models;

use Yii;
use common\models\User;
/**
 * This is the model class for table "students".
 *
 * @property int $studentsId
 * @property int $userId
 * @property string $fullName
 * @property int $idNumber
 * @property int $phoneNumber
 * @property int $regNo
 *
 * @property Borrowed $students
 * @property User $user
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'fullName', 'idNumber', 'phoneNumber', 'regNo'], 'required'],
            [['userId', 'idNumber', 'phoneNumber', 'regNo'], 'integer'],
            [['fullName'], 'string', 'max' => 255],
            [['userId'], 'unique'],
            [['idNumber'], 'unique'],
            [['phoneNumber'], 'unique'],
            [['regNo'], 'unique'],
            [['studentsId'], 'exist', 'skipOnError' => true, 'targetClass' => Borrowed::className(), 'targetAttribute' => ['studentsId' => 'bbId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studentsId' => 'Students ID',
            'userId' => 'User ID',
            'fullName' => 'Full Name',
            'idNumber' => 'Id Number',
            'phoneNumber' => 'Phone Number',
            'regNo' => 'Reg No',
        ];
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasOne(Borrowed::className(), ['bbId' => 'studentsId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['userId' => 'studentsId']);
    }
}
