<?php
/* @var $this CorpusesController */
/* @var $model CorpusesModel */

$this->breadcrumbs = array(
    'Corpuses Models' => array('index'),
    'Create',
);
?>

<h1>Добавление корпуса</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>