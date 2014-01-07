
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
            <div class="col-sm-9">
                <?php
                $this->widget('bootstrap.widgets.TbExtendedGridView', array(
                    'id' => 'grid-facultets',
                    'filter' => $model,
                    'type' => 'striped',
                    'dataProvider' => $model->search(),
                    'emptyText' => 'Результатов не найдено',
                    'template' => "{items}\n{extendedSummary}",
                    'columns' => array(
                        'code',
                        'title',
                        array(
                            'class' => 'application.components.OurButtonColumn',
                            'template' => '{departments}{specialities}{timetable}',
                            'buttons' => array(
                                'timetable' => array(
                                    'buttonText' => 'Информация о факультете',
                                    'label' => false,
                                    'url' => 'array("facultets/view","id" => $data->id)',
//                                        'imageUrl' => Yii::app()->params['styleSite'].'/images/icons/icon16-edit.png',
                                    'options' => array('class' => 'btn btn-default'),
                                ),
                                'specialities' => array(
                                    'buttonText' => 'Специальности',
                                    'label' => false,
                                    'url' => 'array("facultets/specialities","id" => $data->id)',
//                                        'imageUrl' => Yii::app()->params['styleSite'].'/images/icons/icon16-edit.png',
                                    'options' => array('class' => 'btn btn-default'),
                                ),
                                'departments' => array(
                                    'buttonText' => 'Кафедры',
                                    'label' => false,
                                    'url' => 'array("facultets/departments","id" => $data->id)',
//                                        'imageUrl' => Yii::app()->params['styleSite'].'/images/icons/icon16-edit.png',
                                    'options' => array('class' => 'btn btn-default'),
                                ),
                            ),
                        ),
                    ),
//    'chartOptions' => array(
//        'data' => array(
//            'series' => array(
//                array(
//                    'name' => 'Hours worked',
//                    'attribute' => 'hours'
//                )
//            )
//        ),
//        'config' => array(
//            'chart' => array(
//                'width' => 800
//            )
//        )
//    ),
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
