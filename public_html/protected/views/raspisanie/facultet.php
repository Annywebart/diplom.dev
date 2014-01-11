<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/') ; ?></li>
            <li><?php echo CHtml::link('Расписание', Yii::app()->createAbsoluteUrl('raspisanie/index')) ; ?></li>	
            <li><span>Факультет <?php echo $model->code; ?></span></li>
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">

        <!-- main content -->

        <div class="row">
            <div class="col-sm-9">
                <div id="groups-conteiner" class="row">
                    <?php if (!empty($model->specialities)): ?>
                        <?php foreach ($model->specialities as $speciality): ?>
                            <?php if (!empty($speciality->groups)): ?>
                                <?php foreach ($speciality->groups as $group): ?>
                                    <?php echo CHtml::link(
                                            $group->title, 
                                            Yii::app()->createAbsoluteUrl('raspisanie/group', array('id' => $group->id)), 
                                            array('class' => 'group')
                                        );?>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>Результатов не найдено</p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Результатов не найдено</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"></h4>
                    </div>
                    <div class="panel-body">
                        <?php $this->widget('application.widgets.nowInfoWidget.NowInfoWidget'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

