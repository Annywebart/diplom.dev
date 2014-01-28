<div class="row">
    <div class="accordion-group span4">
        <div class="header"><i class="icon-folder-close"></i> <span>Расписание</span></div>
        <ul class="nav nav-list">
            <li><?php echo CHtml::link('Расписание', Yii::app()->createAbsoluteUrl('admin/timetable/admin')) ?></li>
            <li><?php echo CHtml::link('Пары', Yii::app()->createAbsoluteUrl('admin/lessons/admin')) ?></li>
        </ul>
    </div> 
    <div class="accordion-group span4">
        <div class="header"><i class="icon-user"></i> <span>Корпуса</span></div>
        <ul class="nav nav-list">
            <li><?php echo CHtml::link('Корпуса', Yii::app()->createAbsoluteUrl('admin/corpuses/admin')) ?></li>
            <li><?php echo CHtml::link('Аудитории', Yii::app()->createAbsoluteUrl('admin/classrooms/admin')) ?></li>
        </ul>
    </div>
    <div class="accordion-group span4">
        <div class="header"><i class="icon-folder-close"></i> <span>Структура</span></div>
        <ul class="nav nav-list">
            <li><?php echo CHtml::link('Факультеты', Yii::app()->createAbsoluteUrl('admin/facultets/admin')) ?></li>
            <li><?php echo CHtml::link('Кафедры', Yii::app()->createAbsoluteUrl('admin/departments/admin')) ?></li>
            <li><?php echo CHtml::link('Специальности', Yii::app()->createAbsoluteUrl('admin/specialities/admin')) ?></li>
            <li><?php echo CHtml::link('Группы', Yii::app()->createAbsoluteUrl('admin/groups/admin')) ?></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="accordion-group span4">
        <div class="header"><i class="icon-user"></i> <span>Пользователи</span></div>
        <ul class="nav nav-list">
            <li><?php echo CHtml::link('Преподаватели', Yii::app()->createAbsoluteUrl('admin/lecturers/admin')) ?></li>
            <li><?php echo CHtml::link('Студенты', Yii::app()->createAbsoluteUrl('admin/students/admin')) ?></li>
        </ul>
    </div>
    <div class="accordion-group span4">
        <div class="header"><i class="icon-signal"></i> <span>Статистика</span></div>
        <ul class="nav nav-list">
            <li><?php echo CHtml::link('Общая статистика', Yii::app()->createAbsoluteUrl('admin/basicStatistics/index')) ?></li>
            <li><?php echo CHtml::link('Подробная статистика', Yii::app()->createAbsoluteUrl('admin/detailStatistics/users')) ?></li>
        </ul>
    </div>
</div>