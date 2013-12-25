<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */

$this->breadcrumbs = array(
    'Students Models' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List StudentsModel', 'url' => array('index')),
    array('label' => 'Create StudentsModel', 'url' => array('create')),
    array('label' => 'Update StudentsModel', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete StudentsModel', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage StudentsModel', 'url' => array('admin')),
);
?>

<h1>View StudentsModel #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'idGroup',
        'firstName',
        'lastName',
        'gender',
        'dob',
    ),
));
?>
