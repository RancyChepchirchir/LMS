<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bookAuthors".
 *
 * @property int $baId
 * @property int $authorId
 * @property int $bookId
 *
 * @property Authors $ba
 * @property Books $books
 */
class BookAuthors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookAuthors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['authorId', 'bookId'], 'required'],
            [['authorId', 'bookId'], 'integer'],
            [['bookId'], 'unique'],
            [['authorId'], 'unique'],
            [['baId'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['baId' => 'authorId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'baId' => 'Ba ID',
            'authorId' => 'Author ID',
            'bookId' => 'Book ID',
        ];
    }

    /**
     * Gets query for [[Ba]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBa()
    {
        return $this->hasOne(Authors::className(), ['authorId' => 'baId']);
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasOne(Books::className(), ['bookId' => 'baId']);
    }
}
