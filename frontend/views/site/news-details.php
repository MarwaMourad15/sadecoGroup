<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 24/09/16
 * Time: 06:01 ص
 */

$this->title = $model['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                <?php echo $model['title'];?>
            </h2>

            <h2>
                <?php echo $model['event_date'];?>
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
                    <div class="social">
                        <?php $setting = \backend\models\Setting::findOne(1);?>
                        <a href="<?php echo $setting['facebook'];?>" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo $setting['twitter'];?>" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo $setting['google_plus'];?>" target="_blank">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo $setting['linkedin'];?>" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>

                    <img src="<?php echo Yii::$app->params['RootLink'].$model['image'];?>" alt="<?php echo $model['title'];?>">
                    <p>
                        <?php echo $model['description'];?>
                    </p>
                </div>
                <!--Quality-->
            </div>

        </div>
    </div>

</div>
<!--End Content-->