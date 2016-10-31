<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 16/10/16
 * Time: 12:22 م
 */
/*echo '<pre>';
print_r($product);
echo '</pre>';*/
$this->title = $product['name'];
$this->params['breadcrumbs'][] = $this->title;
?>

<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                <?php echo $this->title;?>
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
                    <?php
                    if (isset($product['image_path'])) {
                        ?>
                        <img src="http://sadecogroup.net/crm/<?php echo $product['image_path']; ?>" alt="<?php echo $product['name']; ?>" >
                    <?php
                    } ?>
                    <?php
                    if(isset($product['item_details'][0]))
                    {
                        foreach ($product['item_details'][0] as $key=>$value) {
                            //print_r($value);
                            echo '<h3>'.$key.'</h3>
                                    <p>'.$value.'
                                    </p>';
                        }

                    }
                    ?>

                    <?php
                    if(isset($product['manufacture_brochure_path'])) {
                        ?>
                    <h3>Manufacture Brochure</h3>
                    <p class="cataloug">
                    <div class="down">
                        <button type="button" class="btn btn-danger"><a href="<?php echo $product['manufacture_brochure_path'];?>" target="_blank"> Download</a></button>
                    </div>
                    </p>
                    <?php
                    }?>
                    <?php
                    if(isset($product['service_manual_path'])) {
                        ?>
                    <h3>Service Manual</h3>
                    <p class="cataloug">
                    <div class="down">
                        <button type="button" class="btn btn-danger"><a href="<?php echo $product['service_manual_path'];?>" target="_blank"> Download</a></button>
                    </div>
                    </p>
                    <?php
                    }?>

                    <?php
                    if(isset($product['sadeco_catalouge_path'])) {
                        ?>
                    <h3>Sadeco Catalouge</h3>
                    <p class="cataloug">
                    <div class="down">
                        <button type="button" class="btn btn-danger"><a href="<?php echo $product['sadeco_catalouge_path'];?>" target="_blank"> Download</a></button>
                    </div>
                    </p>
                    <?php
                    }?>
                    <hr />
                    <?php
                    if(\Yii::$app->user->isGuest) {
                        ?>
                        <div class="Warning">
                            <p> * You Must Login to see All details</p>
                        </div>

                    <?php
                    }
                    else {
                        if ($product['add_to_cart_bottom_link']) {
                            ?>
                            <div class="notes">
                                <h3>Your Comment:</h3>

                                <div class="row">
                                    <div class="col-sm-10 col-xs-12">
                                        <textarea></textarea>
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        <div class="arr">
                                            <i class="fa fa-chevron-up text-center click-plus" aria-hidden="true"
                                               onclick="count_val(1)"></i>
                                            <br>
                                            <input type="text" id="amount" onkeyup="count_val(0)" value="1">
                                            <br>
                                            <i class="fa fa-chevron-down text-center click-min" aria-hidden="true"
                                               onclick="count_val(-1)"></i>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger btn-lg">Add To Cart</button>
                            </div>
                        <?php
                        }
                    }?>
                <!--Services-->
            </div>

        </div>
    </div>

</div>
<!--End Content-->