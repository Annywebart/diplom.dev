<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeekModel
 *
 * @author Anya
 */
class WeekModel extends CEnumerable
{

    const ALL_WEEK = 0;
    const FIRST_WEEK = 1;
    const SECOND_WEEK = 2;

    public static function listData()
    {
        return array(
            self::ALL_WEEK => '',
            self::FIRST_WEEK => '1-я неделя',
            self::SECOND_WEEK => '2-я неделя',
        );
    }

}
