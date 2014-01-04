<?php
/* @var $this CorpusesController */
/* @var $model CorpusesModel */

$this->breadcrumbs = array(
    'Corpuses Models' => array('index'),
    'Manage',
);
?>

<h1>Корпуса</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'corpuses-model-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'title',
        'description',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
