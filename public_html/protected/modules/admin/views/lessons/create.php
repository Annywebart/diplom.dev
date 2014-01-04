<?php
/* @var $this LessonsController */
/* @var $model LessonsModel */

$this->breadcrumbs = array(
    'Lessons Models' => array('index'),
    'Create',
);
?>

<h1>Добавление пары</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>