<?php
/* @var $this GroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Groups Models',
);

$this->menu = array(
    array('label' => 'Create GroupsModel', 'url' => array('create')),
    array('label' => 'Manage GroupsModel', 'url' => array('admin')),
);
?>

<h1>Groups Models</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
