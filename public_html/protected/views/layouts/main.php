<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ebro Admin Template v1.0</title>

        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">

        <!--Clock-->   
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/clock/clock.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/clock/jquery.tzineClock.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/clock/script.js"></script>
        <!--Clock--> 
        
        <!-- bootstrap framework-->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>bootstrap/css/bootstrap.min.css">
        <!-- todc-bootstrap -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>css/todc-bootstrap.min.css">
        <!-- font awesome -->        
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>css/font-awesome/css/font-awesome.min.css">
        <!-- flag icon set -->        
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>img/flags/flags.css">
        <!-- retina ready -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>css/retina.css">	

        <!-- aditional stylesheets -->
        <!-- vector map -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/jvectormap/jquery-jvectormap-1.2.2.css">

        <!-- ebro styles -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>css/style.css">
        <!-- ebro theme -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>css/theme/color_1.css" id="theme">

        <!--[if lt IE 9]>
                <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>css/ie.css">
                <script src="js/ie/html5shiv.js"></script>
                <script src="js/ie/respond.min.js"></script>
                <script src="js/ie/excanvas.min.js"></script>
        <![endif]-->

        <!-- custom fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    </head>
    <body id="site">

        <div id="wrapper_all">
            <header id="top_header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-2">
                            <a href="<?php echo Yii::app()->params['styleSite']; ?>dashboard1.html" class="logo_main" title="Ebro Admin Template:"><img href="<?php echo Yii::app()->params['styleSite']; ?>img/logo_main.png" alt=""></a>
                        </div>
                        
                        <?php if(!Yii::app()->user->isGuest):?>
                            <div class="col-sm-push-4 col-sm-3 text-right hidden-xs">
                                <div class="notification_dropdown dropdown">
                                    <a href="#" class="notification_icon dropdown-toggle" data-toggle="dropdown">
                                        <span class="label label-danger">8</span>
                                        <i class="icon-comment-alt icon-2x"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="dropdown_heading">Комментарии</div>
                                            <div class="dropdown_content">
                                                <ul class="dropdown_items">
                                                    <li>
                                                        <h3><span class="small_info">12:43</span><a href="#">Lorem ipsum dolor&hellip;</a></h3>
                                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                                    </li>
                                                    <li>
                                                        <h3><span class="small_info">Today</span><a href="#">Lorem ipsum dolor&hellip;</a></h3>
                                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                                    </li>
                                                    <li>
                                                        <h3><span class="small_info">14 Aug</span><a href="#">Lorem ipsum dolor&hellip;</a></h3>
                                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown_footer"><a href="#" class="btn btn-sm btn-default">Показать все</a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="notification_separator"></div>
                                <div class="notification_dropdown dropdown">
                                    <a href="#" class="notification_icon dropdown-toggle" data-toggle="dropdown">
                                        <span class="label label-danger">12</span>
                                        <i class="icon-envelope-alt icon-2x"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-wide">
                                        <li>
                                            <div class="dropdown_heading">Сообщения</div>
                                            <div class="dropdown_content">
                                                <ul class="dropdown_items">
                                                    <li>
                                                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                                        <p class="large_info">Sean Walter, 24.05.2014</p>
                                                        <i class="icon-exclamation-sign indicator"></i>
                                                    </li>
                                                    <li>
                                                        <h3><a href="#">Lorem ipsum dolor&hellip;</a></h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aliquam assumenda&hellip;</p>
                                                        <p class="large_info">Sean Walter, 24.05.2014</p>
                                                    </li>
                                                    <li>
                                                        <h3><a href="#">Lorem ipsum dolor&hellip;</a></h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur&hellip;</p>
                                                        <p class="large_info">Sean Walter, 24.05.2014</p>
                                                        <i class="icon-exclamation-sign indicator"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown_footer">
                                                <a href="#" class="btn btn-sm btn-default">Показать все</a>
                                                <div class="pull-right dropdown_actions">
                                                    <a href="#"><i class="icon-refresh"></i></a>
                                                    <a href="#"><i class="icon-cog"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-push-4 col-sm-3">
                                <div class="pull-right dropdown">
                                    <?php $this->widget('application.widgets.authorizeWidget.AuthorizeWidget'); ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php echo CHtml::link('Войти', Yii::app()->createAbsoluteUrl('site/login'), array('class' => 'btn btn-default pull-right')) ; ?>
                        <?php endif; ?>
                        
                        <div class="col-xs-12 col-sm-pull-6 col-sm-4">
                            <form class="main_search">
                                <input type="text" id="search_query" name="search_query" class="typeahead form-control">
                                <button type="submit" class="btn btn-primary btn-xs"><i class="icon-search icon-white"></i></button>
                            </form> 
                        </div>
                    </div>
                </div>
            </header>						
            <nav id="top_navigation">
                <div class="container">
                    <ul id="icon_nav_h" class="top_ico_nav clearfix">
                        <li>
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('site/index'); ?>">
                                <i class="icon-home icon-2x"></i>
                                <span class="menu_label">Главная</span>
                            </a>
                        </li>
                        <li>             
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('site/raspisanie'); ?>">
                                <i class="icon-edit icon-2x"></i>
                                <span class="menu_label">Расписание</span>
                            </a>
                        </li>
                        <li>             
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('site/prepodavately'); ?>">
                                <i class="icon-group icon-2x"></i>
                                <span class="menu_label">Преподаватели</span>
                            </a>
                        </li>
                        <li>             
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('site/korpusa'); ?>">
                                <i class="icon-tasks icon-2x"></i>
                                <span class="menu_label">Корпуса</span>
                            </a>
                        </li>
                        <li>             
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('facultets/index'); ?>">
                                <i class="icon-beaker icon-2x"></i>
                                <span class="menu_label">Факультеты</span>
                            </a>
                        </li>
                        <li>             
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('site/pages', array('alias' => 'o-servise')); ?>">
                                <i class="icon-book icon-2x"></i>
                                <span class="menu_label">О сервисе</span>
                            </a>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        $('#icon_nav_h li').each(function () {if (this.getElementsByTagName('a')[0].href == location.href) this.className = 'active';});
                    </script>
                </div>
            </nav>
            <!-- mobile navigation -->
            <nav id="mobile_navigation"></nav>

            <?php echo $content; ?>
            
            <div id="footer_space"></div>
        </div>

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        &copy; 2013 Your Company
                    </div>
                    <div class="col-sm-8">
                        <ul>
                            <li><a href="#">Dashboard</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Terms of Service</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li>&middot;</li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-1 text-right">
                        <small class="text-muted">v1.0</small>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <!--<script href="<?php // echo Yii::app()->params['styleSite']; ?>js/jquery.min.js"></script>-->
        <!-- bootstrap framework -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- jQuery resize event -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/jquery.ba-resize.min.js"></script>
        <!-- retina ready -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/jquery_cookie.min.js"></script>
        <!-- retina ready -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/retina.min.js"></script>
        <!-- tinyNav -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/tinynav.js"></script>
        <!-- sticky sidebar -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/jquery.sticky.js"></script>
        <!-- Navgoco -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/navgoco/jquery.navgoco.min.js"></script>
        <!-- jMenu -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/jMenu/js/jMenu.jquery.js"></script>
        <!-- typeahead -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/typeahead.js/typeahead.min.js"></script>
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/typeahead.js/hogan-2.0.0.js"></script>

        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/ebro_common.js"></script>


        <!-- peity (small charts) -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/peity/jquery.peity.min.js"></script>
        <!-- vector map -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- charts -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/flot/jquery.flot.min.js"></script>
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/flot/jquery.flot.pie.min.js"></script>
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/flot/jquery.flot.time.min.js"></script>
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/flot/jquery.flot.tooltip.min.js"></script>
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/flot/jquery.flot.resize.js"></script>
        <!-- easy pie chart -->
        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/lib/easy-pie-chart/jquery.easy-pie-chart.js"></script>

        <script href="<?php echo Yii::app()->params['styleSite']; ?>js/pages/ebro_dashboard1.js"></script>


        <!--[if lte IE 9]>
                <script href="<?php echo Yii::app()->params['styleSite']; ?>js/ie/jquery.placeholder.js"></script>
                <script>
                        $(function() {
                                $('input, textarea').placeholder();
                        });
                </script>
        <![endif]-->

    </body>
</html>
