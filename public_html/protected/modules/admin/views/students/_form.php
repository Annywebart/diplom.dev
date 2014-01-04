<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'students-model-form',
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
        <?php echo $form->labelEx($model, 'idGroup'); ?>
        <?php echo $form->textField($model, 'idGroup'); ?>
        <?php echo $form->error($model, 'idGroup'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'firstName'); ?>
        <?php echo $form->textField($model, 'firstName', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'firstName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'lastName'); ?>
        <?php echo $form->textField($model, 'lastName', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'lastName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->textField($model, 'gender'); ?>
        <?php echo $form->error($model, 'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'dob'); ?>
        <?php echo $form->textField($model, 'dob'); ?>
        <?php echo $form->error($model, 'dob'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'isFree'); ?>
        <?php echo $form->textField($model, 'isFree'); ?>
        <?php echo $form->error($model, 'isFree'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->