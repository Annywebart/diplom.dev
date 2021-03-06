<?php
/* @var $this GroupsController */
/* @var $model GroupsModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'groups-model-form',
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
        <?php echo $form->labelEx($model, 'idSpeciality'); ?>
        <?php echo $form->dropDownList($model, 'idSpeciality', SpecialitiesModel::getSpecialitiesList()); ?>
        <?php echo $form->error($model, 'idSpeciality'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'course'); ?>
        <?php echo $form->dropDownList($model, 'course', CoursesModel::listData(), array('empty' => '')); ?>
        <?php echo $form->error($model, 'course'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->