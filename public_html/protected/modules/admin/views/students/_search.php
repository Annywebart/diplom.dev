<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->label($model, 'id'); ?>
        <?php echo $form->textField($model, 'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'idGroup'); ?>
        <?php echo $form->textField($model, 'idGroup'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'firstName'); ?>
        <?php echo $form->textField($model, 'firstName', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'lastName'); ?>
        <?php echo $form->textField($model, 'lastName', array('size' => 50, 'maxlength' => 50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'gender'); ?>
        <?php echo $form->textField($model, 'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'dob'); ?>
        <?php echo $form->textField($model, 'dob'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->