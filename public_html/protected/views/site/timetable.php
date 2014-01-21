<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/'); ?></li>
            <li><?php echo CHtml::link('Преподаватели', Yii::app()->createAbsoluteUrl('site/prepodavately')); ?></li>	
            <li><span>Расписание (<?php echo $model->getFullName($model->id); ?>)</span></li>
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

                    <?php  foreach ($day as $key => $value): ?>
                        <div class="day col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><?php echo DayOfWeekModel::$days[$key]; ?></h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <tbody>
                                            <?php if (!empty($value)): ?>
                                                <?php foreach ($value as $k => $v): ?>
                                                    <tr class="<?php echo (LessonsModel::isActiveNow($k, $key) ? 'success' : '') ?>">
                                                        <td><?php echo $k; ?></td>
                                                        <td><?php echo LessonsModel::getTime($k); ?></td>
                                                        <?php if (!empty($v)): ?>
                                                            <td><?php echo $v->title; ?></td>
                                                            <td><?php echo $v->group->title; ?></td>
                                                            <td><?php echo $v->classroom->number; ?></td>
                                                            <td><?php echo $v->corpus->getTitle(); ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                            <p>Пар нет</p>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="panel-footer"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

</section>

