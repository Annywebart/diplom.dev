<?php
/* @var $this DepartmentsController */
/* @var $model DepartmentsModel */

$this->breadcrumbs = array(
    'Departments Models' => array('index'),
    'Create',
);
?>

<h1>Добавление кафедры</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>