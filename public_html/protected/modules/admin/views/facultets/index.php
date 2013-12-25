<?php
/* @var $this FacultetsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Facultets Models',
);

$this->menu = array(
    array('label' => 'Create FacultetsModel', 'url' => array('create')),
    array('label' => 'Manage FacultetsModel', 'url' => array('admin')),
);
?>

<h1>Facultets Models</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
