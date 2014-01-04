<?php
/* @var $this TimetableModelController */
/* @var $model TimetableModel */

$this->breadcrumbs = array(
    'Timetable Models' => array('index'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование информации о расписании: <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>