<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 28/09/16
 * Time: 02:31 ص
 */
?>


<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                <?php echo $service['service_name'];?>
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
                    <img  class="brief-img" src="http://sadecogroup.net/crm/<?php echo $service['image_path'];?>">
                    <h3>Description</h3>
                    <p>
                        <?php echo $service['long_description'];?>
                    </p>
                </div>

                <!--Services-->
            </div>

        </div>
    </div>

</div>
<!--End Content-->
