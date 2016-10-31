<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:10 م
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
                <!--Company History-->
                <div class="history sadeco-group">
                    <p>
                        <?php echo $model['description'];?>
                    </p>
                </div>

                <!--Company History-->
            </div>
        </div>
    </div>

</div>
<!--End Content-->
