<?php
/* @var $this ClassroomsController */
/* @var $model ClassroomsModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'classrooms-model-form',
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
        <?php echo $form->labelEx($model, 'idCorpus'); ?>
        <?php echo $form->textField($model, 'idCorpus'); ?>
        <?php echo $form->error($model, 'idCorpus'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'number'); ?>
        <?php echo $form->textField($model, 'number'); ?>
        <?php echo $form->error($model, 'number'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'level'); ?>
        <?php echo $form->textField($model, 'level'); ?>
        <?php echo $form->error($model, 'level'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'type'); ?>
        <?php echo $form->textField($model, 'type'); ?>
        <?php echo $form->error($model, 'type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'seats'); ?>
        <?php echo $form->textField($model, 'seats'); ?>
        <?php echo $form->error($model, 'seats'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->