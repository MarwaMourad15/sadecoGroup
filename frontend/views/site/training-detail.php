<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 28/09/16
 * Time: 03:15 م
 */

$this->title = $type;
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
                <?php
                foreach ($trainings as $training) {
                    $courses = $training['upcoming_courses'];
                    foreach ($courses as $course) {
                        ?>
                        <div class="col-xs-12">
                            <!--Services-->
                            <div class="services sadeco-group">
                                <?php
                                if (isset($course['video_url'])) {
                                    echo $course['video_url'];
                                    ?>
                                <?php
                                } ?>
                                <h3><?php echo $course['training_language']; ?></h3>
                                <h4><?php echo $course['start_date']; ?></h4>

                                <p>
                                    <?php echo $course['long_description']; ?>
                                </p>

                            </div>
                            <!--Services-->
                        </div>
                    <?php
                    }
                }
                ?>
        </div>
    </div>

</div>
<!--End Content-->
