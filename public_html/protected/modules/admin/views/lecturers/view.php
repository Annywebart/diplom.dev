<?php
/* @var $this Lecturers2Controller */
/* @var $model LecturersModel */

$this->breadcrumbs = array(
    'Lecturers Models' => array('index'),
    $model->id,
);
?>

<h1>Информация о преподавателе <?php echo $model->lastName; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'idDepartment',
        'firstName',
        'lastName',
        'fatherName',
        'gender',
        'scientificDegree',
    ),
));
?>
