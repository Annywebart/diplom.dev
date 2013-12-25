<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */

$this->breadcrumbs = array(
    'Specialities Models' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List SpecialitiesModel', 'url' => array('index')),
    array('label' => 'Create SpecialitiesModel', 'url' => array('create')),
    array('label' => 'Update SpecialitiesModel', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete SpecialitiesModel', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage SpecialitiesModel', 'url' => array('admin')),
);
?>

<h1>View SpecialitiesModel #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'idFacultet',
        'code',
        'description',
    ),
));
?>
