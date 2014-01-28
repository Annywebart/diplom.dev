<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Административная панель информационного сервиса для студентов и преподавателей НТУ "ХПИ"</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <!-- Le styles -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/adminstyle.css" rel="stylesheet">

        <!--Clock-->   
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/clock/clock.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/clock/jquery.tzineClock.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/clock/script.js"></script>
        <!--Clock-->   
        
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
    </head>

    <body id="admin">

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    
                    <a class="brand" href="/admin/default/index">Информационный сервис для студентов и преподавателей НТУ "ХПИ"</a>

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
                            <li class="divider-vertical hidden-phone hidden-tablet"></li>
                            <li class="dropdown">
                                <?php $this->widget('application.widgets.authorizeWidget.AuthorizeWidget'); ?>
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



