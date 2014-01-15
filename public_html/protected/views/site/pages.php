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

<!--    <nav id="sidebar">
        <div class="sepH_b">
            <a href="javascript:void(0)" id="text_nav_v_collapse" class="btn btn-default btn-xs">Collapse All</a>
            <a href="javascript:void(0)" id="text_nav_v_expand" class="btn btn-default btn-xs">Expand All</a>
        </div>
        <ul id="text_nav_v" class="side_text_nav">
            <li>
                <a href="javascript:void(0)"><span class="icon-puzzle-piece"></span>Components</a>
                <ul>
                    <li><a href="calendar.html">Calendar</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-beaker"></span>UI Elements</a>
                <ul>
                    <li><a href="alerts_buttons.html">Alerts, Buttons</a></li>
                    <li><a href="grid.html">Grid</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-leaf"></span>Other Pages</a>
                <ul>
                    <li><a href="blank.html">Blank page</a></li>
                    <li><a href="chat.html">Chat</a></li>
                </ul>
            </li>
        </ul>				
    </nav>-->
</section>