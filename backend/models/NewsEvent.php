<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "news_event".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $description
 * @property string $intro
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $video
 * @property string $event_date
 */
class NewsEvent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_event';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'],'required'],
            [['description', 'intro', 'event_date' , 'video'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title', 'image', 'event_date'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'image' => Yii::t('app', 'Image'),
            'description' => Yii::t('app', 'Description'),
            'intro' => Yii::t('app', 'Intro'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'video' => Yii::t('app', 'Video (youtube)'),
        ];
    }
}
