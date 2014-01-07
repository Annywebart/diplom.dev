<?php

class NowInfoWidget extends CWidget
{

    public function run()
    {

        $now = date('H:i:s');

        $firstLesson = LessonsModel::model()->find('id=:id', array('id' => 1));
        $lastLesson = LessonsModel::model()->find('id=:id', array('id' => 6));

        if ($now >= $firstLesson->timeStart && $now <= $lastLesson->timeEnd) {
            $model = LessonsModel::model()->findAll();

            foreach ($model as $lesson) {
                if ($now >= $lesson->timeStart && $now <= $lesson->timeEnd) {
                    $resultLesson = $lesson->title;
                    break;
                } else {
                    $resultLesson = 'Перерыв';
                }
            }
        } else {
            if ($now > '00:00:00' && $now < $firstLesson->timeStart) {
                $resultLesson = 'Пары еще не начались';
            } else {
                $resultLesson = 'Пары уже закончились';
            }
        }


        $this->render('index', array(
            'lesson' => $resultLesson,
            'currentWeek' => $this->getCurrentWeek(),
        ));
    }

    /**
     * Get current week
     *
     * @return string
     *
     */
    public static function getCurrentWeek($startDate = '2014-01-01')
    {
        $startWeek = date('W', strtotime($startDate));
        $weekOfYears = date('W', date('Y', strtotime($startDate)));

        $nowWeek = date('W');

        $week = $nowWeek - $startWeek;

        if (is_int($week)) {
            return '1-я неделя';
        } else {
            return '2-я неделя';
        }
    }

}
?>

