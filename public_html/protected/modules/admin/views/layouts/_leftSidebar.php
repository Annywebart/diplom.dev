<div class="sidebar">
    <div class="antiScroll">
        <div class="antiscroll-inner">
            <div class="antiscroll-content">

                <div class="sidebar_inner">
                    <div id="logo">
                        <a href="<?php echo Yii::app()->createAbsoluteUrl(Yii::app()->request->baseUrl); ?>">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-150.png"/>
                        </a>
                    </div>
                    <div id="side_accordion" class="accordion">

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseFirst" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-folder-close"></i> Расписание
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseFirst">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li><?php echo CHtml::link('Расписание', Yii::app()->createAbsoluteUrl('admin/timetable/admin')) ?></li>
                                        <li><?php echo CHtml::link('Пары', Yii::app()->createAbsoluteUrl('admin/lessons/admin')) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                                        <li><?php echo CHtml::link('Факультеты', Yii::app()->createAbsoluteUrl('admin/facultets/admin')) ?></li>
                                        <li><?php echo CHtml::link('Кафедры', Yii::app()->createAbsoluteUrl('admin/departments/admin')) ?></li>
                                        <li><?php echo CHtml::link('Специальности', Yii::app()->createAbsoluteUrl('admin/specialities/admin')) ?></li>
                                        <li><?php echo CHtml::link('Группы', Yii::app()->createAbsoluteUrl('admin/groups/admin')) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseTwo" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-user"></i> Корпуса
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseTwo">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li><?php echo CHtml::link('Корпуса', Yii::app()->createAbsoluteUrl('admin/corpuses/admin')) ?></li>
                                        <li><?php echo CHtml::link('Аудитории', Yii::app()->createAbsoluteUrl('admin/classrooms/admin')) ?></li>
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
                                        <li><?php echo CHtml::link('Преподаватели', Yii::app()->createAbsoluteUrl('admin/lecturers/admin')) ?></li>
                                        <li><?php echo CHtml::link('Студенты', Yii::app()->createAbsoluteUrl('admin/students/admin')) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseFour" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-signal"></i> Статистика
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseFour">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li><?php echo CHtml::link('Общая статистика', Yii::app()->createAbsoluteUrl('admin/basicStatistics/index')) ?></li>
                                        <li><?php echo CHtml::link('Подробная статистика', Yii::app()->createAbsoluteUrl('admin/detailStatistics/users')) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseFive" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-cog"></i> Настройки
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseFive">
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
                    </div>

                    <div class="push"></div>
                </div>

                <!--                <div class="sidebar_info">
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
                                </div>-->

            </div>
        </div>
    </div>

</div>