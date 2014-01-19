<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var dataBrowser = google.visualization.arrayToDataTable([
            ['Браузеры', 'Количество'],
            <?php foreach ($browser as $item): ?>
               ['<?php echo $item['browser']?>', <?php echo $item['browserCount']?>], 
            <?php endforeach; ?>
        ]);

        var optionsBrowser = {
            title: 'Используемые браузеры',
            is3D: true,
        };

        var dataOS = google.visualization.arrayToDataTable([
            ['Операционные системы', 'Количество'],
            <?php foreach ($os as $item): ?>
               ['<?php echo $item['operatingSystem']?>', <?php echo $item['osCount']?>], 
            <?php endforeach; ?>
        ]);

        var optionsOS = {
            title: 'Операционные системы пользователей',
            is3D: true,
        };

        var dataResolution = google.visualization.arrayToDataTable([
            ['Операционные системы', 'Количество'],
            <?php foreach ($resolution as $item): ?>
               ['<?php echo $item['resolution']?>', <?php echo $item['resolutionCount']?>], 
            <?php endforeach; ?>
        ]);

        var optionsResolution = {
            title: 'Разрешение экранов пользователей',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('browser-chart'));
        chart.draw(dataBrowser, optionsBrowser);

        var chart = new google.visualization.PieChart(document.getElementById('os-chart'));
        chart.draw(dataOS, optionsOS);

        var chart = new google.visualization.PieChart(document.getElementById('resolution-chart'));
        chart.draw(dataResolution, optionsResolution);

    }
</script>


<ul class="nav nav-tabs">
    <li class="">
        <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/basicStatistics/index'); ?>">Просмотры сайта</a>
    </li>
    <li class="active">
        <a href="javascript:void(0)">Системная информация</a>
    </li>
    <li class="">
        <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/basicStatistics/usersInfo'); ?>">Информация о посетителях</a>
    </li>
</ul>

<div id="browser-chart" style="width: 900px; height: 500px;"></div>

<div id="os-chart" style="width: 900px; height: 500px;"></div>

<div id="resolution-chart" style="width: 900px; height: 500px;"></div>
