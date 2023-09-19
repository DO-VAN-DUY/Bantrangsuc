<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slide".
 *
 * @property int $id
 * @property string $caption
 * @property string $summary
 * @property string $link
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property ImageSlide[] $imageSlides
 */
class Slide extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slide';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caption', 'summary', 'link'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['caption', 'link'], 'string', 'max' => 100],
            [['summary'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'summary' => 'Summary',
            'link' => 'Link',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[ImageSlides]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImageSlides()
    {
        return $this->hasMany(ImageSlide::class, ['slide_id' => 'id']);
    }
}
