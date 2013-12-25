<?php
/* @var $this GroupsController */
/* @var $model GroupsModel */

$this->breadcrumbs = array(
    'Groups Models' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List GroupsModel', 'url' => array('index')),
    array('label' => 'Create GroupsModel', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#groups-model-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>
<div class="row-fluid">
    <div class="span12 tac">
        <h1>Группы</h1>
        <?php echo CHtml::link('Создать', Yii::app()->createAbsoluteUrl('admin/groups/create'))?>   
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'groups-model-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
//                'idFacultets',
                'idSpeciality',
                'title',
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

