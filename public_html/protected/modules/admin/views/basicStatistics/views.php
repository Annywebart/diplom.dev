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
    <table>
        <tr>
            <td>Просмотров сайта:</td>
            <td><?php echo $info['totalSiteViews']; ?></td>
        </tr>
        <tr>
            <td>Просмотров страниц:</td>
            <td><?php echo $info['totalPagesViews']; ?></td>
        </tr>
    </table>
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
