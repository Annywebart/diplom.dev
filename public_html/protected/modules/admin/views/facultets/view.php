<?php
/* @var $this FacultetsController */
/* @var $model FacultetsModel */

$this->breadcrumbs=array(
	'Facultets Models'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List FacultetsModel', 'url'=>array('index')),
	array('label'=>'Create FacultetsModel', 'url'=>array('create')),
	array('label'=>'Update FacultetsModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FacultetsModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FacultetsModel', 'url'=>array('admin')),
);
?>

<h1>View FacultetsModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'code',
		'description',
	),
)); ?>
