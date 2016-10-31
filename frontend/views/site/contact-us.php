<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:29 م
 */
use yii\helpers\Html;

use yii\widgets\ActiveForm;

$this->title = 'Contact Us';

?>
    <!--page Tittle-->
    <div class="page-tittle">
        <div class="container">
            <div class="row">
                <h2>
                    Contact Us
                </h2>
            </div>
        </div>
    </div>
    <!--Page Tittle-->

    <!--Start Content-->
    <div class="content">
        <!--Start Navbar-->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!--Quality-->
                    <div class="services sadeco-group">
                            <p>
                                <?php echo $page['description'];?>
                            </p>
                    </div>

                    <!--Quality-->
                </div>

                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'options' => ['class' => 'con','enctype'=>'multipart/form-data' ]
                ]); ?>
                <div class="row" style="margin-left: 75px">

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

                <?
                echo $form->field($model, 'attached_file')->fileInput()
                ?>
                <?php $model->email_used = 'SCS'; ?>
                <?= $form->field($model, 'email_used')->radioList([ 'SCS' => 'SCS', 'SAP' => 'SAP', ], ['prompt' => '']) ?>

                <div class="form-group">
                    <div class="control-label col-sm-3"></div>
                    <div class="col-sm-8">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
    <!--End Content-->


