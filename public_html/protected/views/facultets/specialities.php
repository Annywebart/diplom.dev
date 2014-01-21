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
                <div id="specialities">
                    <?php if (NULL !== $model->specialities): ?>
                        <?php foreach ($model->specialities as $item): ?>
                            <div class="box_stat_circular">
                                <span class="big green"><?php echo $item->code; ?></span> - 
                                <span class="middle16"><?php echo $item->title; ?></span>
                            </div>     
                        <?php endforeach; ?>
                    <?php else: ?>
                        Результатов не найдено
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
