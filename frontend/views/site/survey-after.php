<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:30 م
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//echo '<pre>';
//print_r($survies_form);
//echo '</pre>';
$this->title = 'Survery Questions';
?>

<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                Survey
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
                <!--Services-->
                <div class="services sadeco-group">
                    <?php $form = ActiveForm::begin([
                        //'action' => ['index'],
                        'method' => 'post',
                        'options' => ['class' => 'con'],
                    ]); ?>
                        <input type="hidden" value="<?php echo $survey_id; ?>" name="survey_id">
                        <div class="row">
                            <div class="row">
                                <div class="col-xs-3">
                                    <label class="bl">Name</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <label class="bl">Email address</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <label class="bl">Company</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Company" name="company">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <label class="bl">Title</label>
                                </div>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" placeholder="Tittle" name="title">
                                </div>
                            </div>
                        </div>

                        <?php foreach($survies_form as $key => $value){?>
                        <div class="surv-pop">
                            <h3><?php echo $value['question']?></h3>
                            <?php if($value['choices']!="\"\""){ ?>
                            <?php $choices = explode(',', $value['choices']); ?>
                            <?php foreach($choices as $key1 => $value1){
                                    $value1 = str_replace('"', "", $value1);
                                    ?>
                            <label>
                                <input type="radio" name="answers[<?php echo $key; ?>]" value="<?php echo $value1; ?>" required> <?php echo $value1; ?>
                            </label>
                            <?php } ?>
                            <?php } ?>
                        </div>
                            <?php if($value['comment_box']){?>
                                <h3>Comments :</h3>
                                <textarea name="answers_comment[<?php echo $key; ?>]"></textarea>
                            <?php } ?>
                        <?php } ?>
                    <br>
                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                    <br>
                    <?php ActiveForm::end(); ?>
                </div>
                <!--Services-->
            </div>

        </div>
    </div>

</div>
<!--End Content-->
