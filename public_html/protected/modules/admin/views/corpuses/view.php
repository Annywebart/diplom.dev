<?php
/* @var $this CorpusesController */
/* @var $model CorpusesModel */

$this->breadcrumbs = array(
    'Corpuses Models' => array('index'),
    $model->title,
);
?>

<h1>Просмотр корпуса: <?php echo $model->title; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'title',
        'description',
    ),
));
?>
