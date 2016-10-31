<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:00 م
 */

$this->title = $model['title'];
$this->params['breadcrumbs'][] = $this->title;
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
                </div>

                <div class="to-choose">
                    <div class="col-sm-4 col-xs-12">
                        <select name="category" id="category" onchange="get_sub_category(this.value)">
                            <option value="">Select Category</option>
                            <?php
                            foreach ($_SESSION['categories'] as $category) {
                                $category_vs_sub = $category['categories_vs_sub_categories'];
                                foreach ($category_vs_sub as $one_cat) {
                                    echo '<option value="'.$one_cat['product_category'].'">'.$one_cat['product_category'].'</option>';
                                    /*$subs = str_replace('"', "", $one_cat['product_sub_category']);
                                    $subs = explode(',',$subs);
                                    foreach ($subs as $one_sub) {
                                        echo '     '.$one_sub.'<br>';
                                    }*/
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <select name="sub_category" id="sub_category" onchange="get_product_title(this.value)">
                            <option value="">Sub Category</option>
                        </select>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <select name="product_title" id="product_title" onchange="get_product_result(this.value)">
                            <option value="">product title</option>
                        </select>
                    </div>
                </div>

                <div id="products">

                </div>

                <div class="clearfix"></div>
                <!--<div class="row">
                    <div class="buttons">
                        <div class="col-md-6 col-xs-12">
                            <button type="button" class="btn btn-danger btn-lg">Download Catalogue</button>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <button type="button" class="btn btn-danger btn-lg">Download Brochure</button>
                        </div>
                    </div>
                </div>-->

                <!--Services-->
            </div>
        </div>
    </div>

</div>
<!--End Content-->

<script>
    function get_sub_category(category)
    {
        $.ajax({
            url: '<?php echo Yii::$app->request->baseUrl.'/aviation/sub-category' ?>',
            type: 'post',
            data: {
                category: category,
                _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
            },
            success: function (data) {
                $('#sub_category').html(data);
            },
            complete: function(){
                // $('#loading-image-stat').hide();
            }
        });
    }
function get_product_title(sub_category)
    {
        $.ajax({
            url: '<?php echo Yii::$app->request->baseUrl.'/aviation/product-title' ?>',
            type: 'post',
            data: {
                sub_category: sub_category,
                _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
            },
            success: function (data) {
                $('#product_title').html(data);
                get_product_result();
            },
            complete: function(){
                // $('#loading-image-stat').hide();
            }
        });
    }
function get_product_result(product_title='')
{
    var category = $('#category').val();
    var sub_category = $('#sub_category').val();
    $.ajax({
        url: '<?php echo Yii::$app->request->baseUrl.'/aviation/get-products' ?>',
        type: 'post',
        data: {
            category: category,
            sub_category: sub_category,
            product_title: product_title,
            _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
        },
        success: function (data) {
            $('#products').html(data);
        },
        complete: function(){
            // $('#loading-image-stat').hide();
        }
    });
}
</script>