<div id="now-info">
    <div class="<?php echo $style; ?>">
        <div class="first">
            <div class="day-of-week">
                <?php echo DateHelper::getDayOfWeek(); ?>
            </div>   
            <div class="day">
                <?php echo date("j") ?>
            </div> 
            <div class="month-year">
                <?php echo DateHelper::getMonth(); ?>,
                <?php echo date("Y") ?>
            </div>
        </div>
        <?php if ('horisontal' !== $style): ?>
            <hr />
        <?php endif; ?>
        <div id="fancyClock"></div>
        <div class="last">
            <div class="lesson">
                <?php echo $lesson; ?>
            </div>
            <div class="week">
                <?php echo $currentWeek; ?>
            </div>
        </div>
    </div>
</div>
