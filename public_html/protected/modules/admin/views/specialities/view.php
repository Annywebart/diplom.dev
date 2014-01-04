<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */

$this->breadcrumbs = array(
    'Specialities Models' => array('index'),
    $model->id,
);
?>

<h1>Просмотр информации о специальности: <?php echo $model->title; ?></h1>

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
