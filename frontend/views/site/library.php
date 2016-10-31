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
                        <select name="category_id">
                            <option value="0">All</option>
                            <?php
                            foreach ($categories as $category) {
                                $class = '';
                                if($category_id==$category['id'])
                                    $class = 'selected';
                                echo '<option '.$class.' value="'.$category['id'].'">'.$category['title'].'</option>';
                            }
                            ?>
                        </select>
                        <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    <?php ActiveForm::end(); ?>


                    <?php
                    foreach ($libraries as $library) {
                        ?>
                        <div class="go-to-link sadeco-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="media-object" width="75" src="<?php echo Yii::$app->params['RootLink'].$library['image'];?>" alt="<?php echo $library['title'];?>">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><?php echo $library['title'];?></h4>
                                            <p><?php echo strip_tags($library['description']);?></p>
                                        </div>
                                        <a href="<?php echo $library['link'];?>" target="_blank">
                                        <button type="button" class="btn btn-danger">Go To Link</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    if(count($libraries)==0)
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
