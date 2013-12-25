<?php
/* @var $this SpecialitiesController */
/* @var $model SpecialitiesModel */

$this->breadcrumbs = array(
    'Specialities Models' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List SpecialitiesModel', 'url' => array('index')),
    array('label' => 'Create SpecialitiesModel', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#specialities-model-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>
<div class="row-fluid">
    <div class="span12 tac">
        <h1>Специальности</h1>
        <?php echo CHtml::link('Создать', Yii::app()->createAbsoluteUrl('admin/spesialities/create'))?>   
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'specialities-model-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'idFacultet',
                'code',
                'description',
                array(
                    'class' => 'CButtonColumn',
                ),
            ),
        ));
        ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span5">

        <div id="fl_2" style="height:200px;width:80%;margin:50px auto 0"></div>
    </div>
    <div class="span7">
        <div class="heading clearfix">

        </div>
        <div id="fl_1" style="height:270px;width:100%;margin:15px auto 0"></div>
    </div>
</div>

