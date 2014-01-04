<?php
/* @var $this FacultetsController */
/* @var $model FacultetsModel */

$this->breadcrumbs = array(
    'Facultets Models' => array('index'),
    'Manage',
);
?>

<h1>Факультеты</h1>
<?php echo CHtml::link('<i class="icon-plus"></i> Создать', Yii::app()->createAbsoluteUrl('admin/facultets/create'), array('class' => 'btn pull-right')) ?>       
<div class="clearfix"></div>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'filter' => $model,
    'type' => 'striped',
    'dataProvider' => $model->search(),
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
        'title',
        'code',
//        'description',
        'idCorpus',
        'idClassroom',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
    'extendedSummary' => array(
        'title' => 'Expertise',
        'columns' => array(
            'language' => array(
                'label' => 'Total Expertise',
                'types' => array(
                    'CSS' => array('label' => 'Css'),
                    'JavaScript' => array('label' => 'Js'),
                    'HTML' => array('label' => 'html')
                ),
                'class' => 'TbPercentOfTypeGooglePieOperation',
            )
        )
    ),
    'extendedSummaryOptions' => array(
        'class' => 'well pull-right',
        'style' => 'width:300px'
    ),
));
?>
