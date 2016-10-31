<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\UserFeedback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-feedback-form">

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
        'options'=>['enctype'=>'multipart/form-data' ]
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?
    echo $form->field($model, 'attached_file')->widget(FileInput::classname(), [
        'options' => ['multiple' => false, 'accept' => 'attached_file/*'],
        'pluginOptions' => ['previewFileType' => 'any', 'showUpload'=>false ,
            'initialPreview'=>[
                ($model->attached_file)? Html::img(Yii::$app->params['siteLink'].$model->attached_file, ['class'=>'file-preview-image', 'alt'=>$model->attached_file, 'title'=>$model->attached_file]):null,
            ],
        ],
    ]);
    ?>

    <?= $form->field($model, 'email_used')->dropDownList([ ' SCS' => ' SCS', ' SAP' => ' SAP', ], ['prompt' => '']) ?>

    <div class="form-group">
        <div class="control-label col-sm-3"></div>
        <div class="col-sm-8">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
