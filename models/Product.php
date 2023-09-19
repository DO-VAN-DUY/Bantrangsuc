<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $productgroup_id
 * @property string $name
 * @property string $code
 * @property string|null $describes
 * @property string|null $detailed_description
 * @property int $selling
 * @property int $outstanding
 * @property int $just_homed
 * @property float $price
 * @property int|null $quantity
 * @property float $competitive_price
 * @property string|null $image
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property Image[] $images
 * @property Keyproduct[] $keyproducts
 * @property Orderdetails[] $orderdetails
 * @property Productgroups $productgroup
 * @property Trademark[] $trademarks
 */
class Product extends \yii\db\ActiveRecord
{
    public $qtt;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productgroup_id', 'name', 'code', 'price', 'competitive_price'], 'required'],
            [['productgroup_id', 'selling', 'outstanding', 'just_homed', 'quantity'], 'integer'],
            [['detailed_description'], 'string'],
            [['price', 'competitive_price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'code'], 'string', 'max' => 255],
            [['describes'], 'string', 'max' => 350],
            [['image'], 'string', 'max' => 100],
            [['productgroup_id'], 'exist', 'skipOnError' => true, 'targetClass' => Productgroups::class, 'targetAttribute' => ['productgroup_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productgroup_id' => 'Productgroup ID',
            'name' => 'Name',
            'code' => 'Code',
            'describes' => 'Describes',
            'detailed_description' => 'Detailed Description',
            'selling' => 'Selling',
            'outstanding' => 'Outstanding',
            'just_homed' => 'Just Homed',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'competitive_price' => 'Competitive Price',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Images]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Keyproducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeyproducts()
    {
        return $this->hasMany(Keyproduct::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Orderdetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderdetails()
    {
        return $this->hasMany(Orderdetails::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Productgroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductgroup()
    {
        return $this->hasOne(Productgroups::class, ['id' => 'productgroup_id']);
    }

    /**
     * Gets query for [[Trademarks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTrademarks()
    {
        return $this->hasMany(Trademark::class, ['namesp_id' => 'id']);
    }
    public function Get_all_product()
    {
        return Product::find()->all();
    }
    
}
