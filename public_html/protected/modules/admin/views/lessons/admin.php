<?php
/* @var $this LessonsController */
/* @var $model LessonsModel */

$this->breadcrumbs = array(
    'Lessons Models' => array('index'),
    'Manage',
);
?>

<h1>Пары</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'lessons-model-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'timeStart',
        'timeEnd',
        'title',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
