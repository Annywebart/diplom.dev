<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */

$this->breadcrumbs = array(
    'Specialities Models' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List SpecialitiesModel', 'url' => array('index')),
    array('label' => 'Manage SpecialitiesModel', 'url' => array('admin')),
);
?>

<h1>Create SpecialitiesModel</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>

