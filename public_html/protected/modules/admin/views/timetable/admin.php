<?php
/* @var $this TimetableModelController */
/* @var $model TimetableModel */

$this->breadcrumbs = array(
    'Timetable Models' => array('index'),
    'Manage',
);
?>

<h1>Расписание</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'timetable-model-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'idLesson',
        'week',
        'dayOfWeek',
        'idGroup',
        'idLecturer',
        /*
          'title',
          'idCorpus',
          'idClassroom',
          'shortTitle',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
