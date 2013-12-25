<?php
/* @var $this StudentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Students Models',
);

$this->menu = array(
    array('label' => 'Create StudentsModel', 'url' => array('create')),
    array('label' => 'Manage StudentsModel', 'url' => array('admin')),
);
?>

<h1>Students Models</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
