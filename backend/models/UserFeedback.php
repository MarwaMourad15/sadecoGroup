<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user_feedback".
 *
 * @property integer $id
 * @property string $name
 * @property string $company
 * @property string $country
 * @property string $email
 * @property string $mobile
 * @property string $message
 * @property string $attached_file
 * @property string $email_used
 */
class UserFeedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'message','email_used'], 'required'],
            [['message', 'email_used'], 'string'],
            [['name', 'company', 'country', 'email', 'mobile', 'attached_file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'company' => Yii::t('app', 'Company'),
            'country' => Yii::t('app', 'Country'),
            'email' => Yii::t('app', 'Email'),
            'mobile' => Yii::t('app', 'Mobile'),
            'message' => Yii::t('app', 'Message'),
            'attached_file' => Yii::t('app', 'Attached File'),
            'email_used' => Yii::t('app', 'Email Used'),
        ];
    }
}
