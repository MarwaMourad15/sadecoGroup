<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Search Detail';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>Search Detail</h2>
        </div>
    </div>
</div>

<!--Start Content-->
<div class="content">
    <!--Start Navbar-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!--Services-->
                <div class="services sadeco-group">
                    <img src="http://localhost:81/sadeco//uploads/pages/slide3.jpg">
                    <h3>Product discription</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form
                    </p>

                    <h3>About Product Manufactures</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form
                    </p>

                    <h3>Product Cataloug</h3>
                    <p class="cataloug">
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.
                    <div class="down">
                        <button type="button" class="btn btn-danger">Download</button>
                    </div>
                    </p>

                    <h3>Product Brochure</h3>
                    <p class="cataloug">
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form.
                    <div class="down">
                        <button type="button" class="btn btn-danger">Download</button>
                    </div>
                    </p>
                </div>


                <div class="services sadeco-group">
                    <h3>Product Features</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form
                    </p>

                    <h3>Product Specification</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form
                    </p>

                    <h3>How To Order</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration in some form
                    </p>
                </div>

                <div class="survey services sadeco-group">
                    <h3>Survey</h3>
                    <p>
                        You Can Improve Our Services By Complete Thi Survey!
                        <br>
                        <a href="survey-pop.html">
                            Survey 1
                        </a>
                        <br>
                        <a href="survey-pop.html">
                            Survey 2
                        </a>
                        <br>
                        <a href="survey-pop.html">
                            Survey 3
                        </a>
                        <br>
                        <a href="survey-pop.html">
                            Survey 4
                        </a>
                        <br>
                    </p>
                </div>

                <div class="Warning">
                    <p> * Mandatory Market, SDS And Test Frequancies...You Must Login</p>
                </div>
                <div class="notes">
                    <h3>Note</h3>
                    <div class="row">
                        <div class="col-sm-10 col-xs-12">
                            <textarea></textarea>
                        </div>
                        <div class="col-sm-2 col-xs-12">
                            <div class="arr">
                                <i class="fa fa-chevron-up text-center click-plus" aria-hidden="true" onclick="count_val(1)"></i>
                                <br>
                                <input type="text" id="amount" onkeyup="count_val(0)" value="1">
                                <br>
                                <i class="fa fa-chevron-down text-center click-min" aria-hidden="true" onclick="count_val(-1)"></i>
                                <br>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger btn-lg">Add To Cart</button>
                </div>
                <!--Services-->
            </div>

        </div>
    </div>

</div>
<!--End Content-->



