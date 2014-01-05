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

    <p class="note">Поля со звездочкой <span class="required">*</span> обязательны для заполнения</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('readonly' => true)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'timeStart'); ?>
        <?php $this->widget(
                'bootstrap.widgets.TbTimePicker', array(
                'name' => 'timeStart',
                'value' => $model->timeStart,
                'options' => array(
                    'showMeridian' => false
                ),    
            ));
        ?>
        <?php echo $form->error($model, 'timeStart'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'timeEnd'); ?>
        <?php $this->widget(
                'bootstrap.widgets.TbTimePicker', array(
                'name' => 'timeEnd',
                'value' => $model->timeEnd,
                'options' => array(
                    'showMeridian' => false
                ), 
            ));
        ?>
        <?php echo $form->error($model, 'timeEnd'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->