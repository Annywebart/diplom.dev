<?php
/* @var $this CorpusesController */
/* @var $model CorpusesModel */

$this->breadcrumbs = array(
    'Corpuses Models' => array('index'),
    $model->title => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование корпуса: <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>