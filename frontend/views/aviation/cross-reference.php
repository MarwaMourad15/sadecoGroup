<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:08 م
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = $model['title'];
$this->params['breadcrumbs'][] = $this->title;
//var_dump($products);
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
                <!--Services-->
                <div class="services sadeco-group">
                    <p>
                        <?php echo $model['description'];?>
                    </p>

                    <div class="complete">
                        <?php $form = ActiveForm::begin([
                            'method' => 'post'
                        ]); ?>
                        <input type="text" placeholder="insert product id" class="input-lg" name="id" style="color: black" value="<?php echo $product_id; ?>">
                        <button type="submit" class="btn btn-danger btn-lg">ok</button>
                        <?php ActiveForm::end(); ?>
                    </div>

                </div>
                <?php $count = 0 ;?>
                <div class="row service-result text-center">
                    <?php if(isset($products)){ ?>
                    <?php foreach($products as $key => $value){ ?>
                            <?php if( $count%4 == 0){ ?>
                                <div class="row">
                            <?php } ?>
                            <div class="col-md-3 col-xs-6">
                                <?php echo '<a href="'.Yii::$app->homeUrl.'aviation/product/'. $value['crmid'].'">'; ?>
                                    <div class="thumbnail">
                                        <?php if(isset($value['image_path'])){?>
                                        <img src="<?php echo $value['image_path']; ?>" alt="res-2" class="img-rounded">
                                        <?php } ?>
                                        <div class="caption">
                                            <h3><?php echo $value['item_name'];?></h3>
                                            <p>
        <!--                                        --><?php //echo $value['item_description']; ?>
                                                <?php if($value['item_description'])echo substr($value['item_description'] , 0, 80).'...'; ?>
                                            </p>
                                            <p>
        <!--                                        <a href="http://localhost:81/sadeco/frontend/web/site/search-detail1" class="btn btn-primary" role="button">-->
                                                <?php echo '<a href="'.Yii::$app->homeUrl.'aviation/product/'. $value['crmid'].'" class="btn btn-primary" role="button" >'; ?>
                                                    read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php if($count%4 == 3){ ?>
                                </div>
                            <?php } ?>
                            <?php $count++; ?>
                    <?php } ?>
                    <?php } ?>
                </div>


<!--                <div class="Warning">-->
<!--                    <p> * Mandatory Market, SDS And Test Frequancies...You Must Login</p>-->
<!--                </div>-->
<!--                <div class="notes">-->
<!--                    <h3>Note</h3>-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-10 col-xs-12">-->
<!--                            <textarea></textarea>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2 col-xs-12">-->
<!--                            <div class="arr">-->
<!--                                <i class="fa fa-chevron-up text-center click-plus" aria-hidden="true" onclick="count_val(1)"></i>-->
<!--                                <br>-->
<!--                                <input type="text" id="amount" onkeyup="count_val(0)" value="1">-->
<!--                                <br>-->
<!--                                <i class="fa fa-chevron-down text-center click-min" aria-hidden="true" onclick="count_val(-1)"></i>-->
<!--                                <br>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <button type="button" class="btn btn-danger btn-lg">Add To Cart</button>-->
<!--                </div>-->
                <!--Services-->
            </div>

        </div>
    </div>

</div>
<!--End Content-->
