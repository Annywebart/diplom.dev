
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
                    'filter' => $model,
                    'type' => 'striped',
                    'dataProvider' => $model->search(),
                    'emptyText' => 'Результатов не найдено',
                    'template' => "{items}\n{extendedSummary}",
                    'columns' => array(
                        'idDepartment',
                        array(
                            'name' => 'idDepartment',
                            'value' => '$data->department->title',
//                                'filter' => () ? CHtml::listData(DepartmentsModel::model()->findAll(), 'id', 'title'),
                        ),
                        'lastName',
                        'firstName',
                        'fatherName',
                        'scientificDegree',
                        array(
                            'class' => 'bootstrap.widgets.TbButtonColumn',
                            'template' => '{timetable}',
                            'buttons' => array(
                                'timetable' => array(
                                    'label' => 'Смотреть расписание',
                                    'url' => 'array("site/timetable","id" => $data->id, "type" => "lecturer")',
//                                        'imageUrl' => Yii::app()->params['styleSite'].'/images/icons/icon16-edit.png',
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
