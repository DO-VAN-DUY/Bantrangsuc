<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orderdetails".
 *
 * @property int $id
 * @property int $orders_id
 * @property int $product_id
 * @property int $number
 * @property float $unit_price
 *
 * @property Orders $orders
 * @property Product $product
 */
class Orderdetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderdetails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orders_id', 'product_id', 'number', 'unit_price'], 'required'],
            [['orders_id', 'product_id', 'number'], 'integer'],
            [['unit_price'], 'number'],
            [['orders_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::class, 'targetAttribute' => ['orders_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orders_id' => 'Orders ID',
            'product_id' => 'Product ID',
            'number' => 'Number',
            'unit_price' => 'Unit Price',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasOne(Orders::class, ['id' => 'orders_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }
}
