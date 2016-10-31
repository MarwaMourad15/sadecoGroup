<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 03:25 م
 */

$this->title = 'News & Events';
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
                    <div class="service-result text-center">

                        <?php
                        foreach ($news as $new)
                        {
                            ?>
                            <div class="col-md-3 col-xs-6">
                                <a href="<?php echo Yii::$app->homeUrl;?>site/event-details?id=<?php echo $new['id'];?>">
                                    <div class="thumbnail">
                                        <img src="<?php echo Yii::$app->params['RootLink'].$new['image'];?>" alt="<?php echo $new['title'];?>" class="img-rounded">
                                        <div class="caption">
                                            <h3><?php echo $new['title'];?></h3>
                                            <p>
                                                <?php echo $new['intro'];?>
                                            </p>
                                            <p>
                                                <a href="<?php echo Yii::$app->homeUrl;?>site/event-details?id=<?php echo $new['id'];?>" class="btn btn-primary" role="button">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php
                        }
                        ?>


                        <!--<div class="to-show">
                            <div class="col-md-3 col-xs-6">
                                <a href="news-events-after-choose.html">
                                    <div class="thumbnail">
                                        <img src="img/result-1.jpg" alt="res-2" class="img-rounded">
                                        <div class="caption">
                                            <h3>article tittle</h3>
                                            <p>
                                                There are many variations of passages of Lorem Ipsum available
                                            </p>
                                            <p>
                                                <a href="news-events-after-choose.html" class="btn btn-primary" role="button">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <a href="news-events-after-choose.html">
                                    <div class="thumbnail">
                                        <img src="img/result-1.jpg" alt="res-2" class="img-rounded">
                                        <div class="caption">
                                            <h3>article tittle</h3>
                                            <p>
                                                There are many variations of passages of Lorem Ipsum available
                                            </p>
                                            <p>
                                                <a href="news-events-after-choose.html" class="btn btn-primary" role="button">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <a href="news-events-after-choose.html">
                                    <div class="thumbnail">
                                        <img src="img/result-1.jpg" alt="res-2" class="img-rounded">
                                        <div class="caption">
                                            <h3>article tittle</h3>
                                            <p>
                                                There are many variations of passages of Lorem Ipsum available
                                            </p>
                                            <p>
                                                <a href="news-events-after-choose.html" class="btn btn-primary" role="button">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <a href="news-events-after-choose.html">
                                    <div class="thumbnail">
                                        <img src="img/result-1.jpg" alt="res-2" class="img-rounded">
                                        <div class="caption">
                                            <h3>article tittle</h3>
                                            <p>
                                                There are many variations of passages of Lorem Ipsum available
                                            </p>
                                            <p>
                                                <a href="news-events-after-choose.html" class="btn btn-primary" role="button">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="load">
                            <button type="button" class="btn btn-danger btn-lg">Load More</button>
                        </div>-->
                    </div>

                    <!--Services-->
                </div>
            </div>
        </div>

    </div>
    <!--End Content-->
