
<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */

$this->breadcrumbs = array(
    'Students Models' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List StudentsModel', 'url' => array('index')),
    array('label' => 'Manage StudentsModel', 'url' => array('admin')),
);
?>

<h1>Create StudentsModel</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
