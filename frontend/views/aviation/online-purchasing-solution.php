<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:10 م
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
                    <!--<p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form, by injected humour.
                    </p>-->
                    <?php
                    if($model['image']!='' && $model['image']!=NULL)
                    {
                        echo '<img src="'.Yii::$app->params['RootLink'].$model['image'].'">';
                    }
                    ?>
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
