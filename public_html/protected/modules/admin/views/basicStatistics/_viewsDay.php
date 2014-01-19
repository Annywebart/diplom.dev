<?php

$this->widget(
        'bootstrap.widgets.TbHighCharts', array(
    'options' => array(
        'title' => array(
            'text' => 'График посещений сайта за день',
            'x' => -20 //center
        ),
        'subtitle' => array(
            'text' => '',
            'x' - 20
        ),
        'xAxis' => array(
            'categories' => ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
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
                'data' => [0, 0, 0, 0, 0, 0, 0, 1, 13, 22, 13, 32, 2, 5, 9, 11, 12, 27, 2, 0, 0, 0, 0, 0, 0],
            ],
            [
                'name' => 'Количество просмотров страниц',
                'data' => [0, 0, 0, 0, 0, 0, 0, 12, 32, 63, 30, 41, 5, 9, 42, 15, 15, 37, 8, 0, 0, 0, 0, 0, 0]
            ],
        )
    ),
    'htmlOptions' => array(
        'style' => 'width: 1100px; height: 400px; margin: 0 auto'
    )
        )
);
?>