<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/'); ?></li>
            <li><?php echo CHtml::link('Факультеты', Yii::app()->createAbsoluteUrl('facultets/index')); ?></li>
            <li><span>Кафедры факультета <?php echo $model->code; ?></span></li>						
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">

        <!-- main content -->

        <div class="row">
            <div class="col-sm-9">
                <h2>Кафедры факультета <?php echo $model->code; ?></h2>
                <?php
                $this->widget('bootstrap.widgets.TbListView', array(
                    'dataProvider' => $dataProvider,
                    'template' => '{items}',
                    'emptyText' => 'Результатов не найдено',
                    'itemView' => '_department', // refers to the partial view named '_post'
                    'sortableAttributes' => array(
                        'title',
                    ),
                ));
                ?>

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
