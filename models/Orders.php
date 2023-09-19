<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $customer_id
 * @property string $full_name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property float|null $ship
 * @property float|null $vat
 * @property float $total_money
 * @property float $into_money
 * @property int $total_number
 * @property string $booking_date
 * @property string|null $created_at
 * @property string|null $update_at
 * @property float|null $discount
 *
 * @property Customer $customer
 * @property Orderdetails[] $orderdetails
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id','total_money', 'into_money', 'discount', 'total_number','full_name','phone','email'], 'required'],
            [['customer_id',], 'integer'],
            [['ship', 'vat', 'total_money', 'into_money', 'discount', 'total_number'], 'number'],
            [['booking_date', 'created_at', 'update_at'], 'safe'],
            [['full_name', 'address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 12],
            [['email'], 'string', 'max' => 150],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::class, 'targetAttribute' => ['customer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'full_name' => 'Full Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'ship' => 'Ship',
            'vat' => 'Vat',
            'total_money' => 'Total Money',
            'into_money' => 'Into Money',
            'total_number' => 'Total Number',
            'booking_date' => 'Booking Date',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'discount' => 'Discount',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::class, ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[Orderdetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderdetails()
    {
        return $this->hasMany(Orderdetails::class, ['orders_id' => 'id']);
    }
}
