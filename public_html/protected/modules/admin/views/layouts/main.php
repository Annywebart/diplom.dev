<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap, from Twitter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <!-- Le styles -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/adminstyle.css" rel="stylesheet">

        <!--Clock-->   
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/clock/styles.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/clock/jquery.tzineClock/jquery.tzineClock.css" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/clock/jquery.tzineClock/jquery.tzineClock.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/clock/script.js"></script>
        <!--Clock-->   
        
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="/admin/default/index">Project name</a>

                    <div class="nav-collapse collapse">
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'htmlOptions' => array('class' => 'nav'),
                            'items' => array(
//                                array('label' => 'Выход (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                            ),
                        ));
                        ?>
                        <ul class="nav user_menu pull-right">
                            <li class="hidden-phone hidden-tablet">
                                <div class="nb_boxes clearfix">
                                    <a data-toggle="modal" data-backdrop="static" href="#myMail" class="label ttip_b"
                                       title="New messages">25 <i class="splashy-mail_light"></i></a>
                                    <a data-toggle="modal" data-backdrop="static" href="#myTasks" class="label ttip_b"
                                       title="New tasks">10 <i class="splashy-calendar_week"></i></a>
                                </div>
                            </li>
                            <li class="divider-vertical hidden-phone hidden-tablet"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                                        src="<?php echo Yii::app()->params['styleAdmin']; ?>/img/user_avatar.png" alt=""
                                        class="user_avatar"/><?php echo Yii::app()->user->name; ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="user_profile.html">Профиль</a></li>
                                    <li class="divider"></li>
                                    <li><?php echo CHtml::link('Выйти', Yii::app()->createAbsoluteUrl('site/logout')); ?></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- main content -->
        <div class="row-fluid">
            <?php echo $content; ?>
        </div>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/bootstrap-transition.js"></script>
        <script src="../assets/js/bootstrap-alert.js"></script>
        <script src="../assets/js/bootstrap-modal.js"></script>
        <script src="../assets/js/bootstrap-dropdown.js"></script>
        <script src="../assets/js/bootstrap-scrollspy.js"></script>
        <script src="../assets/js/bootstrap-tab.js"></script>
        <script src="../assets/js/bootstrap-tooltip.js"></script>
        <script src="../assets/js/bootstrap-popover.js"></script>
        <script src="../assets/js/bootstrap-button.js"></script>
        <script src="../assets/js/bootstrap-collapse.js"></script>
        <script src="../assets/js/bootstrap-carousel.js"></script>
        <script src="../assets/js/bootstrap-typeahead.js"></script>-->

    </body>
</html>



