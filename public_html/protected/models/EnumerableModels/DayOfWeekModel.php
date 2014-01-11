<?php

class DayOfWeekModel extends CEnumerable
{

    const SUNDAY = 0;
    const MONDAY = 1;
    const TUESDAY = 2;
    const WEDNESDAY = 3;
    const THURSDAY = 4;
    const FRIDAY = 5;
    const SATURDAY = 6;

    public static $days = array(
        self::MONDAY => 'Понедельник',
        self::TUESDAY => 'Вторник',
        self::WEDNESDAY => 'Среда',
        self::THURSDAY => 'Четверг',
        self::FRIDAY => 'Пятница',
        self::SATURDAY => 'Суббота',
        self::SUNDAY => 'Воскресенье',
    );

    public static function listData($isWorkDay = false)
    {
        if (true == $isWorkDay) {
            unset(self::$days[self::SATURDAY]);
            unset(self::$days[self::SUNDAY]);
        }
        return self::$days;
    }

}
