<h1>Общая статистика</h1>
<ul class="nav nav-tabs">
    <li class="">
        <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/basicStatistics/index'); ?>">Просмотры сайта</a>
    </li>
    <li class="">
        <a href="<?php echo Yii::app()->createAbsoluteUrl('admin/basicStatistics/systemInfo'); ?>">Системная информация</a>
    </li>
    <li class="active">
        <a href="javascript:void(0)">Информация о посетителях</a>
    </li>
</ul>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var dataOldUsers = google.visualization.arrayToDataTable([
            ['Users', 'Users'],
            ['Новые посетители', 2],
            ['Посетители, которые возвращались на сайт', 43]
        ]);

        var optionsOldUsers = {
            title: 'Прцентное соотношение новых посеителей к тем, что вернулись',
            is3D: true,
        };

        var dataAuthorize = google.visualization.arrayToDataTable([
            ['Users', 'Users'],
            ['Неавторизованные посетители', 36],
            ['Посетители, авторизованные через сайт', 2],
            ['Посетители, авторизованные через социальные сети', 7]
        ]);

        var optionsAuthorize = {
            title: 'Авторизованные и неавторизованные посетители',
            is3D: true,
        };
        
        var dataSocial = google.visualization.arrayToDataTable([
            ['Users', 'Users'],
            ['Facebook', 3],
            ['Яндекс', 1],
            ['Google', 2],
            ['ВКонтакте', 0],
            ['Twitter', 0]
        ]);

        var optionsSocial = {
            title: 'Социальные сети, через которые входили пользователи',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_OldUsers'));
        chart.draw(dataOldUsers, optionsOldUsers);
        
        var chart = new google.visualization.PieChart(document.getElementById('piechart_Authorize'));
        chart.draw(dataAuthorize, optionsAuthorize);
        
        var chart = new google.visualization.PieChart(document.getElementById('piechart_Social'));
        chart.draw(dataSocial, optionsSocial);
    }
</script>

<div class="row">
    <div class="span6">
        <div id="piechart_OldUsers" style="width: 550px; height: 350px;"></div>
    </div>
    <div class="span6">
        <div id="piechart_Authorize" style="width: 550px; height: 350px;"></div>
    </div>    
    <div class="span6">
        <div id="piechart_Social" style="width: 550px; height: 350px;"></div>
    </div>
</div>


