<?php
/**
 * Created by PhpStorm.
 * User: fume_07
 * Date: 10/26/2016
 * Time: 12:20 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\User;

//var_dump($certificates);
$this->title = 'Certificates';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                User Profile
            </h2>
        </div>
    </div>
</div>
<!--Page Tittle-->

<!--Start inner-menu-->
<div class="inner-menu">
    <div class="container">
        <div class="row">
            <?php echo Yii::$app->controller->renderPartial('menu'); ?>
            <div class="content cert col-md-10 col-xs-12" style="display: block">
                <div class="segl-sharfy">
                    <div class="row">
                        <div class="col-xs-3 border text-sm">
                            #RFQ
                        </div>
                        <div class="col-xs-3 border text-sm">
                            Tittle
                        </div>
                        <div class="col-xs-3 border text-sm">
                            Delivery Date
                        </div>
                        <div class="col-xs-3  text-sm">
                            Certificates Document
                        </div>
                    </div>

                    <?php if(empty($certificates)){ ?>
                        <h3>No Found Result</h3>
                    <?php } ?>
                    <?php foreach($certificates as $key => $value){ ?>
                    <div class="row">
                        <div class="col-xs-3 border text-sm">
                            <?php echo $value['rfq_no']; ?>
                        </div>
                        <div class="col-xs-3 border text-sm">
                            <?php echo $value['title']; ?>
                        </div>
                        <div class="col-xs-3 border text-sm">
                            <?php echo $value['delivery_date']; ?>
                        </div>
                        <div class="col-xs-3 text-sm">
                            <button type="button" data-toggle="modal" data-target="#table<?php echo $key; ?>" data-whatever="@mdo">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach($certificates as $key => $value){ ?>
<div class="modal fade" id="table<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="details">
                    <div class="row referee">
                        <div class="col-xs-6">
                            <h4 class="">Tittle</h4>
                            <div class="names">
                                <?php foreach($value['certificates'] as $key1 => $value1){ ?>
                                <h6>
                                    <?php echo $value1['certificate_title']; ?>
                                </h6>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <h4 class="">Link</h4>
                            <div class="names">
                                <?php foreach($value['certificates'] as $key1 => $value1){ ?>
                                <h6>
                                    <?php echo $value1['certificate_path']; ?>
                                </h6>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>