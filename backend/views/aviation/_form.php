<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use kartik\widgets\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Aviation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aviation-form">

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


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<?
echo $form->field($model, 'image')->widget(FileInput::classname(), ['name'=>'image',
    'options' => ['multiple' => false, 'accept' => 'image/*'],
    'pluginOptions' => ['previewFileType' => 'any', 'showUpload'=>false ,
        'initialPreview'=>[
            ($model->image)? Html::img(Yii::$app->params['siteLink'].$model->image, ['class'=>'file-preview-image', 'alt'=>$model->image, 'title'=>$model->image]):null,
        ],
    ],
]);
?>

<?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?>

<? //= $form->field($model, 'description')->textarea(['rows' => 6])
echo $form->field($model, 'description')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
]);
?>

    <div class="form-group">
        <div class="control-label col-sm-3"></div>
        <div class="col-sm-8">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>

    </div>