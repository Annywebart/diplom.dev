<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */

$this->breadcrumbs = array(
    'Specialities Models' => array('index'),
    'Manage',
);
?>

<h1>Специальности</h1>
<?php echo CHtml::link('<i class="icon-plus"></i> Создать', Yii::app()->createAbsoluteUrl('admin/specialities/create'), array('class' => 'btn pull-right')) ?>       
<div class="clearfix"></div>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter' => $model,
    'type' => 'striped',
    'dataProvider' => $model->search(),
    'emptyText' => 'Результатов не найдено', 
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
        'idFacultet',
        'code',
        'description',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
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

