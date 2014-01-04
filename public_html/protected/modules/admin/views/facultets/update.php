
<?php
/* @var $this FacultetsController */
/* @var $model FacultetsModel */

$this->breadcrumbs = array(
    'Facultets Models' => array('index'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование факультета: <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
