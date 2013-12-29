
<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */

$this->breadcrumbs = array(
    'Specialities Models' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List SpecialitiesModel', 'url' => array('index')),
    array('label' => 'Create SpecialitiesModel', 'url' => array('create')),
    array('label' => 'View SpecialitiesModel', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage SpecialitiesModel', 'url' => array('admin')),
);
?>

<h1>Update SpecialitiesModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>

