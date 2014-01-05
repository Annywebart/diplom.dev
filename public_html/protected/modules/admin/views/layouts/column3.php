<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="span3">
    <!-- sidebar -->
    <?php $this->renderPartial('../layouts/_leftSidebar'); ?>
</div>
<div class="span7">
    <?php echo $content; ?>
</div>
<div class="span2">
    <?php $this->widget('application.widgets.nowInfoWidget.NowInfoWidget'); ?>
</div>
<?php $this->endContent(); ?>