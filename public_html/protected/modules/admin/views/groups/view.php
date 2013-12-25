<?php
/* @var $this GroupsController */
/* @var $model GroupsModel */

$this->breadcrumbs = array(
    'Groups Models' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List GroupsModel', 'url' => array('index')),
    array('label' => 'Create GroupsModel', 'url' => array('create')),
    array('label' => 'Update GroupsModel', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete GroupsModel', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage GroupsModel', 'url' => array('admin')),
);
?>

<h1>View GroupsModel #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'idSpeciality',
        'title',
    ),
));
?>
