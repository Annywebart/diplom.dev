<?php
/* @var $this LessonsController */
/* @var $model LessonsModel */

$this->breadcrumbs = array(
    'Lessons Models' => array('index'),
    $model->title,
);
?>

<h1>Просмотр информации о паре: <?php echo $model->title; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'timeStart',
        'timeEnd',
        'title',
    ),
));
?>
