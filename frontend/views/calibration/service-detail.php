<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 28/09/16
 * Time: 02:31 ص
 */

$this->title = $service['service_name'];
$this->params['breadcrumbs'][] = $this->title;
/*echo '<pre>';
print_r($service);
echo '</pre>';*/
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
                    <?php
                    if (isset($service['image_path'])) {
                    ?>
                    <img  class="brief-img" src="http://sadecogroup.net/crm/<?php echo $service['image_path'];?>">
                    <?php }?>

                    <h3>Description</h3>
                    <p>
                        <?php echo $service['long_description'];?>
                    </p>
                </div>

                <div class="survey services sadeco-group">
                    <h3>Survey</h3>
                    <p>
                        You Can Improve Our Services By Complete These Surveys!
                        <br>
                        <?php
                        if(isset($service['surveys'])) {
                            foreach ($service['surveys'] as $survey) {
                                echo '
                                <a href=" ' . $survey['survey_path'] . '" target="_blank">
                                    ' . $survey[' survey_title'] . '
                                </a>
                                <br>';
                            }
                        }
                        ?>
                    </p>
                </div>

                <!--Services-->
            </div>

        </div>
    </div>

</div>
<!--End Content-->
