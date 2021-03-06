<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <?= Html::csrfMetaTags() ?>
    <title><?php echo Yii::$app->name;?> - <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl;?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl;?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl;?>css/slick.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl;?>css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl;?>css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::$app->homeUrl;?>css/media.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php $this->beginBody() ?>

    <!--Start Sign IN Bar-->
    <div class="sign">
        <div class="container">
            <button type="button" class="btn btn-danger">SIGN IN</button>
        </div>
        <div class="forms">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 border">
                        <h2 class="text-center">Log In</h2>
                        <div class="wrapper">
                            <form class="login">
                                <p class="title">Log in</p>
                                <input type="text" placeholder="Username" autofocus/>
                                <i class="fa fa-user"></i>
                                <input type="password" placeholder="Password" />
                                <i class="fa fa-key"></i>
                                <a href="#">Forgot your password?</a>
                                <button>
                                    <i class="spinner"></i>
                                    <span class="state">Log in</span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-8 col-xs-12">
                        <h2 class="text-center">Sign Up</h2>
                        <div class="col-md-6 col-xs-12">
                            <div class="wrapper">
                                <form class="login">
                                    <input type="text" placeholder="First Name"/>
                                    <i class="fa fa-user"></i>
                                    <input type="text" placeholder="Last Name"/>
                                    <i class="fa fa-user"></i>
                                    <input type="email" placeholder="E-mail"/>
                                    <i class="fa fa-envelope"></i>
                                    <input type="password" placeholder="Password" />
                                    <i class="fa fa-key"></i>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="wrapper">
                                <form class="login">
                                    <input type="password" placeholder="Confirm Password" />
                                    <i class="fa fa-key"></i>
                                    <input type="text" placeholder="Mob"/>
                                    <i class="fa fa-mobile"></i>
                                    <input type="text" placeholder="Company"/>
                                    <i class="fa fa-building"></i>
                                    <input type="text" placeholder="Position"/>
                                    <i class="fa fa-location-arrow"></i>
                                    <button>
                                        <i class="spinner"></i>
                                        <span class="state">Sign Up</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn exit">Exit</button>
            </div>
        </div>
    </div>
    <!--End Sign IN Bar-->

    <!--Start Header-->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <a href="<?php echo Yii::$app->homeUrl;?>"><img src="<?php echo Yii::$app->homeUrl;?>img/logo2.png" alt="logo" class="img-responsive hidden-xs"></a>
                    <a href="<?php echo Yii::$app->homeUrl;?>">
                        <img src="<?php echo Yii::$app->homeUrl;?>img/logo.png" alt="logo" class="img-responsive visible-xs" style="width: 40%;margin: 5px auto">
                    </a>
                </div>

                <div class="search">
                    <div class="col-sm-9 col-xs-12">
                        <span>5</span>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>

                        <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        <select>
                            <option>By Item ID</option>
                            <option>By Item Name</option>
                            <option>By Item Type</option>
                            <option>By Item Price</option>
                        </select>
                        <input type="text" placeholder="Product Search...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header-->

    <!--Start Navbar-->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo Yii::$app->homeUrl;?>">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            About Us
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            $about = \backend\models\About::ListAll();
                            foreach($about as $one)
                            {
                                echo '<li><a href="'.Yii::$app->homeUrl.'site/about/'.$one['id'].'">'.$one['title'].'</a></li>
                            <li role="separator" class="divider"></li>
                            ';
                            }
                            ?>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Calibration
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo Yii::$app->homeUrl.'calibration/services'?>">Services</a></li>
                            <li role="separator" class="divider"></li>
                            <?php
                            $about = \backend\models\Calibration::ListAll();
                            foreach($about as $one)
                            {
                                echo '<li><a href="'.Yii::$app->homeUrl.'site/calibration/'.$one['id'].'">'.$one['title'].'</a></li>
                            <li role="separator" class="divider"></li>
                            ';
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Aviation
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo Yii::$app->homeUrl;?>aviation/services">Services</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo Yii::$app->homeUrl;?>aviation/products">Products and Support</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo Yii::$app->homeUrl;?>aviation/selection-guide">Product Selection guide</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo Yii::$app->homeUrl;?>aviation/cross-reference">Cross Reference</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo Yii::$app->homeUrl;?>aviation/surveys">Surveys</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo Yii::$app->homeUrl;?>aviation/online-purchasing-solution">Online Purchasing Solution</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/news-events">News & Events</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/contact-us">Contact Us</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/library">Library</a>
                    </li>

                    <li>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/download">Download</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/training">Training</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::$app->homeUrl;?>site/survey">Survey</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--End navbar-->



    <div class="">
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>

    <?php echo $this->render('related-section', []) ?>

    <!--Start Contacts-->
    <div class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="bottom-menu">
                        <ul class="list-inline">
                            <li class="active-btm">
                                <a href="<?php echo Yii::$app->homeUrl;?>">
                                    Home
                                </a>
                            </li>
                            <!--<li>
                                <a href="about-company%20history.html">
                                    About Us
                                </a>
                            </li>-->
                            <li>
                                <a href="<?php echo Yii::$app->homeUrl;?>site/news-events">
                                    News & Events
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::$app->homeUrl;?>site/contact-us">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="social text-center">
                        <h3>Follow Us</h3>
                        <?php $setting = \backend\models\Setting::findOne(1);?>
                        <a href="<?php echo $setting['facebook'];?>" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo $setting['twitter'];?>" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo $setting['google_plus'];?>" target="_blank">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo $setting['linkedin'];?>" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="news">
                        <h3>Newsletter</h3>
                        <p>Sign Up and Strat receiving special offers and inside information</p>
                        <input type="email" placeholder="E-mail Address" class="input-lg">
                        <button type="button" class="btn btn-danger btn-lg">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Contacts-->

    <!--Start Footer-->
    <footer class="text-center">
        <p>&copy;2016 SADECO.All rights reserved.powered by <a href="http://fumestudio.com" target="_blank">Fume Studio</a></p>
    </footer>
    <!--End Footer-->
    <!--End Footer-->
    <?php $this->endBody() ?>
    <!--<script src="<?php /*echo Yii::$app->homeUrl;*/?>js/jquery-1.11.3.min.js"></script>-->
    <script src="<?php echo Yii::$app->homeUrl;?>js/bootstrap.js"></script>
    <script src="<?php echo Yii::$app->homeUrl;?>js/slick.min.js"></script>
    <script src="<?php echo Yii::$app->homeUrl;?>js/prefixfree.min.js"></script>
    <script src="<?php echo Yii::$app->homeUrl;?>js/plugin.js"></script>



</body>
</html>
<?php $this->endPage() ?>
