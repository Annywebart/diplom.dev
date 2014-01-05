<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'specialities-model-form',
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
        <?php echo $form->labelEx($model, 'idFacultet'); ?>
        <?php
        echo $form->dropDownList($model, 'idFacultet', FacultetsModel::getFacultetsList(), array(
            'empty' => '',
            'ajax' => array(
                'type' => 'POST',
                'url' => Yii::app()->createAbsoluteUrl('admin/facultets/dynamicDepartments'),
                'update' => '#SpecialitiesModel_idDepartment',
            )));
        ?>
        <?php echo $form->error($model, 'idFacultet'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idDepartment'); ?>
        <?php echo $form->dropDownList($model, 'idDepartment', array()); ?>
        <?php echo $form->error($model, 'idDepartment'); ?>
    </div>
   
    <div class="row">
        <?php echo $form->labelEx($model, 'code'); ?>
        <?php echo $form->textField($model, 'code', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'code'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->