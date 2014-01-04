<?php
/* @var $this Lecturers2Controller */
/* @var $model LecturersModel */

$this->breadcrumbs = array(
    'Lecturers Models' => array('index'),
    'Manage',
);
?>

<h1>Преподаватели</h1>

<?php echo CHtml::link('<i class="icon-plus"></i> Создать', Yii::app()->createAbsoluteUrl('admin/lecturers/create'), array('class' => 'btn pull-right')) ?>       
<div class="clearfix"></div>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter' => $model,
    'type' => 'striped',
    'dataProvider' => $model->search(),
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
//        'id',
        'idDepartment',
        'firstName',
        'lastName',
        'fatherName',
        'gender',
        'scientificDegree',
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
