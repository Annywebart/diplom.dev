<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div id="main_content">
            <div class="row">
                <div class="error_container">
                    <h1>Ошибка <?php echo $code; ?></h1>
                    <?php echo CHtml::encode($message); ?>
                </div>
            </div>
        </div></div>
</section>