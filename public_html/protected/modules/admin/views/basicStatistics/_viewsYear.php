<?php

$this->widget(
        'bootstrap.widgets.TbHighCharts', array(
    'options' => array(
        'title' => array(
            'text' => 'График посещений сайта за год',
            'x' => -20 //center
        ),
        'subtitle' => array(
            'text' => '',
            'x' - 20
        ),
        'xAxis' => array(
            'categories' => ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь', 'Январь'],
        ),
        'yAxis' => array(
            'title' => array(
                'text' => 'Количество просмотров',
            ),
            'plotLines' => [
                [
                    'value' => 0,
                    'width' => 1,
                    'color' => '#808080'
                ]
            ],
        ),
        'tooltip' => array(
            'valueSuffix' => ''
        ),
        'legend' => array(
            'layout' => 'vertical',
            'align' => 'right',
            'verticalAlign' => 'middle',
            'borderWidth' => 0
        ),
        'series' => array(
            [
                'name' => 'Количество просмотров сайта',
                'data' => [0, 0, 0, 0, 0, 0, 0, 1000, 1233, 1843, 1339, 1976, 2344]
            ],
            [
                'name' => 'Количество просмотров страниц',
                'data' => [0, 0, 0, 0, 0, 0, 0, 2300, 1853, 3843, 4339, 2976, 7344]
            ],
        )
    ),
    'htmlOptions' => array(
        'style' => 'width: 1100px; height: 400px; margin: 0 auto'
    )
        )
);
?>