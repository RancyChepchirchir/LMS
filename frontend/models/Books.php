<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $bookId
 * @property string $bookName
 * @property int $referenceNo
 * @property string $publisher
 *
 * @property BookAuthors $book
 * @property Borrowed $borrowed
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookName', 'referenceNo', 'publisher'], 'required'],
            [['referenceNo'], 'integer'],
            [['bookName', 'publisher'], 'string', 'max' => 255],
            [['referenceNo'], 'unique'],
            [['bookId'], 'exist', 'skipOnError' => true, 'targetClass' => BookAuthors::className(), 'targetAttribute' => ['bookId' => 'baId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookId' => 'Book ID',
            'bookName' => 'Book Name',
            'referenceNo' => 'Reference No',
            'publisher' => 'Publisher',
        ];
    }

    /**
     * Gets query for [[Book]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(BookAuthors::className(), ['baId' => 'bookId']);
    }

    /**
     * Gets query for [[Borrowed]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBorrowed()
    {
        return $this->hasOne(Borrowed::className(), ['bbId' => 'bookId']);
    }
}
