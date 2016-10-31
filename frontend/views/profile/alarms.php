<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'alarms';
?>

<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                alarms
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
                <!--Company History-->
                <div class="services sadeco-group">

                <?php if(empty($alarms)){ ?>
                    <h1>No Results</h1>
                    <?php } ?>
                </div>
                <!--Company History-->
            </div>
        </div>
    </div>

</div>
<!--End Content-->
