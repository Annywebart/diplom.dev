<div>
    <div class="day">
        <?php echo date('d') ?>
    </div> 
    <div class="day-of-week">
        <?php echo DateHelper::getDayOfWeek(); ?>
    </div>   
    <div class="month-year">
        <?php echo DateHelper::getMonth(); ?>
        <?php echo date('Y') ?>
    </div>
    <div class="time">
        <?php echo date('H:m:s') ?>
    </div>
    
    <div class="pair">
        2 пара
    </div>
    <div class="week">
        1 неделя
    </div>
</div>