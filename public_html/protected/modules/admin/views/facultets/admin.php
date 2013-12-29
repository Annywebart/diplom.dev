<?php
/* @var $this FacultetsController */
/* @var $model FacultetsModel */

$this->menu = array(
    array('label' => 'List FacultetsModel', 'url' => array('index')),
    array('label' => 'Create FacultetsModel', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#facultets-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Факультеты</h1>
<?php echo CHtml::link('Создать', Yii::app()->createAbsoluteUrl('admin/facultets/create')) ?>       

<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter' => $model,
    'type' => 'striped bordered',
    'dataProvider' => $model->search(),
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
        'title',
        'code',
        'description',
        'idCorpus',
        'idClassroom',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
    'extendedSummary' => array(
        'title' => 'Expertise',
        'columns' => array(
            'language' => array(
                'label' => 'Total Expertise',
                'types' => array(
                    'CSS' => array('label' => 'Css'),
                    'JavaScript' => array('label' => 'Js'),
                    'HTML' => array('label' => 'html')
                ),
                'class' => 'TbPercentOfTypeGooglePieOperation',
            )
        )
    ),
    'extendedSummaryOptions' => array(
        'class' => 'well pull-right',
        'style' => 'width:300px'
    ),
));
?>
