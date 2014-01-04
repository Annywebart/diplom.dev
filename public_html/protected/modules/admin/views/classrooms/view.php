<?php
/* @var $this ClassroomsController */
/* @var $model ClassroomsModel */

$this->breadcrumbs = array(
    'Classrooms Models' => array('index'),
    $model->id,
);
?>

<h1>Просмотр аудитории: <?php echo $model->number; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'idCorpus',
        'number',
        'level',
        'type',
        'seats',
    ),
));
?>
