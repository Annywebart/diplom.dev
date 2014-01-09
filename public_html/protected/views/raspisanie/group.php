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

        <!-- main content -->

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                    $this->widget('application.widgets.nowInfoWidget.NowInfoWidget', array(
                        'isHorisontal' => true,
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="timetable-conteiner" class="row">
                    <div class="day col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Понедельник</h4>
                            </div>
                            <div class="panel-body">
                                <?php // foreach ($lessons as $lesson): ?>
                                <?php // echo $lesson->id ;?>
                                <?php // endforeach;?>
                                <table class="table table-striped">
<!--                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Summer Throssell</td>
                                            <td>summert@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Anthony Pound</td>
                                            <td>anthonyp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Erin Church</td>
                                            <td>erinc@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="panel-footer">Panel Footer</div>
                        </div>
                    </div>
                    <div class="day col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Вторник</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
<!--                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Summer Throssell</td>
                                            <td>summert@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Anthony Pound</td>
                                            <td>anthonyp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Erin Church</td>
                                            <td>erinc@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">Panel Footer</div>
                        </div>
                    </div>
                    <div class="day col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Среда</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
<!--                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Summer Throssell</td>
                                            <td>summert@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Anthony Pound</td>
                                            <td>anthonyp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Erin Church</td>
                                            <td>erinc@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">Panel Footer</div>
                        </div>
                    </div>
                    <div class="day col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Четверг</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
<!--                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Summer Throssell</td>
                                            <td>summert@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Anthony Pound</td>
                                            <td>anthonyp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Erin Church</td>
                                            <td>erinc@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">Panel Footer</div>
                        </div>
                    </div>
                    <div class="day col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Пятница</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
<!--                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>-->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Summer Throssell</td>
                                            <td>summert@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Anthony Pound</td>
                                            <td>anthonyp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Erin Church</td>
                                            <td>erinc@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Declan Pamphlett</td>
                                            <td>declanp@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">Panel Footer</div>
                        </div>
                    </div>
                    <div class="day col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Суббота</h4>
                            </div>
                            <div class="panel-body">
                            </div>
                            <div class="panel-footer">Panel Footer</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

