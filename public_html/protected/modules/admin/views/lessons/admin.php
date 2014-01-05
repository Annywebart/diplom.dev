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
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter' => $model,
    'type' => 'striped',
    'dataProvider' => $model->search(),
    'emptyText' => 'Результатов не найдено',
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
//        'id',
        'title',
        'timeStart',
        'timeEnd',
//        array(
//            'name' => 'timeEnd',
//            'class' => 'bootstrap.widgets.TbEditableColumn',
//            'editable' => array(
//                'type' => 'time',
//                'url' => '/admin/lessons/update'
//            )
//        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}',
        ),
    ),
//    'chartOptions' => array(
//        'data' => array(
//            'series' => array(
//                array(
//                    'name' => 'Hours worked',
//                    'attribute' => 'hours'
//                )
//            )
//        ),
//        'config' => array(
//            'chart' => array(
//                'width' => 800
//            )
//        )
//    ),
));
?>

