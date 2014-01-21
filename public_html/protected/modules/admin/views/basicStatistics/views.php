<h1>Общая статистика</h1>
<ul class="nav nav-tabs">
    <li class="active">
        <a href="javascript:void(0)">Просмотры сайта</a>
    </li>
    <li class="">
        <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/basicStatistics/systemInfo'); ?>">Системная информация</a>
    </li>
    <li class="">
        <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/basicStatistics/usersInfo'); ?>">Информация о посетителях</a>
    </li>
</ul>

<div class="well well-small">
    <b>За все время:</b>
    <div class="clearfix"></div>
    <table style="width: 300px; float: left">
        <tr>
            <td style="width: 200px">Количество посетителей:</td>
            <td style="width: 100px; font-size: 20px"><?php echo $info['totalSiteViews']; ?></td>
        </tr>
        <tr>
            <td>Просмотров страниц:</td>
            <td style="width: 100px; font-size: 20px"><?php echo $info['totalPagesViews']; ?></td>
        </tr>
    </table>
    <table style="width: 400px; float: left">
        <tr class="pull-right">
            <td style="width: 300px">Один пользователь в среднем просматривает </td>
            <td style="width: 100px; font-size: 20px"><?php echo round($info['totalPagesViews'] / $info['totalSiteViews']); ?> страниц</td>
        </tr>
    </table>
    <div class="clearfix"></div>
</div>

<?php
$this->widget(
        'bootstrap.widgets.TbTabs', array(
    'type' => 'pills',
    'tabs' => array(
        array('label' => 'Год', 'active' => true, 'content' => $this->renderPartial('_viewsYear', false, true)),
        array('label' => 'Месяц', 'content' => $this->renderPartial('_viewsMonth', false, true)),
        array('label' => 'День', 'content' => $this->renderPartial('_viewsDay', false, true)),
    ),
        )
);
?>
