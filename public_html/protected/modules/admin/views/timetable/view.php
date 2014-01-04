<?php
/* @var $this TimetableModelController */
/* @var $model TimetableModel */

$this->breadcrumbs = array(
    'Timetable Models' => array('index'),
    $model->title,
);
?>

<h1>Просмотр информации о расписании: <?php echo $model->title; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'idLesson',
        'week',
        'dayOfWeek',
        'idGroup',
        'idLecturer',
        'title',
        'idCorpus',
        'idClassroom',
        'shortTitle',
    ),
));
?>
