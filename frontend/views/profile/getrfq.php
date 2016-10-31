<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'get RFQ';
?>

<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                get RFQ
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
                <?php foreach($results as $key => $value){?>
                    rfq_no : <?php echo $value['rfq_no']; ?><br>
                    title : <?php echo $value['title']; ?><br>
                    status : <?php echo $value['status']; ?><br>
                    delivery_method : <?php echo $value['delivery_method']; ?><br>
                    delivery_date : <?php echo $value['delivery_date']; ?><br>
                    total : <?php echo $value['total']; ?><br>
                    items : <br>
                        <?php foreach($value['items'] as $key1 => $value1){?>
                            item_name : <?php echo $value1['item_name']; ?>
                            - quantity : <?php echo $value1['quantity']; ?>
                            - price : <?php echo $value1['price']; ?>
                        <br>
                        <?php } ?>
                <?php } ?>

                </div>
                <!--Company History-->
            </div>
        </div>
    </div>

</div>
<!--End Content-->
