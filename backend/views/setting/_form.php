<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Setting */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="setting-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCssClasses' => [
                'label' => 'col-sm-3',
                'offset' => 'col-sm-offset-4',
                'wrapper' => 'col-sm-8',
                'error' => '',
                'hint' => '',
            ],
        ],
    ]); ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'google_plus')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'map_lat')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'map_lng')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email_scs')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email_sap')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <div class="control-label col-sm-3"></div>
        <div class="col-sm-8">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
