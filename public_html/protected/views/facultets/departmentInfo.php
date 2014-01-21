<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/'); ?></li>
            <li><?php echo CHtml::link('Факультеты', Yii::app()->createAbsoluteUrl('facultets/index')); ?></li>
            <li><?php echo CHtml::link('Кафедры факультета ' . $model->facultet->code, Yii::app()->createAbsoluteUrl('facultets/kafedry', array('id' => $model->facultet->id))); ?></li>						
            <li><span>Кафедра <?php echo $model->getTitle(); ?></span></li>
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">

        <!-- main content -->

        <div class="row">
            <div class="col-sm-9">
                <h2><?php echo $model->title; ?></h2>
                
                <?php echo $model->description; ?>

                <div class="hr margin-top-20"></div>
                 
                <h3>Выпускающие специальности</h3>

                <?php foreach ($model->specialities as $item): ?>
                <span class="big green"><?php echo $item->code; ?></span> - <span class="middle"><?php echo $item->title; ?></span><br />
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
