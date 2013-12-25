<?php

/**
 * DateHelper include functions for work with dates
 *
 */
class DateHelper
{

    /**
     * Get current date
     *
     * @return string
     *
     */
    public static function getCurrentDate($withTime = true, $fullYear = true)
    {
        if ($fullYear) {
            $year = 'Y';
        } else {
            $year = 'y';
        }

        if ($withTime) {
            return date('m/d/' . $year . ' H:m:s');
        } else {
            return date('m/d/' . $year);
        }
    }

    /**
     * Get month
     *
     * @return string=
     */
    public static function getMonth($month = NULL)
    {
        if(!$month){
            $month = date('m');
        }
        
        switch ($month) {
            case 1:
                return 'Январь';
                break;
            case 2:
                return 'Февраль';
                break;
            case 3:
                return 'Март';
                break;
            case 4:
                return 'Апрель';
                break;
            case 5:
                return 'Май';
                break;
            case 6:
                return 'Июнь';
                break;
            case 7:
                return 'Июль';
                break;
            case 8:
                return 'Август';
                break;
            case 9:
                return 'Сентябрь';
                break;
            case 10:
                return 'Октябрь';
                break;
            case 11:
                return 'Ноябрь';
                break;
            case 12:
                return 'Декабрь';
                break;
            default:
                break;
        }
    }

        /**
     * Get month
     *
     * @return string
     *
     */
    public static function getDayOfWeek($day = NULL)
    {
        if(!$day){
            $day = date('w');
        }
        
        switch ($day) {
            case 0:
                return 'Воскресенье';
                break;
            case 1:
                return 'Понедельник';
                break;
            case 2:
                return 'Вторник';
                break;
            case 3:
                return 'Среда';
                break;
            case 4:
                return 'Четверг';
                break;
            case 5:
                return 'Пятница';
                break;
            case 6:
                return 'Суббота';
                break;
            default:
                break;
        }
    }
    
    /**
     * Get format of date for save
     *
     */
    public static function getFileSaveFormatDbDate($mysqlDate)
    {
        return date('m-d-Y', strtotime($mysqlDate));
    }

    /**
     * Generate listData array for DropDown
     *
     * @return array
     */
    public static function getDateDays()
    {
        $rows = range(1, 31);
        $res = array_combine($rows, $rows);
        return $res;
    }

    /**
     * Generate listData array for DropDown
     *
     * @return array
     */
    public static function getDateMonths()
    {
        $rows = array();
        for ($i = 1; $i <= 12; $i++) {
            $rows[$i] = date("M", mktime(0, 0, 0, $i, 1, 2000));
        }
        $res = $rows;
        return $res;
    }

    /**
     * Generate listData array for DropDown
     * 
     * @return array
     */
    public static function getDateYears()
    {
        $currYear = date('Y');
        $fromYear = $currYear - 80;
        $toYear = $currYear - 10;
        $rows = range($fromYear, $toYear);
        $res = array_combine($rows, $rows);
        return $res;
    }

    public static function getRelativeTime($timestamp, $headText = 'about ')
    {
        $delta = (time() - $timestamp);

        if ($delta < 0) {
            return $headText . '0 seconds ago';
        }

        $r = '';
        if ($delta < 60) {
            $r = round($delta, 0) . ' seconds ago';
        } else if ($delta < 120) {
            $r = 'a minute ago';
        } else if ($delta < (45 * 60)) {
            $r = round(($delta / 60), 0) . ' minutes ago';
        } else if ($delta < (2 * 60 * 60)) {
            $r = 'an hour ago';
        } else if ($delta < (24 * 60 * 60)) {
            $r = '' . round(($delta / 3600), 0) . ' hours ago';
        } else if ($delta < (48 * 60 * 60)) {
            $r = 'a day ago';
        } else {
            $r = round(($delta / 86400), 0) . ' days ago';
        }

        return $headText . $r;
    }

    /**
     * Generate list navigation dates
     * @param  string $searchDate Searching date
     * @param  string $firstDate first date in JobProducts table
     * @return array
     */
    public static function getMenuDateNavigation($searchDate, $firstDate)
    {

        $reultsArr = array();

        $firstDateToTime = $firstDate != false ? strtotime($firstDate . ' 00:00:00') : 0;
        $searchDateToTime = $searchDate != false ? strtotime($searchDate . ' 00:00:00') : 0;
        $today = strtotime(date('Y-m-d 00:00:00'));
        $previousDay = strtotime('-1day', $searchDateToTime);
        $nextDay = strtotime('+1day', $searchDateToTime);

        if ($firstDateToTime > 0 && $searchDateToTime != $firstDateToTime && $previousDay != $firstDateToTime) {
            $reultsArr[] = CHtml::link('First Date (' . $firstDate . ')', $firstDate, array('class' => 'navigation-link'));
        }

        if ($previousDay >= $firstDateToTime) {
            $reultsArr[] = CHtml::link('Previous Date (' . date("Y-m-d", $previousDay) . ')', date('Y-m-d', $previousDay), array('class' => 'navigation-link'));
        }

        if ($nextDay <= $today) {
            $reultsArr[] = CHtml::link('Next Date (' . date("Y-m-d", $nextDay) . ')', date('Y-m-d', $nextDay), array('class' => 'navigation-link'));
        }

        if ($today != $nextDay && $today != $searchDateToTime) {
            $reultsArr[] = CHtml::link('Today (' . date("Y-m-d", $today) . ')', date('Y-m-d', $today), array('class' => 'navigation-link'));
        }


        return implode($reultsArr, ' || ');
    }

}
