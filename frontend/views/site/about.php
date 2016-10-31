<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = $about['title'];
$this->params['breadcrumbs'][] = $this->title;
?>

<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                <?php echo $about['title'];?>
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
                    <?php
                    if($about['image']!='' && $about['image']!=NULL)
                    {
                        echo '<img src="'.Yii::$app->params['RootLink'].$about['image'].'">';
                    }
                    ?>


                    <p>
                        <?php echo $about['description'];?>
                    </p>
                </div>

                <!--Company History-->
            </div>
        </div>
    </div>

</div>
<!--End Content-->
