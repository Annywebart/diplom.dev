<?php
/* @var $this GroupsController */
/* @var $model GroupsModel */

$this->breadcrumbs = array(
    'Groups Models' => array('index'),
    'Manage',
);
?>

<h1>Группы</h1>
<?php echo CHtml::link('<i class="icon-plus"></i> Создать', Yii::app()->createAbsoluteUrl('admin/groups/create'), array('class' => 'btn pull-right')) ?>       
<div class="clearfix"></div>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter' => $model,
    'type' => 'striped',
    'dataProvider' => $model->search(),
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
        'idSpeciality',
        'title',
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



