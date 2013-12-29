
<?php
/* @var $this FacultetsController */
/* @var $model FacultetsModel */

$this->breadcrumbs = array(
    'Facultets Models' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List FacultetsModel', 'url' => array('index')),
    array('label' => 'Manage FacultetsModel', 'url' => array('admin')),
);
?>

<h1>Создать факультет</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>

