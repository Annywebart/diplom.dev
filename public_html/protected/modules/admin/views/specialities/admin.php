<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */

$this->breadcrumbs = array(
    'Specialities Models' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List SpecialitiesModel', 'url' => array('index')),
    array('label' => 'Create SpecialitiesModel', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#specialities-model-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Специальности</h1>
<?php echo CHtml::link('Создать', Yii::app()->createAbsoluteUrl('admin/specialities/create')) ?>   

<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter' => $model,
    'type' => 'striped bordered',
    'dataProvider' => $model->search(),
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

