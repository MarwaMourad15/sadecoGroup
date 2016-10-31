<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 13/10/16
 * Time: 07:24 م
 */
?>


<div class="row service-result text-center">
    <?php
    if($products) {
        $counter = 0;
        $counter2 = 0;
        echo '<div class="row">';
        foreach ($products as $product) {
            if (!isset($product['bundle_items'])) {
                if($counter%4 == 0)
                {
                    echo '</div><div class="row">';
                }
                ?>
                <div class="col-md-3 col-xs-6">
                    <a href="<?php echo Yii::$app->homeUrl; ?>aviation/product/<?php echo $product['crmid']; ?>">
                        <div class="thumbnail">

                            <?php
                            if (isset($product['bundle_image_path'])) {
                                ?>
                                <img class="img-rounded"
                                     src="http://sadecogroup.net/crm/<?php echo $product['bundle_image_path']; ?>"
                                    <?php echo $product['bundle_name']; ?>>
                            <?php
                            } ?>

                            <div class="caption">
                                <h3><?php echo $product['bundle_name']; ?></h3>

                                <p>
                                    <?php if($product['bundle_description']) echo substr($product['bundle_description'] , 0 , 80).'...'; ?>
                                </p>

                                <p>
                                    <a href="<?php echo Yii::$app->homeUrl; ?>aviation/product/<?php echo $product['crmid']; ?>"
                                       class="btn btn-primary" role="button">read more</a>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
                $counter++;
            }
            else
            {
            ?>
                <div class="breif services">
                    <h2><?php echo $product['bundle_name']?></h2>
                    <p>
                        <?php echo $product['bundle_description']; ?>
                    </p>
                    <?php
                    if (isset($product['bundle_image_path'])) {
                        ?>
                        <img
                             src="http://sadecogroup.net/crm/<?php echo $product['bundle_image_path']; ?>"
                            <?php echo $product['bundle_name']; ?>>
                    <?php
                    } ?>
                </div>
            <div class="service-result text-center">

                <?php
                echo '<div class="row">';
                foreach($product['bundle_items'] as $item)
                {
                    if($counter2%4 == 0)
                    {
                        echo '</div><div class="row">';
                    }
                    ?>
                    <div class="col-md-3 col-xs-6">
                        <a href="<?php echo Yii::$app->homeUrl; ?>aviation/product/<?php echo $item['item_crmid']; ?>">
                            <div class="thumbnail">

                                <?php
                                if (isset($item['item_image_path'])) {
                                    ?>
                                    <img class="img-rounded"
                                         src="http://sadecogroup.net/crm/<?php echo $item['item_image_path']; ?>"
                                        alt="<?php echo $item['item_name']; ?>" >
                                <?php
                                } ?>

                                <div class="caption">
                                    <h3><?php echo $item['item_name']; ?></h3>

                                    <p>
                                        <?php if($item['item_ description'])echo substr($item['item_ description'] , 0, 80).'...'; ?>
                                    </p>

                                    <p>
                                        <a href="<?php echo Yii::$app->homeUrl; ?>aviation/product/<?php echo $item['item_crmid']; ?>"
                                           class="btn btn-primary" role="button">read more</a>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    $counter2++;
                }
                echo '</div>';
                ?>
                </div>
            <?php
            }
        }
        echo '</div>';
    }
    else
    {
        echo '<h4>No Result Found</h4>';
    }
    ?>

</div>