<?php
/* @var $this Lecturers2Controller */
/* @var $model LecturersModel */

$this->breadcrumbs = array(
    'Lecturers Models' => array('index'),
    'Create',
);
?>

<h1>Добавление преподавателя</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>