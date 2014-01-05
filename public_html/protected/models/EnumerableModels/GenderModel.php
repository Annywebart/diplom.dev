<?php

class GenderModel extends CEnumerable
{
    const MALE = 1;
    const FEMALE = 2;
    
    public static function listData()
    {
        return array(
            self::MALE => 'Мужской',
            self::FEMALE => 'Женский',
        );
    }

}
