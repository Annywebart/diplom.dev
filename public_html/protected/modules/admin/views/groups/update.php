
<?php
/* @var $this GroupsController */
/* @var $model GroupsModel */

$this->breadcrumbs = array(
    'Groups Models' => array('index'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование группы: <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
