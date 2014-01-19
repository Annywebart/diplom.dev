<?php

$this->widget(
        'bootstrap.widgets.TbHighCharts', array(
    'options' => array(
        'title' => array(
            'text' => 'График посещений сайта за месяц',
            'x' => -20 //center
        ),
        'subtitle' => array(
            'text' => '',
            'x' - 20
        ),
        'xAxis' => array(
            'categories' => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21'],
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
                'data' => [0, 0, 12, 22, 121, 12, 1, 12, 213, 123, 211, 323, 413, 114, 125, 164, 117, 184, 119, 210, 211]
            ],
            [
                'name' => 'Количество просмотров страниц',
                'data' => [0, 0, 42, 34, 314, 44, 21, 23, 513, 233, 232, 343, 663, 234, 225, 194, 127, 244, 149, 230, 311]
            ],
        )
    ),
    'htmlOptions' => array(
        'style' => 'width: 1100px; height: 400px; margin: 0 auto'
    )
        )
);
?>