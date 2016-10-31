<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 01:20 م
 */

$this->title = $calibration['title'];
$this->params['breadcrumbs'][] = $this->title;
?>

<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                <?php echo $calibration['title'];?>
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
                    <?php
                    if($calibration['image']!='' && $calibration['image']!=NULL)
                    {
                        echo '<img src="'.Yii::$app->params['RootLink'].$calibration['image'].'">';
                    }
                    ?>
                    <p>
                        <?php echo $calibration['description'];?>
                    </p>
                </div>
                <!--Quality-->
            </div>
        </div>
    </div>

</div>
<!--End Content-->