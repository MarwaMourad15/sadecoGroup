<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:29 م
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = $page['title'];
$this->params['breadcrumbs'][] = $this->title;
?>

    <!--page Tittle-->
    <div class="page-tittle">
        <div class="container">
            <div class="row">
                <h2>
                    <?php echo $page['title'];?>
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
                    <!--Vission-->
                    <div class="history sadeco-group">
                        <p>
                            <?php echo $page['description'];?>
                        </p>
                    </div>

                    <?php $form = ActiveForm::begin([
                        //'action' => ['index'],
                        'method' => 'post',
                    ]); ?>
                    <div class="download-search">
                        <input type="text" name="keyword" value="<?php echo $keyword;?>" placeholder="Product Search..." >
                        <select name="option_id">
                            <?php
                            foreach ($search_option as $option) {
                                $class = '';
                                if($option_id==$option['option_id'])
                                    $class = 'selected';
                                echo '<option '.$class.' value="'.$option['option_id'].'">'.$option['option_name'].'</option>';
                            }
                            ?>
                        </select>
                        <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    <?php ActiveForm::end(); ?>

                    <?php

                    foreach ($downloads as $download) {
                        ?>
                        <div class="go-to-link sadeco-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="media">
<!--                                        <div class="media-left">
                                            <img class="media-object" src="img/media-1.jpg" alt="media1">
                                        </div>-->
                                        <div class="media-body">
                                            <h4 class="media-heading"><?php echo $download['title'];?></h4>
                                            <h5 class="media-heading"><?php echo $download['type'];?></h5>
                                            <?php echo $download['description'];?>
                                        </div>
                                        <a href="http://sadecogroup.net/crm/<?php echo $download['file_path'];?>" target="_blank">
                                            <button type="button" class="btn btn-danger">Download</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }

                    if(count($downloads)==0)
                    {
                        ?>
                        <div class="go-to-link sadeco-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="media-heading">No Result Found</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                    <!--Vission-->
                </div>
            </div>
        </div>
        <!--End navbar-->
    </div>
    <!--End Content-->
