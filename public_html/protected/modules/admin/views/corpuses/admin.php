<?php
/* @var $this CorpusesController */
/* @var $model CorpusesModel */

$this->breadcrumbs = array(
    'Corpuses Models' => array('index'),
    'Manage',
);
?>

<h1>Корпуса</h1>
<?php echo CHtml::link('<i class="icon-plus"></i> Создать', Yii::app()->createAbsoluteUrl('admin/corpuses/create'), array('class' => 'btn pull-right')) ?>       
<div class="clearfix"></div>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter' => $model,
    'type' => 'striped',
    'dataProvider' => $model->search(),
    'emptyText' => 'Результатов не найдено',
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
        'id',
        'title',
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
