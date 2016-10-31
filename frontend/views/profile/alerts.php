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

//var_dump($alarms);
$this->title = 'Alerts';
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
            <div class="content alerts col-md-10 col-xs-12" style="display: block">
                <div class="segl-sharfy">
                    <div class="row">
                        <div class="col-xs-2 border text-sm">
                            RFQ ID
                        </div>
                        <div class="col-xs-2 border text-sm">
                            RFQ Number
                        </div>
                        <div class="col-xs-2 border text-sm">
                            Tittle
                        </div>
                        <div class="col-xs-4 border  text-sm">
                            Delivery Date
                        </div>
                        <div class="col-xs-2 border text-sm">
                            Alerts
                        </div>
                    </div>

                    <?php if(empty($alarms)){?>
                        <h3>No Found Result</h3>
                    <?php } ?>
                    <?php foreach($alarms as $key => $value){?>
                    <div class="row">
                        <div class="col-xs-2 border text-sm">
                            <?php echo $value['rfq_id']; ?>
                        </div>
                        <div class="col-xs-2 border text-sm">
                            <?php echo $value['rfq_no']; ?>
                        </div>
                        <div class="col-xs-2 border text-sm">
                            <?php echo $value['title']; ?>
                        </div>
                        <div class="col-xs-4 border text-sm">
                            <?php echo $value['delivery_date']; ?>
                        </div>
                        <div class="col-xs-2 text-sm">
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

<?php foreach($alarms as $key => $value){ ?>
<div class="modal fade" id="table<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="details">
                    <div class="row referee">
                        <div class="col-xs-4">
                            <h4 class="">ID / Tittle</h4>
                            <div class="names">
                                <?php foreach($value['alarms'] as $key1 => $value1){?>
                                <h6>
                                    <?php echo $value1['product_name']; ?>
                                </h6>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="">Replacement</h4>
                            <div class="names">
                                <?php foreach($value['alarms'] as $key1 => $value1){?>
                                <h6>
                                    <span class="hid"><?php echo $value1['replacement_date']; ?></span>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </h6>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="">Renewal</h4>
                            <div class="names">
                                <?php foreach($value['alarms'] as $key1 => $value1){?>
                                    <h6>
                                        <span class="hid"><?php echo $value1['renewal_date']; ?></span>
                                        <i class="fa fa-times" aria-hidden="true"></i>
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