<?php ?>

<div class="col-sm-6">
    <div class="box_stat_circular">
        <div class="box_stat_circular_a color_b">
            <?php echo CHtml::link($data->title, Yii::app()->createAbsoluteUrl('facultets/kafedra', array('id' => $data->id))); ?>
        </div>
        <div class="box_stat_circular_middle">
            <div style="width: 70px; height: 70px; line-height: 70px; text-align: center; margin: 4px 0 0 4px;">
                <span style="color: #444444; display: block; font-size: 22px; padding-top: 0px; color: #34495e"><?php echo $data->shortTitle; ?></span>
            </div>
        </div>
        <div class="box_stat_circular_b">
            <?php if ($data->headDepartment): ?>
                Заведующий: <br /><?php echo LecturersModel::getFullName($data->headDepartment); ?>
                <div class="hr"></div>
            <?php endif; ?>
            Специальностей <span><?php echo (0 == count($data->specialities)) ? 'нет' : count($data->specialities); ?></span>
            Преподавателей <?php echo (0 == count($data->lecturers)) ? 'нет' : count($data->lecturers); ?>
        </div>
    </div>
</div>

