<?php
/* @var $this SpecialitiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Specialities Models',
);

$this->menu = array(
    array('label' => 'Create SpecialitiesModel', 'url' => array('create')),
    array('label' => 'Manage SpecialitiesModel', 'url' => array('admin')),
);
?>

<h1>Specialities Models</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
