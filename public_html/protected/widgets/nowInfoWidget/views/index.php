<div id="now-info">
    <div class="day-of-week">
        <?php echo DateHelper::getDayOfWeek(); ?>
    </div>   
    <div class="day">
        <?php echo date('j') ?>
    </div> 
    <div class="month-year">
        <?php echo DateHelper::getMonth(); ?>,
        <?php echo date('Y') ?>
    </div>
    <div class="time">
        <?php echo date('H:i') ?>
    </div>

    <div class="lesson">
        <?php echo $lesson; ?>
    </div>
    <div class="week">
        <?php echo DateHelper::getCurrentWeek(); ?>
    </div>
</div>
