<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="#">Главная</a></li>
            <li><span>О сервисе</span></li>						
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div id="main_content">
            <div class="row">
                <div class="col-sm-8">
                    <?php echo $model->content ; ?>   
                </div>
                <div class="col-sm-4">
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
    </div>

    <nav id="sidebar">
        <ul id="text_nav_v" class="side_text_nav">
            <li>
                <a href="javascript:void(0)"><span class="icon-puzzle-piece"></span>Возможности сервиса</a>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-question-sign"></span>Как пользоваться</a>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-envelope-alt"></span>Контактная информация</a>
            </li>
        </ul>				
    </nav>
</section>