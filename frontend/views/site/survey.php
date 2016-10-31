<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:30 م
 */
//var_dump($survies);
$this->title = 'Survey';
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
                <div class="history sadeco-group">
                    <p>
                        <?php echo $page['description'];?>
                    </p>
                </div>
                <!--Services-->
                <div class="services sadeco-group">
                    <?php foreach ($survies as $key => $value) { ?>
                    <a class="services-links" href="<?php echo Yii::$app->homeUrl;?>site/survey-after?id=<?php echo $value['survey_id']; ?>"><?php echo $value['survey_name']; ?></a>
                    <?php } ?>
                </div>
                <!--Services-->
            </div>

        </div>
    </div>

</div>
<!--End Content-->
