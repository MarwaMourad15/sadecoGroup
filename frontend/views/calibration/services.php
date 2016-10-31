<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 01:29 م
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = $brief['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
   /* #category2 option{
        display:none;
    }

    #category2 option.label{
        display:block;
    }*/
</style>
<!--page Tittle-->
<div class="page-tittle">
    <div class="container">
        <div class="row">
            <h2>
                <?php echo $brief['title'];?>
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
                    <p>
                        <?php echo $brief['description'];?>
                    </p>
                </div>

                <?php $form = ActiveForm::begin(); ?>
                <div class="to-choose">
                    <div class="col-sm-6 col-xs-12">
                        <select name="scope" id="scope" required="true" onchange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
                            <option value="">Select Scope</option>
                            <?php
                        foreach ($scopes as $scope) {
                            echo '<option value="'.$scope['service_scope'].'">'.$scope['service_scope'].'</option>';
                        }
                        ?>
                        </select>
                    </div>

                    <div class="col-sm-5 col-xs-12">

                        <select name="sub_scope"  id="sub_scope" >
                            <option class="label" value>Select Sub-Scope</option>
                            <?php
                            /*foreach ($scopes as $scope) {
                                $subs = str_replace('"', "", $scope['service_subscope']);
                                $subs = explode(',',$subs);
                                if(isset($subs) && count($subs)>0) {
                                    foreach ($subs as $sub) {
                                       // echo '<option rel="' . $scope['service_scope'] . '" value="' . $sub . '">' . $sub . '</option>';
                                    }
                                }
                            }*/
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-1 col-xs-12"><button type="submit" class="btn btn-danger"><i class="fa fa-search" aria-hidden="true"></i></button></div>
                </div>

                <?php ActiveForm::end(); ?>
                <div style="clear: both"></div>

                <?php
                if(isset($services) && count($services)>0) {
                    foreach ($services as $service) {
                        ?>
                        <div class="col-xs-12">
                            <!--Services-->
                            <div class="services sadeco-group">
                                <h4><?php echo $service['service_name']; ?></h4>

                                <p>
                                    <?php echo $service['brief_description']; ?>
                                </p>
                                <a class="services-links"
                                   href="service-detail?id=<?php echo $service['service_crm_id']; ?>">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    More Detail
                                </a>
                            </div>

                            <!--Services-->
                        </div>
                    <?php
                    }
                }?>
            </div>

        </div>
    </div>

</div>



    <script>
        function dropdownlist(listindex)
        {
            document.getElementById("sub_scope").options.length = 0;
            switch (listindex)
            {
                <?php
                foreach ($scopes as $scope) {?>
                    case "<? echo $scope['service_scope']?>":
                        document.getElementById("sub_scope").options[0]=new Option("Select Sub scope","");
                        <?php
                        $subs = str_replace('"', "", $scope['service_subscope']);
                        $subs = explode(',',$subs);
                        if(isset($subs) && count($subs)>0) {
                            $o=1;
                            foreach ($subs as $sub) {
                            ?>
                                document.getElementById("sub_scope").options[<?php echo $o;?>] = new Option("<?php echo $sub?>", "<?php echo $sub?>");
                                //echo '<option rel="' . $scope['service_scope'] . '" value="' . $sub . '">' . $sub . '</option>';

                            <?php
                            $o++;
                            }
                        }
                        ?>
                        break;
                <?
                }
                ?>
            }

        }
    </script>

