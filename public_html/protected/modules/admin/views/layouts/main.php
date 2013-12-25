<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Gebo Admin Panel</title>

        <!-- Bootstrap framework -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet"
              href="<?php echo Yii::app()->params['styleAdmin']; ?>/bootstrap/css/bootstrap-responsive.min.css"/>
        <!-- breadcrumbs-->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/jBreadcrumbs/css/BreadCrumb.css"/>
        <!-- tooltips-->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/qtip2/jquery.qtip.min.css"/>
        <!-- colorbox -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/colorbox/colorbox.css"/>
        <!-- code prettify -->
        <link rel="stylesheet"
              href="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/google-code-prettify/prettify.css"/>
        <!-- notifications -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/sticky/sticky.css"/>
        <!-- splashy icons -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/img/splashy/splashy.css"/>
        <!-- flags -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/img/flags/flags.css"/>
        <!-- calendar -->
        <link rel="stylesheet"
              href="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/fullcalendar/fullcalendar_gebo.css"/>

        <!-- gebo color theme-->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/css/blue.css" id="link_theme"/>
        <!-- main styles -->
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/css/style.css"/>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->params['styleAdmin']; ?>/favicon.ico"/>

        <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo Yii::app()->params['styleAdmin']; ?>/css/ie.css"/>
        <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/ie/html5.js"></script>
        <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/ie/respond.min.js"></script>
        <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/flot/excanvas.min.js"></script>
        <![endif]-->

        <script>
            //* hide all elements & show preloader
            document.documentElement.className += 'js';
        </script>
    </head>
    <body>
        <div id="loading_layer" style="display:none"><img
                src="<?php echo Yii::app()->params['styleAdmin']; ?>/img/ajax_loader.gif" alt=""/></div>
        <div class="style_switcher">
            <div class="sepH_c">
                <p>Цвет:</p>

                <div class="clearfix">
                    <a href="javascript:void(0)" class="style_item jQclr blue_theme style_active" title="blue">blue</a>
                    <a href="javascript:void(0)" class="style_item jQclr dark_theme" title="dark">dark</a>
                    <a href="javascript:void(0)" class="style_item jQclr green_theme" title="green">green</a>
                    <a href="javascript:void(0)" class="style_item jQclr brown_theme" title="brown">brown</a>
                    <a href="javascript:void(0)" class="style_item jQclr eastern_blue_theme" title="eastern_blue">eastern
                        blue</a>
                    <a href="javascript:void(0)" class="style_item jQclr tamarillo_theme" title="tamarillo">tamarillo</a>
                </div>
            </div>
            <div class="sepH_c">
                <p>Фон:</p>

                <div class="clearfix">
                    <span class="style_item jQptrn style_active ptrn_def" title=""></span>
                    <span class="ssw_ptrn_a style_item jQptrn" title="ptrn_a"></span>
                    <span class="ssw_ptrn_b style_item jQptrn" title="ptrn_b"></span>
                    <span class="ssw_ptrn_c style_item jQptrn" title="ptrn_c"></span>
                    <span class="ssw_ptrn_d style_item jQptrn" title="ptrn_d"></span>
                    <span class="ssw_ptrn_e style_item jQptrn" title="ptrn_e"></span>
                </div>
            </div>
            <div class="sepH_c">
                <p>Шаблон:</p>

                <div class="clearfix">
                    <label class="radio inline"><input type="radio" name="ssw_layout" id="ssw_layout_fluid" value="" checked/>
                        На всю ширину</label>
                    <label class="radio inline"><input type="radio" name="ssw_layout" id="ssw_layout_fixed" value="gebo-fixed"/>
                        Фиксированный</label>
                </div>
            </div>
            <div class="sepH_c">
                <p>Боковое меню:</p>

                <div class="clearfix">
                    <label class="radio inline">
                        <input type="radio" name="ssw_sidebar" id="ssw_sidebar_left" value="" checked/>
                        Слева
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="ssw_sidebar" id="ssw_sidebar_right" value="sidebar_right"/> 
                        Справа
                    </label>
                </div>
            </div>
            <!--            <div class="sepH_c">
                            <p>Show top menu on:</p>
            
                            <div class="clearfix">
                                <label class="radio inline"><input type="radio" name="ssw_menu" id="ssw_menu_click" value="" checked/> Click</label>
                                <label class="radio inline"><input type="radio" name="ssw_menu" id="ssw_menu_hover" value="menu_hover"/>
                                    Hover</label>
                            </div>
                        </div>-->

            <!--            <div class="gh_button-group">
                            <a href="#" id="showCss" class="btn btn-primary btn-mini">Show CSS</a>
                            <a href="#" id="resetDefault" class="btn btn-mini">Reset</a>
                        </div>
                        <div class="hide">
                            <ul id="ssw_styles">
                                <li class="small ssw_mbColor sepH_a" style="display:none">body {<span class="ssw_mColor sepH_a"
                                                                                                      style="display:none"> color: #<span></span>;</span>
                                    <span class="ssw_bColor" style="display:none">background-color: #<span></span> </span>}
                                </li>
                                <li class="small ssw_lColor sepH_a" style="display:none">a { color: #<span></span> }</li>
                            </ul>
                        </div>-->
        </div>

        <div id="maincontainer" class="clearfix">
            <!-- header -->
            <header>
                <div class="navbar navbar-fixed-top">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <a class="brand" href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="icon-home icon-white"></i>
                                Gebo Admin</a>
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
                            <!--                            <ul class="nav" id="mobile-nav">
                                                            <li class="dropdown">
                                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                                                        class="icon-list-alt icon-white"></i> Forms <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="form_elements.html">Form elements</a></li>
                                                                    <li><a href="form_extended.html">Extended form elements</a></li>
                                                                    <li><a href="form_validation.html">Form Validation</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-th icon-white"></i>
                                                                    Components <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="alerts_btns.html">Alerts & Buttons</a></li>
                                                                    <li><a href="icons.html">Icons</a></li>
                                                                    <li><a href="notifications.html">Notifications</a></li>
                                                                    <li><a href="tables.html">Tables</a></li>
                                                                    <li><a href="tables_more.html">Tables (more examples)</a></li>
                                                                    <li><a href="tabs_accordion.html">Tabs & Accordion</a></li>
                                                                    <li><a href="tooltips.html">Tooltips, Popovers</a></li>
                                                                    <li><a href="typography.html">Typography</a></li>
                                                                    <li><a href="widgets.html">Widget boxes</a></li>
                                                                    <li class="dropdown">
                                                                        <a href="#">Sub menu <b class="caret-right"></b></a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a href="#">Sub menu 1.1</a></li>
                                                                            <li><a href="#">Sub menu 1.2</a></li>
                                                                            <li><a href="#">Sub menu 1.3</a></li>
                                                                            <li>
                                                                                <a href="#">Sub menu 1.4 <b class="caret-right"></b></a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li><a href="#">Sub menu 1.4.1</a></li>
                                                                                    <li><a href="#">Sub menu 1.4.2</a></li>
                                                                                    <li><a href="#">Sub menu 1.4.3</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i
                                                                        class="icon-wrench icon-white"></i> Plugins <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="charts.html">Charts</a></li>
                                                                    <li><a href="calendar.html">Calendar</a></li>
                                                                    <li><a href="datatable.html">Datatable</a></li>
                                                                    <li><a href="dynamic_tree.html">Dynamic Tree</a></li>
                                                                    <li><a href="editable_elements.html">Editable elements</a></li>
                                                                    <li><a href="file_manager.html">File Manager</a></li>
                                                                    <li><a href="floating_header.html">Floating List Header</a></li>
                                                                    <li><a href="google_maps.html">Google Maps</a></li>
                                                                    <li><a href="gallery.html">Gallery Grid</a></li>
                                                                    <li><a href="wizard.html">Wizard</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-file icon-white"></i>
                                                                    Pages <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="blog_page.html">Blog Page</a></li>
                                                                    <li><a href="chat.html">Chat</a></li>
                                                                    <li><a href="error_404.html">Error 404</a></li>
                                                                    <li><a href="invoice.html">Invoice</a></li>
                                                                    <li><a href="mailbox.html">Mailbox</a></li>
                                                                    <li><a href="search_page.html">Search page</a></li>
                                                                    <li><a href="user_profile.html">User profile</a></li>
                                                                    <li><a href="user_static.html">User profile (static)</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="documentation.html"><i class="icon-book icon-white"></i> Help</a>
                                                            </li>
                                                        </ul>-->
                        </div>
                    </div>
                </div>
                <div class="modal hide fade" id="myMail">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">×</button>
                        <h3>Письма</h3>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">Письма, отправленные с помощью формы обратной связи</div>
                        <table class="table table-condensed table-striped" data-provides="rowlink">
                            <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Тема</th>
                                    <th>Дата</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Денис Малафей</td>
                                    <td><a href="javascript:void(0)">Почему небо голубое?</a></td>
                                    <td>23/05/2012</td>
                                    <td>Просмотр</td>
                                </tr>
                                <tr>
                                    <td>Елена Дрозденко</td>
                                    <td><a href="javascript:void(0)">Хочу уметь летать!</a></td>
                                    <td>24/05/2012</td>
                                    <td>Просмотр</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0)" class="btn">Все письма</a>
                    </div>
                </div>
                <div class="modal hide fade" id="myTasks">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">×</button>
                        <h3>Оповещения</h3>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info">In this table jquery plugin turns a table row into a clickable link.</div>
                        <table class="table table-condensed table-striped" data-provides="rowlink">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Summary</th>
                                    <th>Updated</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>P-23</td>
                                    <td><a href="javascript:void(0)">Admin should not break if URL&hellip;</a></td>
                                    <td>23/05/2012</td>
                                    <td class="tac"><span class="label label-important">High</span></td>
                                    <td>Open</td>
                                </tr>
                                <tr>
                                    <td>P-18</td>
                                    <td><a href="javascript:void(0)">Displaying submenus in custom&hellip;</a></td>
                                    <td>22/05/2012</td>
                                    <td class="tac"><span class="label label-warning">Medium</span></td>
                                    <td>Reopen</td>
                                </tr>
                                <tr>
                                    <td>P-25</td>
                                    <td><a href="javascript:void(0)">Featured image on post types&hellip;</a></td>
                                    <td>22/05/2012</td>
                                    <td class="tac"><span class="label label-success">Low</span></td>
                                    <td>Updated</td>
                                </tr>
                                <tr>
                                    <td>P-10</td>
                                    <td><a href="javascript:void(0)">Multiple feed fixes and&hellip;</a></td>
                                    <td>17/05/2012</td>
                                    <td class="tac"><span class="label label-warning">Medium</span></td>
                                    <td>Open</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0)" class="btn">Go to task manager</a>
                    </div>
                </div>
            </header>

            <!-- main content -->
            <div id="contentwrapper">
                <?php echo $content; ?>
            </div>

            <!-- sidebar -->
            <?php $this->renderPartial('../layouts/_leftSidebar'); ?>

            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery.min.js"></script>
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery-migrate.min.js"></script>
            <!-- smart resize event -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery.debouncedresize.min.js"></script>
            <!-- hidden elements width/height -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery.actual.min.js"></script>
            <!-- js cookie plugin -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery_cookie.min.js"></script>
            <!-- main bootstrap js -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/bootstrap/js/bootstrap.min.js"></script>
            <!-- bootstrap plugins -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/bootstrap.plugins.min.js"></script>
            <!-- tooltips -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/qtip2/jquery.qtip.min.js"></script>
            <!-- jBreadcrumbs -->
            <script
            src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"></script>
            <!-- lightbox -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/colorbox/jquery.colorbox.min.js"></script>
            <!-- fix for ios orientation change -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/ios-orientationchange-fix.js"></script>
            <!-- scrollbar -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/antiscroll/antiscroll.js"></script>
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/antiscroll/jquery-mousewheel.js"></script>
            <!-- to top -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/UItoTop/jquery.ui.totop.min.js"></script>
            <!-- mobile nav -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/selectNav.js"></script>
            <!-- common functions -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/gebo_common.js"></script>

            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/jquery-ui/jquery-ui-1.10.0.custom.min.js"></script>
            <!-- touch events for jquery ui-->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/forms/jquery.ui.touch-punch.min.js"></script>
            <!-- multi-column layout -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery.imagesloaded.min.js"></script>
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery.wookmark.js"></script>
            <!-- responsive table -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery.mediaTable.min.js"></script>
            <!-- small charts -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/jquery.peity.min.js"></script>
            <!-- charts -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/flot/jquery.flot.min.js"></script>
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/flot/jquery.flot.resize.min.js"></script>
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/flot/jquery.flot.pie.min.js"></script>
            <!-- calendar -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/fullcalendar/fullcalendar.min.js"></script>
            <!-- sortable/filterable list -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/list_js/list.min.js"></script>
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/lib/list_js/plugins/paging/list.paging.js"></script>
            <!-- dashboard functions -->
            <script src="<?php echo Yii::app()->params['styleAdmin']; ?>/js/gebo_dashboard.js"></script>

            <script>
            $(document).ready(function() {
                //* show all elements & remove preloader
                setTimeout('$("html").removeClass("js")', 1000);
            });
            </script>

        </div>
    </body>
</html>

<?php
//                $this->widget('zii.widgets.CMenu', array(
//                    'items' => array(
//                        array('label' => 'Contact Us', 'url' => array('/admin/contactForm/admin')),
//                        array('label' => 'Dynamic Pages', 'url' => array('/admin/dynamicPage/admin')),
//                        array('label' => 'HP Banners', 'url' => array('/admin/banner/admin')),
//                        array('label' => 'HP BButtons', 'url' => array('/admin/button/admin')),
//                        array('label' => 'HP Blocks', 'url' => array('/admin/mainBlock/admin')),
//                        array('label' => 'Services', 'url' => array('/admin/service/admin')),
//                        array('label' => 'Category FAQ', 'url' => array('/admin/categoryFaq/admin')),
//                        array('label' => 'Questions FAQ', 'url' => array('/admin/questionFaq/admin')),
//                        array('label' => 'User Log', 'url' => array('/admin/userLog/admin')),
//                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
//                    ),
//                ));
?>

