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

$this->title = 'Profile';
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
            <div class="menu col-md-2 col-xs-12">
                <ul class="list-unstyled">
                    <li class="color">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/profile">Profile</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/certificate">Certificate</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/openrfq">OpenRFQ</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/rfq">Rfq</a>
                    </li>
                    <li>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/alerts">Alerts</a>
                    </li>
                </ul>
            </div>
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

                    <div class="row">
                        <div class="col-xs-2 border text-sm">
                            1
                        </div>
                        <div class="col-xs-2 border text-sm">
                            #1
                        </div>
                        <div class="col-xs-2 border text-sm">
                            Tittle 1
                        </div>
                        <div class="col-xs-4 border text-sm">
                            20/08/1990
                        </div>
                        <div class="col-xs-2 text-sm">
                            <button type="button" data-toggle="modal" data-target="#table4" data-whatever="@mdo">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-2 border text-sm">
                            1
                        </div>
                        <div class="col-xs-2 border text-sm">
                            #1
                        </div>
                        <div class="col-xs-2 border text-sm">
                            Tittle 1
                        </div>
                        <div class="col-xs-4 border text-sm">
                            20/08/1990
                        </div>
                        <div class="col-xs-2 text-sm">
                            <button type="button" data-toggle="modal" data-target="#table4" data-whatever="@mdo">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="table1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
                                <h6>
                                    Source One
                                </h6>
                                <h6>
                                    Source Two
                                </h6>
                                <h6>
                                    Source Three
                                </h6>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <h4 class="">Link</h4>
                            <div class="names">
                                <h6>
                                    <a href="http://placehold.it/350x150" target="_blank">Img1</a>
                                </h6>
                                <h6>
                                    <a href="" target="_blank">Img2</a>
                                </h6>
                                <h6>
                                    <a href="" target="_blank">Img3</a>
                                </h6>
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

<div class="modal fade" id="table2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="details">
                    <div class="row referee">
                        <div class="col-xs-3">
                            <h4 class="">Tittle</h4>
                            <div class="names">
                                <h6>
                                    Source One
                                </h6>
                                <h6>
                                    Source Two
                                </h6>
                                <h6>
                                    Source Three
                                </h6>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <h4 class="">Quantity</h4>
                            <div class="names">
                                <h6>
                                    3
                                </h6>
                                <h6>
                                    5
                                </h6>
                                <h6>
                                    7
                                </h6>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <h4 class="">Open Pannels</h4>
                            <div class="names">
                                <h6>
                                    Pannel 1
                                </h6>
                                <h6>
                                    Pannel 2
                                </h6>
                                <h6>
                                    Pannel 3
                                </h6>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <h4 class="">Price</h4>
                            <div class="names">
                                <h6>
                                    130
                                </h6>
                                <h6>
                                    170
                                </h6>
                                <h6>
                                    1300
                                </h6>
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

<div class="modal fade" id="table3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="details">
                    <div class="row referee">
                        <div class="col-xs-4">
                            <h4 class="">Tittle</h4>
                            <div class="names">
                                <h6>
                                    Source One
                                </h6>
                                <h6>
                                    Source Two
                                </h6>
                                <h6>
                                    Source Three
                                </h6>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="">Quantity</h4>
                            <div class="names">
                                <h6>
                                    3
                                </h6>
                                <h6>
                                    5
                                </h6>
                                <h6>
                                    7
                                </h6>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="">Price</h4>
                            <div class="names">
                                <h6>
                                    130
                                </h6>
                                <h6>
                                    170
                                </h6>
                                <h6>
                                    1300
                                </h6>
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

<div class="modal fade" id="table4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
                                <h6>
                                    1/Tittle One
                                </h6>
                                <h6>
                                    2/Tittle Two
                                </h6>
                                <h6>
                                    3/Tittle Three
                                </h6>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="">Replacement</h4>
                            <div class="names">
                                <h6>
                                    <span class="hid">01/05/1980</span>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </h6>
                                <h6>
                                    No
                                </h6>
                                <h6>
                                    <span class="hid">01/05/1980</span>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="">Renewal</h4>
                            <div class="names">
                                <h6>
                                    <span class="hid">01/05/1980</span>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </h6>
                                <h6>
                                    No
                                </h6>
                                <h6>
                                    <span class="hid">01/05/1980</span>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </h6>
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
