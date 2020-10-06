<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $carId
 * @property string $model
 * @property string $owner
 * @property string $image
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'owner', 'image'], 'required'],
            [['model', 'owner', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'carId' => 'Car ID',
            'model' => 'Model',
            'owner' => 'Owner',
            'image' => 'Image',
        ];
    }
}
