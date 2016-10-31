<?php
$related_sections = \backend\models\RelatedSection::ListAll();
//var_dump($related_sections);
?>
<div class="related bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <!--Relates Section-->
                <div class="related-section">
                    <h3>Related Section</h3>
                    <hr class="cust">
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <?php $count = 0; ?>
                            <?php foreach($related_sections as $related_section){ ?>
                            <div class="media">
                                <div class="media-left">
                                    <a href="<?php echo $related_section['link']; ?>">
                                        <img class="media-object" src="<?php echo Yii::$app->params['RootLink'];?><?php echo $related_section['image'];?>" alt="<?php echo $related_section['title']; ?>" height="65" width="50">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="<?php echo $related_section['link']; ?>">
                                        <h4 class="media-heading"><?php echo $related_section['title']; ?></h4>
                                    </a>
                                    <?php echo $related_section['intro']; ?>
                                </div>
                            </div>

                                <?php if($count == 0){ ?>
                                    <hr>
                                <?php }else if ($count == 1){ ?>
                                    <hr class="visible-sm visible-xs">
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                <?php }else if ($count == 2){ ?>
                                    <hr>
                                <?php } ?>

                                <?php $count++ ?>
                            <? } ?>
                        </div>
                    </div>

                </div>
                <!--Relates Section-->
            </div>

            <div class="col-md-4 col-xs-12">
                <!--Adds Slider-->
                <?php
                $advs = \backend\models\Advertisment::find()->orderBy('id ASC')->all();
                ?>
                <div class="adds-slider">
                    <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                            for($i=0; $i<count($advs);$i++ ) {
                                if($i==0)$class = 'active'; else $class='';
                                ?>
                                <li data-target="#carousel-example-generic2" data-slide-to="<?php echo $i;?>" class="<?php echo $class;?>"></li>
                            <?php
                            }?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                            $i=0;
                            foreach ($advs as $one) {
                                $class = '';
                                if ($i == 0)
                                    $class = 'active';
                                $i++;
                                ?>
                                <div class="item <?php echo $class ?>">
                                    <img src="<?php echo Yii::$app->params['RootLink'];?><?php echo $one['image'];?>" alt="<?php echo $one['title'];?>">
                                </div>
                            <?php
                            }?>
                        </div>

                    </div>
                </div>
                <!--Adds Slider-->
            </div>
        </div>
    </div>
</div>
