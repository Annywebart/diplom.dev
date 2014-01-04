<?php
/* @var $this Lecturers2Controller */
/* @var $model LecturersModel */

$this->breadcrumbs = array(
    'Lecturers Models' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование информации о преподавателе: <?php echo $model->lastName; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>