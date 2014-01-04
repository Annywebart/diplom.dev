<?php
/* @var $this LessonsController */
/* @var $model LessonsModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'lessons-model-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'timeStart'); ?>
        <?php echo $form->textField($model, 'timeStart'); ?>
        <?php echo $form->error($model, 'timeStart'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'timeEnd'); ?>
        <?php echo $form->textField($model, 'timeEnd'); ?>
        <?php echo $form->error($model, 'timeEnd'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->