<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Информационный сервис для студентов и преподавателей НТУ "ХПИ"</title>

        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">

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
        <!--<link rel="stylesheet" href="<?php // echo Yii::app()->params['styleSite']; ?>img/flags/flags.css">-->
        <!-- retina ready -->
        <!--<link rel="stylesheet" href="<?php // echo Yii::app()->params['styleSite']; ?>css/retina.css">-->	

        <!-- aditional stylesheets -->
        <!-- vector map -->
        <!--<link rel="stylesheet" href="<?php // echo Yii::app()->params['styleSite']; ?>js/lib/jvectormap/jquery-jvectormap-1.2.2.css">-->

        <!-- ebro styles -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>css/style.css">
        <!-- ebro theme -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleSite']; ?>css/theme/color_1.css" id="theme">

        <!--[if lt IE 9]>
                <link rel="stylesheet" href="<?php // echo Yii::app()->params['styleSite']; ?>css/ie.css">
                <script src="js/ie/html5shiv.js"></script>
                <script src="js/ie/respond.min.js"></script>
                <script src="js/ie/excanvas.min.js"></script>
        <![endif]-->

        <!-- custom fonts -->
        <!--<link href='http://fonts.googleapis.com/css?family=Roboto:300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->

    </head>
    <body id="site">

        <div id="wrapper_all">
            <header id="top_header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-push-0 col-sm-6">
                            <div id="logo">
                                <a href="<?php echo Yii::app()->createAbsoluteUrl(Yii::app()->request->baseUrl); ?>">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-150.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-push-0 col-sm-2">
                            <div id="logo">
                                <h1>НТУ "ХПИ"</h1>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-push-0 col-sm-2 box_stat">
                            <h4>Контакты:</h4>
                            <div class="hr margin-bottom-10"></div>
                            <p>Тел.: (057) 707-66-00</p>
                            <p>Skype: info-servis-khpi</p>
                        </div>
                        <?php if (!Yii::app()->user->isGuest): ?>
                            <div class="col-xs-6 col-sm-push-0 col-sm-2">
                                <div class="pull-right dropdown">
                                    <?php $this->widget('application.widgets.authorizeWidget.AuthorizeWidget'); ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php echo CHtml::link('Войти', Yii::app()->createAbsoluteUrl('site/login'), array('class' => 'btn btn-default pull-right')); ?>
                        <?php endif; ?>

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
                        <li class="<?php echo ('raspisanie' == $this->id) ? 'active' : '';?>">             
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('raspisanie/index'); ?>">
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
                                <i class="icon-bookmark icon-2x"></i>
                                <span class="menu_label">Корпуса</span>
                            </a>
                        </li>
                        <li class="<?php echo ('facultets' == $this->id) ? 'active' : '';?>">             
                            <a href="<?php echo Yii::app()->createAbsoluteUrl('facultets/index'); ?>">
                                <i class="icon-tasks icon-2x"></i>
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
                        $('#icon_nav_h li').each(function() {
                            if (this.getElementsByTagName('a')[0].href == location.href)
                                this.className = 'active';
                        });
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
                        &copy; 2013 
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
