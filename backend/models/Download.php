<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "download".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $description
 * @property string $intro
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $file
 * @property integer $catalouge_id
 */
class Download extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'download';
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
            [['description', 'intro'], 'string'],
            [['created_at', 'updated_at', 'catalouge_id'], 'integer'],
            [['title', 'image', 'file'], 'string', 'max' => 255]
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
            'file' => Yii::t('app', 'File'),
            'catalouge_id' => Yii::t('app', 'Category'),
        ];
    }

    public function getCatalouge()
    {
        return $this->hasOne(DownCatalouge::className(), ['id' => 'catalouge_id']);
    }
}
