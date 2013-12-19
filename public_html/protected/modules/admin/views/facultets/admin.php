<?php
/* @var $this FacultetsController */
/* @var $model FacultetsModel */

$this->menu = array(
    array('label' => 'List FacultetsModel', 'url' => array('index')),
    array('label' => 'Create FacultetsModel', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#facultets-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row-fluid">
    <div class="span12 tac">
        <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
        <div class="search-form" style="display:none">
            <?php $this->renderPartial('_search',array(
                'model'=>$model,
            )); ?>
        </div><!-- search-form -->

        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'facultets-model-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
                'id',
                'title',
                'code',
                'description',
                array(
                    'class'=>'CButtonColumn',
                ),
            ),
        )); ?>
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

