
<?php
/* @var $this GroupsController */
/* @var $model GroupsModel */

$this->breadcrumbs = array(
    'Groups Models' => array('index'),
    'Create',
);
?>

<h1>Добавление группы</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
