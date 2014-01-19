<?php
$this->widget(
        'bootstrap.widgets.TbBreadcrumbs', array(
        'homeLink' => false,
        'links' => array(
            'Главная' => Yii::app()->createAbsoluteUrl('admin/default/index'),
            'Подробная статистика',
)));
?>

<h1>Подробная информация о посетителях</h1>
<div class="clearfix"></div>

<?php echo CHtml::link('Пользователи', Yii::app()->createAbsoluteUrl('admin/detailStatistics/users')) ; ?>
<br />
<?php echo CHtml::link('Страницы', Yii::app()->createAbsoluteUrl('admin/detailStatistics/pages')) ; ?>