<?php

class CoursesModel extends CEnumerable
{
    const FIRST = 1;
    const SECOND = 2;
    const THIRD = 3;
    const FOURTH = 4;
    const FIFTH = 5;
    const SIXTH = 6;
    
    
    public static function listData()
    {
        return array(
            self::FIRST => '1-й курс',
            self::SECOND => '2-й курс',
            self::THIRD => '3-й курс',
            self::FOURTH => '4-й курс',
            self::FIFTH => '5-й курс',
            self::SIXTH => '6-й курс',
        );
    }

}
