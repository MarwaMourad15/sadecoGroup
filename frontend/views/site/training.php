<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:29 م
 */

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

                    <!--<div class="download-search">
                        <input type="text" placeholder="Product Search..." >
                        <select>
                            <option>By Item ID</option>
                            <option>By Item Name</option>
                            <option>By Item Type</option>
                            <option>By Item Price</option>
                        </select>
                        <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>-->

                    <?php
                    if(($trainings))
                        foreach ($trainings as $training) {
                            ?>
                            <div class="go-to-link sadeco-group">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="media">
                                            <div class="media-left">
                                                <?php
                                                if(isset($training['image_file_path']))
                                                {?>
                                                    <img class="media-object" src="http://sadecogroup.net/crm/<?php echo $training['image_file_path'];?>" alt="media1">
                                                <?php
                                                }?>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><?php echo $training['training_type'];?></h4>
                                                <?php echo $training['brief_description'];?>
                                            </div>

                                        <?php
                                        echo \yii\bootstrap\Html::a('<button type="button" class="btn btn-danger">Details</button>', ['training-details', 'type'=>$training['training_type']], [
                                           // 'class' => 'glyphicon glyphicon-remove pull-right',
                                            'data' => [
                                                'method' => 'post',
                                            ],
                                        ]);

                                        ?>
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
