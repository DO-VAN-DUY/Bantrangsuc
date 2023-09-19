<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trademark".
 *
 * @property int $id
 * @property int $namesp_id
 * @property string $name
 * @property string $code
 * @property string $logo
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property Product $namesp
 */
class Trademark extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trademark';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namesp_id', 'name', 'code'], 'required'],
            [['namesp_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'code', 'logo'], 'string', 'max' => 100],
            [['namesp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['namesp_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namesp_id' => 'Namesp ID',
            'name' => 'Name',
            'code' => 'Code',
            'logo' => 'Logo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Namesp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamesp()
    {
        return $this->hasOne(Product::class, ['id' => 'namesp_id']);
    }
}
