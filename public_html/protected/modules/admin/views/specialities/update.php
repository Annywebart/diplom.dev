
<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */

$this->breadcrumbs = array(
    'Specialities Models' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);
?>

<h1>Редактирование информации о специальности: <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>

