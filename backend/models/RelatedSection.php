<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "related_section".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $description
 * @property string $intro
 * @property integer $created_at
 * @property integer $updated_at
 */
class RelatedSection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'related_section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link', 'intro'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title', 'image' ], 'string', 'max' => 255],
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
            'link' => Yii::t('app', 'Link'),
            'intro' => Yii::t('app', 'Intro'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public static function ListAll()
    {
        return RelatedSection::find()->orderBy('id ASC')->limit(4)->all();
    }
}
