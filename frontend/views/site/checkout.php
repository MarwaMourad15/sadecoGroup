<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 31/08/16
 * Time: 06:08 م
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\User;

$items = array();
$item1 = array();
$item1['part_no']= '1885';
$item1['quantity'] = 2;
$item1['certificate_of_conformity'] = 0;
$item1['installion_required'] = 0;
$item1['on_site_service'] = 0;
$item1['note'] = 'test';
$item1['enable_recurring'] = true;
$item1['frequency_in_months'] = 2;
$item2 = array();
$item2['part_no']= '1886';
$item2['quantity'] = 2;
$item2['certificate_of_conformity'] = 0;
$item2['installion_required'] = 0;
$item2['on_site_service'] = 0;
$item2['note'] = 'test';
$item2['enable_recurring'] = true;
$item2['frequency_in_months'] = 2;

$items[0] = $item1;
$items[1] = $item2;

$items_ser = base64_encode(json_encode($items));

echo '<pre>';
print_r($items);
echo '</pre>';

$this->title = 'Chechout';
?>

<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                Checkout
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
            <?php $form = ActiveForm::begin([
                //'action' => ['index'],
                'method' => 'post',
                'options' => ['class' => 'sign-up'],
            ]); ?>
            <div class="row">
                <h1>Accout Information</h1>
                <hr class="cust">
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <label>Contact Email :</label>
                </div>
                <div class="col-xs-9">
                    <input type="email" name="contact_email" placeholder="contact_email" required="true">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>Delivery Method :</label>
                </div>
                <div class="col-xs-9">
                    <select name="deliver_method">
                        <?php foreach($delivery_methods as $key => $value){?>
                            <option value="<?php echo $value['delivery_method_id']; ?>"><?php echo $value['delivery_method']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label> Delivery Date :</label>
                </div>
                <div class="col-xs-9">
                    <input name="delivery_date" type="date" placeholder="delivery_date" required="true">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>Billing Country :</label>
                </div>
                <div class="col-xs-9">
                    <select name="billing_country">
                        <?php foreach($billing_countries as $key => $value){?>
                            <option value="<?php echo $value['country_id']; ?>"><?php echo $value['country']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>Billing City :</label>
                </div>
                <div class="col-xs-9">
                    <input type="text" name="billing_city" placeholder="billing_city" required="true">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>Billing Address :</label>
                </div>
                <div class="col-xs-9">
                    <input type="text" name="billing_address" placeholder="billing_address" required="true">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>Billing Address :</label>
                </div>
                <div class="col-xs-9">
                    <input type="text" name="billing_address" placeholder="billing_address" required="true">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>Shipping Country :</label>
                </div>
                <div class="col-xs-9">
                    <select name="shipping_country">
                        <?php foreach($shipping_countries as $key => $value){?>
                            <option value="<?php echo $value['country_id']; ?>"><?php echo $value['country']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>Shipping City :</label>
                </div>
                <div class="col-xs-9">
                    <input type="text" name="shipping_city" placeholder="shipping_city" required="true">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>Shipping Address :</label>
                </div>
                <div class="col-xs-9">
                    <input type="text" name="shipping_address" placeholder="shipping_address" required="true">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label></label>
                </div>
                <div class="col-xs-9">
                    <input type="hidden" value="<?php echo $items_ser?>" name="items" >
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <?= Html::submitButton('Submit') ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <!--End navbar-->
</div>
<!--End Content-->
