
<?php
/* @var $this GroupsController */
/* @var $model GroupsModel */

$this->breadcrumbs = array(
    'Groups Models' => array('index'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List GroupsModel', 'url' => array('index')),
    array('label' => 'Create GroupsModel', 'url' => array('create')),
    array('label' => 'View GroupsModel', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage GroupsModel', 'url' => array('admin')),
);
?>

<h1>Update GroupsModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
