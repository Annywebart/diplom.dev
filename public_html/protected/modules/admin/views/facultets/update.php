<?php
/* @var $this FacultetsController */
/* @var $model FacultetsModel */

$this->breadcrumbs=array(
	'Facultets Models'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FacultetsModel', 'url'=>array('index')),
	array('label'=>'Create FacultetsModel', 'url'=>array('create')),
	array('label'=>'View FacultetsModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FacultetsModel', 'url'=>array('admin')),
);
?>

<h1>Update FacultetsModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>