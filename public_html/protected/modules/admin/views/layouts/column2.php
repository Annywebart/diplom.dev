<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="span3">
    <!-- sidebar -->
    <?php $this->renderPartial('../layouts/_leftSidebar'); ?>
</div>
<div class="span9">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>