
<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */

$this->breadcrumbs = array(
    'Students Models' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List StudentsModel', 'url' => array('index')),
    array('label' => 'Create StudentsModel', 'url' => array('create')),
    array('label' => 'View StudentsModel', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage StudentsModel', 'url' => array('admin')),
);
?>

<h1>Update StudentsModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
    