<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/'); ?></li>
            <li><?php echo CHtml::link('Корпуса', Yii::app()->createAbsoluteUrl('site/korpusa')); ?></li>
            <li><span>Аудитории корпуса</span></li>						
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">

        <!-- main content -->

        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($model as $item): ?>
                    <div class="well well-small" style="display: inline-block">
                        <div class="span2"><span class="big green"><?php echo $item->number; ?></span></div>
                        <div class="span3"><b>Количество мест: </b><?php echo !empty($item->seats) ? $item->seats : 'не известно'; ?></div>
                        <div class="span3"><b>Тип: </b><?php echo !empty($item->type) ? ClassroomsModel::$classroomTypeList[$item->type] : '' ?></div>
                    </div>
                <?php endforeach; ?>
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
