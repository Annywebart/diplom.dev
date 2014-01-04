<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */

$this->breadcrumbs = array(
    'Students Models' => array('index'),
    $model->id,
);
?>

<h1>Просмотр информации о студенте: <?php echo $model->lastName; ?></h1>

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
