<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/'); ?></li>
            <li><span>Корпуса</span></li>						
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">

        <!-- main content -->

        <div class="row">
            <div class="col-sm-9">
                <?php
                $this->widget('bootstrap.widgets.TbExtendedGridView', array(
                    'filter' => $model,
                    'type' => 'striped',
                    'dataProvider' => $model->search(),
                    'emptyText' => 'Результатов не найдено',
                    'template' => "{items}\n{extendedSummary}",
                    'columns' => array(
                        'title',
                        'shortTitle',
                        'levels',
                        'description',
                        array(
                            'class' => 'bootstrap.widgets.TbButtonColumn',
                            'template' => '{timetable}',
                            'buttons' => array(
                                'timetable' => array(
                                    'label' => 'Аудитории',
                                    'url' => 'array("site/classrooms", "id" => $data->id)',
                                ),
                            ),
                        ),
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
