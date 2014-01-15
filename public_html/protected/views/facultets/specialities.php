<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/'); ?></li>
            <li><?php echo CHtml::link('Факультеты', Yii::app()->createAbsoluteUrl('facultets/index')); ?></li>
            <li><span>Специальности факультета <?php echo $model->code; ?></span></li>					
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">

        <!-- main content -->

        <div class="row">
            <div class="col-sm-9">
                <h2>Специальности факультета <?php echo $model->code; ?></h2>
                <?php foreach ($model->specialities as $item): ?>

                    <div class="col-sm-6 col-md-6">
                        <div class="box_stat box_ico">
                            <span class="stat_ico stat_ico_1">
                                <?php echo $item->code; ?>
                            </span>
                            <?php echo $item->title; ?>
                        </div>
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
