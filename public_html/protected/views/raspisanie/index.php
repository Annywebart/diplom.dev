<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><?php echo CHtml::link('Главная', '/') ; ?></li>
            <li><span>Расписание</span></li>
        </ul>
    </div>
</section>

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">

        <!-- main content -->

        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($facultets as $key => $value): ?>
                    <div id="letter-container">
                        <div class="letter">
                            <span><?php echo $key; ?></span>
                        </div>
                        <div class = "facultets">
                            <?php foreach ($value as $facultet): ?>
                                <?php echo CHtml::link($facultet->code, Yii::app()->createAbsoluteUrl('raspisanie/facultet', array('id' => $facultet->id)), array('class' => 'btn btn-default btn-lg')) ; ?>
                            <?php endforeach; ?> 
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

