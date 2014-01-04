
<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */

$this->breadcrumbs = array(
    'Students Models' => array('index'),
    'Create',
);
?>

<h1>Добавление студента</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
