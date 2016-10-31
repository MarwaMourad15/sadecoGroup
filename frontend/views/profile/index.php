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
            <?php echo Yii::$app->controller->renderPartial('menu'); ?>
            <div class="content profile sign-up col-md-10 col-xs-12 " style="display: block">
                <div class="row">
                    <div class="col-xs-3">
                        <label>First Name(*):</label>
                    </div>
                    <div class="col-xs-9">
                        <p>Marwa</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Last Name(*):</label>
                    </div>
                    <div class="col-xs-9">
                        <p>Mourad</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Your E-Mail(*):</label>
                    </div>
                    <div class="col-xs-9">
                        <p>Marwa@yahoo.com</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-3">
                        <label>Mobile:</label>
                    </div>
                    <div class="col-xs-9">
                        <p>0102355584</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Office Phone:</label>
                    </div>
                    <div class="col-xs-9">
                        <p>+02 586321751</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Fax:</label>
                    </div>
                    <div class="col-xs-9">
                        <p>+02 586321751</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Account:</label>
                    </div>
                    <div class="col-xs-9">
                        <p>Company Account</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Title:</label>
                    </div>
                    <div class="col-xs-9">
                        <p>Test Tittle</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Interested:</label>
                    </div>
                    <div class="col-xs-9">
                        <p>Interseted Options</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Mailing-City:</label>
                    </div>
                    <div class="col-xs-9">
                        <p>Egypt</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <label>Mailing-Address:</label>
                    </div>
                    <div class="col-xs-9">
                        <p>Dubai</p>
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