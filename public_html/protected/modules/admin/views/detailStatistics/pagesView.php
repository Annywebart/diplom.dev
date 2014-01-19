
<h1>Подробная информация о посетителях</h1>
<div class="clearfix"></div>

<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'type' => 'striped',
    'id' => 'user-log-grid',
    'dataProvider' => $dataProvider,
    'emptyText' => 'Результатов не найдено',
    'template' => "{items}\n{extendedSummary}",
    'columns' => array(
        array(
            'name' => 'pageUrl',
            'value' => '$data->pageUrl',
        ),
        'entryTime',
        'spentTime',
    ),
//    'chartOptions' => array(
//        'data' => array(
//            'series' => array(
//                array(
//                    'name' => 'Hours worked',
//                    'attribute' => 'hours'
//                )
//            )
//        ),
//        'config' => array(
//            'chart' => array(
//                'width' => 800
//            )
//        )
//    ),
));
?>
