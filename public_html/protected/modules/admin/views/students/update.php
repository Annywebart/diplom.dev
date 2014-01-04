
<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */

$this->breadcrumbs = array(
    'Students Models' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование информации о студенте: <?php echo $model->lastName; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
    