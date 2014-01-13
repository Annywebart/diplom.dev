<?php
/* @var $this DepartmentsController */
/* @var $model DepartmentsModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'departments-model-form',
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
        <?php echo $form->dropDownList($model, 'idFacultet', FacultetsModel::getFacultetsList()); ?>
        <?php echo $form->error($model, 'idFacultet'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'headDepartment'); ?>
        <?php echo $form->dropDownList($model, 'headDepartment', LecturersModel::getLecturersList(), array('empty' => '')); ?>
        <?php echo $form->error($model, 'headDepartment'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idCorpus'); ?>
        <?php
        echo $form->dropDownList($model, 'idCorpus', CorpusesModel::getCorpusesList(), array(
            'empty' => '',
            'ajax' => array(
                'type' => 'POST',
                'url' => Yii::app()->createAbsoluteUrl('admin/departments/dynamicClassrooms'),
                'update' => '#DepartmentsModel_idClassroom',
            )));
        ?>
        <?php echo $form->error($model, 'idCorpus'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idClassroom'); ?>
        <?php echo $form->dropDownList($model, 'idClassroom', array()); ?>
        <?php echo $form->error($model, 'idClassroom'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->