<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/'); ?></li>					
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div class="row">
            <div class="col-sm-9">
                <h2>Информационный онлайн-сервис НТУ "ХПИ"</h2>
                <div class="hr-brown-2"></div>
                <div class="span5 main">
                    <h3 class="green">С помощью сервиса можно узнать:</h3>
                    <ul>
                        <li>Расписание занятий любой группы.</li>
                        <li>Расписание занятий преподавателей.</li>
                        <li>Текущую пару и неделю.</li>
                        <li>Информацию о всех факультетах и кафедрах института.</li>
                        <li>Специальности, по которым проводится обучение.</li>
                        <li>Информацию про аудитории всех корпусов.</li>
                    </ul>
                </div>
                <div class="span3 main">
                    <h3 class="green">Преимущества сервиса:</h3>
                    <ul>
                        <li>простота использования;</li>
                        <li>доступность информации;</li>
                        <li>уникальность.</li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"></h4>
                    </div>
                    <div class="panel-body">
                        <?php $this->widget('application.widgets.nowInfoWidget.NowInfoWidget'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>