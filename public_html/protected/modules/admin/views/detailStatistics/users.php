<?php
$this->widget(
        'bootstrap.widgets.TbBreadcrumbs', array(
        'homeLink' => false,
        'links' => array(
            'Главная' => Yii::app()->createAbsoluteUrl('admin/default/index'),
            'Подробная статистика' => Yii::app()->createAbsoluteUrl('admin/detailStatistics/index'),
            'Информация о посетителях',
)));
?>
<h1>Подробная информация о посетителях</h1>
<div class="clearfix"></div>

<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'type' => 'striped',
    'id' => 'user-log-grid-index',
    'dataProvider' => $dataProvider,
    'emptyText' => 'Результатов не найдено',
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
        array(
            'name' => 'Сессия',
            'value' => '$data["sessionId"]',
        ),
        array(
            'name' => 'Ip',
            'value' => '$data["userIp"]',
        ),
        array(
            'name' => 'Имя',
            'value' => '$data["userName"]',
        ),
        array(
            'name' => 'operatingSystem',
            'header' => 'ОС',
            'value' => '$data["operatingSystem"]',
        ),
        array(
            'name' => 'browser',
            'header' => 'Браузер',
            'value' => '$data["browser"]',
        ),
        array(
            'header' => 'Время начала',
            'value' => '$data["entryTime"]',
        ),
        array(
            'header' => 'totalTime',
            'value' => '$data["totalTime"]',
        ),
        array(
            'header' => 'pages',
            'value' => '$data["pages"]',
        ),
        array(
            'header' => 'Среднее время',
            'value' => '$data["meanTime"]',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}{delete}',
            'buttons' => array(
                'view' => array(
                    'label' => 'View',
                    'url' => 'array("detailStatistics/usersView/", "sessionId" => $data["sessionId"])',
                ),
                'delete' => array(
                    'label' => 'Delete',
                    'url' => 'array("detailStatistics/usersDelete/", "sessionId" => $data["sessionId"])',
                ),
            ),
        ),
    ),
//    'chartOptions' => array(
//        'title' => 'Статистика посещений страниц',
//        'data' => array(
//            'series' => array(
//                array(
//                    'name' => 'pages',
//                    'attribute' => 'pages'
//                )
//            )
//        ),
//        'config' => array(
//            'chart' => array(
//                'width' => 800
//            )
//        )
//    ),
    'extendedSummary' => array(
        'title' => 'Общая статистика',
        'columns' => array(
            'browser' => array(
                'label' => 'Используемые браузеры',
                'types' => array(
                    'Firefox' => array('label' => 'Firefox'),
                    'Opera' => array('label' => 'Opera'),
                    'Explorer' => array('label' => 'Explorer')
                ),
                'chartOptions' => array(
                    'title' => 'Используемые браузеры',
                ),
                'class' => 'TbPercentOfTypeGooglePieOperation',
            ),
            'operatingSystem' => array(
                'label' => 'Операционные системы',
                'types' => array(
                    'Windows 7' => array('label' => 'Windows 7'),
                    'Linux' => array('label' => 'Linux'),
                    'MacOS' => array('label' => 'MacOS')
                ),
                'chartOptions' => array(
                    'title' => 'Операционные системы',
                ),
                'class' => 'TbPercentOfTypeGooglePieOperation',
            )
        )
    ),
    'extendedSummaryOptions' => array(
        'id' => 'statistics',
        'class' => 'well pull-right',
        'style' => ''
    ),
));
?>
