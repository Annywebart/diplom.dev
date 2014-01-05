<?php
/* @var $this TimetableModelController */
/* @var $model TimetableModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'timetable-model-form',
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
        <?php echo $form->labelEx($model, 'idLesson'); ?>
        <?php echo $form->dropDownList($model, 'idLesson', LessonsModel::getLessonsList(), array('empty' => '')); ?>
        <?php echo $form->error($model, 'idLesson'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'week'); ?>
        <?php echo $form->dropDownList($model, 'week', TimetableModel::$weekList); ?>
        <?php echo $form->error($model, 'week'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'dayOfWeek'); ?>
        <?php echo $form->dropDownList($model, 'dayOfWeek', TimetableModel::$dayOfWeekList, array('empty' => '')); ?>
        <?php echo $form->error($model, 'dayOfWeek'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idGroup'); ?>
        <?php echo $form->dropDownList($model, 'idGroup', GroupsModel::getGroupsList(), array('empty' => '')); ?>
        <?php echo $form->error($model, 'idGroup'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idLecturer'); ?>
        <?php echo $form->dropDownList($model, 'idLecturer', LecturersModel::getLecturersList(), array('empty' => '')); ?>
        <?php echo $form->error($model, 'idLecturer'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'shortTitle'); ?>
        <?php echo $form->textField($model, 'shortTitle', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'shortTitle'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idCorpus'); ?>
        <?php
        echo $form->dropDownList($model, 'idCorpus', CorpusesModel::getCorpusesList(), array(
            'empty' => '',
            'ajax' => array(
                'type' => 'POST',
                'url' => Yii::app()->createAbsoluteUrl('admin/timetable/dynamicClassrooms'),
                'update' => '#TimetableModel_idClassroom',
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