<?php
/* @var $this DepartmentsController */
/* @var $model DepartmentsModel */

$this->breadcrumbs = array(
    'Departments Models' => array('index'),
    $model->title,
);
?>

<h1>Просмотр кафедры: <?php echo $model->shortTitle; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'idFacultet',
        'shortTitle',
        'title',
        'description',
        'headDepartment',
        'idCorpus',
        'idClassroom',
    ),
));
?>
