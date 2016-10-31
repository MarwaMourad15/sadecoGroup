<?php
/* @var $this yii\web\View */
$this->title = 'Home';
?>


<!--Home Slider-->
<div class="photos-slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            for($i=0; $i<count($slider);$i++ ) {
                if($i==0)$class = 'active'; else $class='';
                ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" class="<?php echo $class;?>"></li>
            <?php
            }?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <?php
            $i=0;
            foreach ($slider as $one) {
                $class = '';
                if ($i == 0)
                    $class = 'active';
                $i++;
                ?>
                <div class="item <?php echo $class ?>">
                    <img src="<?php echo Yii::$app->params['RootLink'];?><?php echo $one['image'];?>" alt="<?php echo $one['title'];?>">

                    <div class="carousel-caption">
                        <h3><?php echo $one['title'];?></h3>

                        <p><?php echo $one['description'];?>
                        </p>
                    </div>
                </div>
            <?php
            }?>
        </div>

    </div>
</div>
<!--Home Slider-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2><?php echo $home_brief['title'];?></h2>
        </div>
    </div>
</div>
<!--Home Slider-->

<!--Start Content-->
<div class="content">
    <div class="container">
        <div class="row">
            <!--Home Slider-->
            <div class="col-xs-12">
                <!--Text info -->
                <div class="sadeco-group">
                    <p>
                        <?php echo $home_brief['description'];?>
                    </p>
                </div>
                <!--Text info -->
            </div>

        </div>
    </div>
</div>
<!--End Content-->


<!-- Start Partner & Supliers-->
<div class="partner">
    <div class="container">
        <h3 class="text-center">
            Partners & Suppliers
        </h3>
        <div class="row part-slider">
            <?php
            foreach ($partner as $one_partner) {
                ?>
                <div>
                    <img src="<?php echo Yii::$app->params['RootLink'];?><?php echo $one_partner['image'];?>" title="<?php echo $one_partner['title'];?>" class="img-responsive">
                </div>
            <?php
            }

            ?>
        </div>
    </div>
</div>
<!-- end Partner & Supliers-->
