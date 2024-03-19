<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Traffics".
 *
 * @property int $ID
 * @property int $price
 * @property string $name
 * @property int $speed
 */
class Traffics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Traffics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'name', 'speed'], 'required'],
            [['price', 'speed'], 'integer'],
            [['name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'price' => 'Price',
            'name' => 'Name',
            'speed' => 'Speed',
        ];
    }
}
