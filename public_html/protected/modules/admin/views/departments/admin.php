<?php
/* @var $this DepartmentsController */
/* @var $model DepartmentsModel */

$this->breadcrumbs = array(
    'Departments Models' => array('index'),
    'Manage',
);
?>

<h1>Кафедры</h1>
<?php echo CHtml::link('<i class="icon-plus"></i> Создать', Yii::app()->createAbsoluteUrl('admin/departments/create'), array('class' => 'btn pull-right')) ?>       
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
        'idFacultet',
        'title',
        'description',
        'headDepartment',
        'idCorpus',
        'idClassroom',
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
