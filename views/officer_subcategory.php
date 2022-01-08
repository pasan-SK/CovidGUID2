<?php

$category_options = [];
foreach (\app\models\proxy\CategoryProxy::getAll() as $category) {
    $category_options[$category->getCatId()] = $category->getCatTitle();
}

?>

<div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include "includes/officer_navigation.php" ?>
            <div class="col py-3 bg-white" style="margin-left: 250px">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                if(isset($_GET['edit_id'])){
//                                    $model = \app\models\SubCategory::findOne(['sub_category_id'=>$_GET['edit_id']]);
                            ?>
                                <h1 class="page-header">
                                        Edit a Subcategory
                                </h1>
                            <?php } else
                                {
//                                    $model = new \app\models\SubCategory();
                                    ?>
                                    <h1 class="page-header">
                                    Subcategories
                                    </h1>

                                    <?php
                                }
                                ?>

                        </div>
                    </div>


                    <div class="container">
                            <?php
                            if(isset($_GET['edit_id'])){
                            ?>
                        <div class="col-xs-6">


                            <?php $form = \app\core\form\Form::begin('', 'post') ?>
                            <?php echo $form->selectField($model, 'cat_id', $category_options, !($model->getCatId() === ''), $model->getCatId() ); ?>
                            <?php echo $form->field($model, 'sub_category_name') ?>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <?php \app\core\form\Form::end(); ?>


                        </div>
                        <?php
                        }
                        ?>

                        <div class="col-xs-6">

                            <?php \app\views\components\subcategory\OfficerSubcategory::renderAllSubCategories()?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>