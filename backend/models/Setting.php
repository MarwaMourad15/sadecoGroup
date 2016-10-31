<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property integer $id
 * @property string $facebook
 * @property string $twitter
 * @property string $google_plus
 * @property string $linkedin
 * @property string $phone_number
 * @property string $address
 * @property string $map_lat
 * @property string $map_lng
 * @property string $email_scs
 * @property string $email_sap
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['facebook', 'twitter', 'google_plus', 'linkedin', 'phone_number', 'address'
                , 'map_lat', 'map_lng', 'email_scs', 'email_sap'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'facebook' => Yii::t('app', 'Facebook'),
            'twitter' => Yii::t('app', 'Twitter'),
            'google_plus' => Yii::t('app', 'Google Plus'),
            'linkedin' => Yii::t('app', 'Linkedin'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'address' => Yii::t('app', 'Address'),
            'map_lat' => Yii::t('app', 'Map Lat'),
            'map_lng' => Yii::t('app', 'Map Lng'),
            'email_scs' => Yii::t('app', 'Email Scs'),
            'email_sap' => Yii::t('app', 'Email Sap'),
        ];
    }
}
