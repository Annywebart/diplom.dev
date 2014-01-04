<?php
/* @var $this DepartmentsController */
/* @var $model DepartmentsModel */

$this->breadcrumbs = array(
    'Departments Models' => array('index'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование кафедры <?php echo $model->shortTitle; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>