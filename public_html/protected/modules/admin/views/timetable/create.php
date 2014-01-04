<?php
/* @var $this TimetableModelController */
/* @var $model TimetableModel */

$this->breadcrumbs = array(
    'Timetable Models' => array('index'),
    'Create',
);
?>

<h1>Создание расписания</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>