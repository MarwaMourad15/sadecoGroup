<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                <?= Html::encode($this->title) ?>
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
                <div class="history sadeco-group">
                    <div class="alert alert-danger">
                        <?= nl2br(Html::encode($message)) ?>
                    </div>
                    <p>
                        The above error occurred while the Web server was processing your request.
                    </p>
                    <p>
                        Please contact us if you think this is a server error. Thank you.
                    </p>

                </div>

                <!--Company History-->
            </div>
        </div>
    </div>

</div>
<!--End Content-->