<a href="javascript:void(0)" class="sidebar_switch on_switch ttip_r" title="Hide Sidebar">Sidebar switch</a>

<div class="sidebar">

    <div class="antiScroll">
        <div class="antiscroll-inner">
            <div class="antiscroll-content">

                <div class="sidebar_inner">
                    <form action="search_page.html" class="input-append" method="post">
                        <input autocomplete="off" name="query" class="search_query input-medium" size="16" type="text"
                               placeholder="Поиск..."/>
                        <button type="submit" class="btn"><i class="icon-search"></i></button>
                    </form>
                    <div id="side_accordion" class="accordion">

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseOne" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-folder-close"></i> Структура
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseOne">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li><?php echo CHtml::link('Факультеты', Yii::app()->createAbsoluteUrl('admin/facultets/admin'))?></li>
                                        <li><?php echo CHtml::link('Кафедры', '')?></li>
                                        <li><?php echo CHtml::link('Специальности', Yii::app()->createAbsoluteUrl('admin/specialities/admin'))?></li>
                                        <li><?php echo CHtml::link('Группы', Yii::app()->createAbsoluteUrl('admin/groups/admin'))?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseThree" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-user"></i> Пользователи
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseThree">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li><a href="javascript:void(0)">Преподаватели</a></li>
                                        <li><a href="javascript:void(0)">Студенты</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseFour" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-cog"></i> Настройки
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseFour">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li class="nav-header">Личные</li>
                                        <li class="active"><a href="javascript:void(0)">Аккаунт</a></li>
                                        <li class="nav-header">Настройки системы</li>
                                        <li><a href="javascript:void(0)">Общая информация</a></li>
                                        <li><a href="javascript:void(0)">Что-то еще...</a></li>
                                        <!--                                                    <li class="divider"></li>
                                                                                            <li><a href="javascript:void(0)">Help</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapse7" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-th"></i> Сейчас
                                </a>
                            </div>
                            <div class="accordion-body collapse in" id="collapse7">
                                <div class="accordion-inner">
                                    <?php $this->widget('application.widgets.nowWidget.NowWidget'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="push"></div>
                </div>

                <div class="sidebar_info">
                    <ul class="unstyled">
                        <li>
                            <span class="act act-danger">65</span>
                            <strong>Новые сообщения</strong>
                        </li>
                        <li>
                            <span class="act act-success">10</span>
                            <strong>Пользователи он-лайн</strong>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>