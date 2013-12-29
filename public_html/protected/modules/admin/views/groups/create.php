
<?php
/* @var $this GroupsController */
/* @var $model GroupsModel */

$this->breadcrumbs = array(
    'Groups Models' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List GroupsModel', 'url' => array('index')),
    array('label' => 'Manage GroupsModel', 'url' => array('admin')),
);
?>

<h1>Create GroupsModel</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
