<?php
/* @var $this LessonsController */
/* @var $model LessonsModel */

$this->breadcrumbs = array(
    'Lessons Models' => array('index'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование информации о паре: <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>