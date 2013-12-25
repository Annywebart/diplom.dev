<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="#">Ebro Admin</a></li>
            <li><span>Dashboard 1</span></li>						
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div id="main_content">

            <!-- main content -->

            <div class="row">
                <div class="col-sm-3">
                    <div class="box_stat box_pos">
                        <img href="<?php echo Yii::app()->params['styleSite']; ?>/img/blank.png" alt="" class="img_ind">
                        <h4>1 045$</h4>
                        <small>Sale (7 days)</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box_stat box_neg">
                        <img href="<?php echo Yii::app()->params['styleSite']; ?>/img/blank.png" alt="" class="img_ind">
                        <h4>865</h4>
                        <small>New Users (24h)</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box_stat peity_chart">
                        <div class="peity_wrapper">
                            <div class="peity_bar_up">2,5,3,6,8,5</div>
                        </div>
                        <h4>10 327&euro;</h4>
                        <small>Sale (June)</small>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box_stat peity_chart">
                        <div class="peity_wrapper">
                            <div class="peity_bar_down">9,6,7,4,6,3</div>
                        </div>
                        <h4>135</h4>
                        <small>Orders (24h)</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Locations</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div id="world_map_vector" style="width:100%;height:300px">
                                        <script>
                                            countries_data = {
                                                "US": 2320,
                                                "BR": 1945,
                                                "IN": 1779,
                                                "AU": 1486,
                                                "TR": 1024,
                                                "CN": 753
                                            };
                                        </script>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Country</th>
                                                <th class="col_small col_center">Visits</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">United States</a></td>
                                                <td class="col_center">2320</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Brazil</a></td>
                                                <td class="col_center">1945</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">India</a></td>
                                                <td class="col_center">1779</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Australia</a></td>
                                                <td class="col_center">1486</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Turkey</a></td>
                                                <td class="col_center">1024</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">China</a></td>
                                                <td class="col_center">753</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="box_stat_circular">
                        <div class="box_stat_circular_a color_a">
                            <h4>865</h4>
                            <small>New Users (24h)</small>
                        </div>
                        <div class="box_stat_circular_middle">
                            <div class="easy_chart easy_chart_a" data-percent="42"><i class="glyphicon glyphicon-user"></i></div>
                        </div>
                        <div class="box_stat_circular_b">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci&hellip;</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box_stat_circular">
                        <div class="box_stat_circular_a color_b">
                            <h4>1 356</h4>
                            <small>Orders (24h)</small>
                        </div>
                        <div class="box_stat_circular_middle">
                            <div class="easy_chart easy_chart_b" data-percent="70"><span>+70%</span></div>
                        </div>
                        <div class="box_stat_circular_b">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci possimus&hellip;</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">New Users</h4>
                        </div>
                        <div class="panel-body stat_wide">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="media">
                                        <img alt="" href="<?php echo Yii::app()->params['styleSite']; ?>/img/avatars/avatar_4.jpg" class="media-object img-thumbnail pull-left">
                                        <div class="media-body">
                                            <h3><a href="#">Sean Walter</a></h3>
                                            <p><span class="text-muted">Joined:</span> 12-08-2013</p>
                                            <p><span class="text-muted">Country:</span> <i class="flag-BR" title="Brazil"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="media">
                                        <img alt="" href="<?php echo Yii::app()->params['styleSite']; ?>/img/avatars/avatar_7.jpg" class="media-object img-thumbnail pull-left">
                                        <div class="media-body">
                                            <h3><a href="#">Edyth Nienow</a></h3>
                                            <p><span class="text-muted">Joined:</span> 11-08-2013</p>
                                            <p><span class="text-muted">Country:</span> <i class="flag-US" title="United States of America"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="media">
                                        <img alt="" href="<?php echo Yii::app()->params['styleSite']; ?>/img/avatars/avatar_6.jpg" class="media-object img-thumbnail pull-left">
                                        <div class="media-body">
                                            <h3><a href="#">Brody Renner</a></h3>
                                            <p><span class="text-muted">Joined:</span> 11-08-2013</p>
                                            <p><span class="text-muted">Country:</span> <i class="flag-CN" title="China"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="media">
                                        <img alt="" href="<?php echo Yii::app()->params['styleSite']; ?>/img/avatars/avatar_14.jpg" class="media-object img-thumbnail pull-left">
                                        <div class="media-body">
                                            <h3><a href="#">Diego Cormier</a></h3>
                                            <p><span class="text-muted">Joined:</span> 10-08-2013</p>
                                            <p><span class="text-muted">Country:</span> <i class="flag-GB" title="United Kingdom"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="media">
                                        <img alt="" href="<?php echo Yii::app()->params['styleSite']; ?>/img/avatars/avatar_17.jpg" class="media-object img-thumbnail pull-left">
                                        <div class="media-body">
                                            <h3><a href="#">Aimee Nolan</a></h3>
                                            <p><span class="text-muted">Joined:</span> 09-08-2013</p>
                                            <p><span class="text-muted">Country:</span> <i class="flag-FR" title="France"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Social Networks (7 days)</h4>
                        </div>
                        <div class="panel-body">
                            <div class="chart_wrapper">
                                <div id="flot_social" class="chart_b">
                                    <script>
                                        data_twitter = [
                                            [new Date('08/02/2012').getTime(), 48],
                                            [new Date('08/03/2012').getTime(), 63],
                                            [new Date('08/04/2012').getTime(), 94],
                                            [new Date('08/05/2012').getTime(), 49],
                                            [new Date('08/06/2012').getTime(), 82],
                                            [new Date('08/07/2012').getTime(), 54],
                                            [new Date('08/08/2012').getTime(), 33]
                                        ];
                                        data_google = [
                                            [new Date('08/02/2012').getTime(), 32],
                                            [new Date('08/03/2012').getTime(), 26],
                                            [new Date('08/04/2012').getTime(), 51],
                                            [new Date('08/05/2012').getTime(), 49],
                                            [new Date('08/06/2012').getTime(), 72],
                                            [new Date('08/07/2012').getTime(), 40],
                                            [new Date('08/08/2012').getTime(), 49]
                                        ];
                                        data_linkedin = [
                                            [new Date('08/02/2012').getTime(), 22],
                                            [new Date('08/03/2012').getTime(), 26],
                                            [new Date('08/04/2012').getTime(), 41],
                                            [new Date('08/05/2012').getTime(), 38],
                                            [new Date('08/06/2012').getTime(), 16],
                                            [new Date('08/07/2012').getTime(), 19],
                                            [new Date('08/08/2012').getTime(), 47]
                                        ];
                                        data_facebook = [
                                            [new Date('08/02/2012').getTime(), 14],
                                            [new Date('08/03/2012').getTime(), 17],
                                            [new Date('08/04/2012').getTime(), 9],
                                            [new Date('08/05/2012').getTime(), 26],
                                            [new Date('08/06/2012').getTime(), 4],
                                            [new Date('08/07/2012').getTime(), 31],
                                            [new Date('08/08/2012').getTime(), 12]
                                        ];
                                    </script>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Social Network</th>
                                    <th class="col_small col_center">Visits</th>
                                    <th class="col_small col_center">Pageviews</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Twitter</a></td>
                                    <td class="col_center">423</td>
                                    <td class="col_center">631</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Google+</a></td>
                                    <td class="col_center">316</td>
                                    <td class="col_center">549</td>
                                </tr>
                                <tr>
                                    <td><a href="#">LinkedIn</a></td>
                                    <td class="col_center">264</td>
                                    <td class="col_center">388</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Facebook</a></td>
                                    <td class="col_center">152</td>
                                    <td class="col_center">274</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Browsers</h4>
                        </div>
                        <div class="panel-body">
                            <div class="chart_wrapper">
                                <div class="chart_b" id="flot_browsers">
                                    <script>
                                        data_browsers = [
                                            {label: "Firefox", data: 1428},
                                            {label: "Chrome", data: 858},
                                            {label: "Safari", data: 647},
                                            {label: "IE", data: 433},
                                            {label: "Opera", data: 141}
                                        ];
                                    </script>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Browser</th>
                                    <th class="col_small col_center">Visits</th>
                                    <th class="col_small col_center">% visits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Firefox</a></td>
                                    <td class="col_center">1428</td>
                                    <td class="col_center">54%</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Chrome</a></td>
                                    <td class="col_center">858</td>
                                    <td class="col_center">21%</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Safari</a></td>
                                    <td class="col_center">647</td>
                                    <td class="col_center">11%</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Internet Explorer</a></td>
                                    <td class="col_center">433</td>
                                    <td class="col_center">6%</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Opera</a></td>
                                    <td class="col_center">141</td>
                                    <td class="col_center">2%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <nav id="sidebar">
        <div class="sepH_b">
            <a href="javascript:void(0)" id="text_nav_v_collapse" class="btn btn-default btn-xs">Collapse All</a>
            <a href="javascript:void(0)" id="text_nav_v_expand" class="btn btn-default btn-xs">Expand All</a>
        </div>
        <ul id="text_nav_v" class="side_text_nav">
            <li class="parent_active">
                <a href="javascript:void(0)"><span class="icon-dashboard"></span>Dashboard</a>
                <ul>
                    <li class="link_active"><a href="dashboard1.html">Dashboard 1</a></li>
                    <li><a href="dashboard2.html">Dashboard 2</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-th-list"></span>Forms</a>
                <ul>
                    <li><a href="form_regular_elements.html">Regular elements</a></li>
                    <li><a href="form_extended_elements.html">Extended elements</a></li>
                    <li><a href="form_multiupload.html">Multiupload </a></li>
                    <li><a href="form_validation.html">Form validation</a></li>
                    <li><a href="wizard.html">Wizard</a></li>
                    <li><a href="wysiwg.html">WYSIWG Editor</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-puzzle-piece"></span>Components</a>
                <ul>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="charts.html">Charts</a></li>
                    <li><a href="contact_list.html">Contact List</a></li>
                    <li><a href="file_manager.html">File manager</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="gmaps.html">Google Maps</a></li>
                    <li>
                        <a href="javascript:void(0)">Tables</a>
                        <ul>
                            <li><a href="datatables.html">Datatables</a></li>
                            <li><a href="regular_tables.html">Regular</a></li>
                            <li><a href="slick_grid.html">Slick Grid</a></li>
                            <li><a href="table_responsive.html">Responsive Table</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-beaker"></span>UI Elements</a>
                <ul>
                    <li><a href="alerts_buttons.html">Alerts, Buttons</a></li>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="notifications.html">Notifications</a></li>
                    <li><a href="panels.html">Panels</a></li>
                    <li><a href="tabs_accordions.html">Tabs, Accordions</a></li>
                    <li><a href="tooltips_popovers.html">Tooltips, Popovers</a></li>
                    <li><a href="typography.html">Typography</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)"><span class="icon-leaf"></span>Other Pages</a>
                <ul>
                    <li><a href="blank.html">Blank page</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="contact_page.html">Contact Page</a></li>
                    <li><a href="error_404.html">Error 404</a></li>
                    <li><a href="help_faq.html">Help/Faq</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="mailbox.html">Mailbox</a></li>
                    <li><a href="user_profile.html">User profile</a></li>
                    <li><a href="settings.html">Site Settings</a></li>
                </ul>
            </li>
        </ul>				
    </nav>
</section>