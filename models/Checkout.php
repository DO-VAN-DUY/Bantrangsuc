<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Checkout extends Model
{
    public $id;
    public $fullname;
    public $address;
    public $email;
    public $phone;
    public $total_money;
    public $booking_date;
    public function rules()
    {
        return [
            [['fullname', 'address', 'email', 'phone', 'total_money'], 'required'],
            // [['created_at', 'updated_at'], 'safe'],
            [['id'], 'integer'],
             [['booking_date'], 'safe'],
            [['fullname', 'address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 12],
            [['address'], 'string', 'max' => 150],
            [['total_money'], 'number'],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'fullname' => 'Họ và tên',
            'email' => 'Thông tin email',
            'address' => 'Địa chỉ giao hàng',
            'phone' => 'Số điện thoại', 
            'total_money' => 'Tổng tiền',
            'booking_date' => 'Ngày đặt',
        ];
    }
}
