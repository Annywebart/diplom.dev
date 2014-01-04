<?php
/* @var $this FacultetsController */
/* @var $model FacultetsModel */

$this->breadcrumbs = array(
    'Facultets Models' => array('index'),
    $model->title,
);
?>

<h1>Просмотр факультета: <?php echo $model->title; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'title',
        'code',
        'description',
    ),
));
?>
