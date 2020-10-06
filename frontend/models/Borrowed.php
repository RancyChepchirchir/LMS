<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "borrowed".
 *
 * @property int $bbId
 * @property int $studentId
 * @property int $bookId
 * @property string $borrowDate
 * @property string $returnDate
 *
 * @property Books $bb
 * @property Students $students
 */
class Borrowed extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'borrowed';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'bookId', 'borrowDate', 'returnDate'], 'required'],
            [['studentId', 'bookId'], 'integer'],
            [['borrowDate', 'returnDate'], 'safe'],
            [['studentId'], 'unique'],
            [['bookId'], 'unique'],
            [['bbId'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['bbId' => 'bookId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bbId' => 'Bb ID',
            'studentId' => 'Student ID',
            'bookId' => 'Book ID',
            'borrowDate' => 'Borrow Date',
            'returnDate' => 'Return Date',
        ];
    }

    /**
     * Gets query for [[Bb]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBb()
    {
        return $this->hasOne(Books::className(), ['bookId' => 'bbId']);
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasOne(Students::className(), ['studentsId' => 'bbId']);
    }
}
