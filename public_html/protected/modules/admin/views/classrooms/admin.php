<?php
/* @var $this ClassroomsController */
/* @var $model ClassroomsModel */

$this->breadcrumbs = array(
    'Classrooms Models' => array('index'),
    'Manage',
);
?>

<h1>Аудитории</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'classrooms-model-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'idCorpus',
        'number',
        'level',
        'type',
        'seats',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
