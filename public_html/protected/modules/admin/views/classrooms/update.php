<?php
/* @var $this ClassroomsController */
/* @var $model ClassroomsModel */

$this->breadcrumbs = array(
    'Classrooms Models' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование аудитори: <?php echo $model->number; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>