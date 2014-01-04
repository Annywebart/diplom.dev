<?php
/* @var $this ClassroomsController */
/* @var $model ClassroomsModel */

$this->breadcrumbs = array(
    'Classrooms Models' => array('index'),
    'Create',
);
?>

<h1>Добавление аудитории</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>