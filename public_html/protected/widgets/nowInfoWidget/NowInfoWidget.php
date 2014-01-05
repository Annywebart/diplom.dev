<?php

class NowInfoWidget extends CWidget
{

    public function run()
    {
        $now = date('H:i:s');

        $firstLesson = LessonsModel::model()->find('id=:id', array('id' => 1));
        $lastLesson = LessonsModel::model()->find('id=:id', array('id' => 6));

        if ($now > $firstLesson->timeStart && $now < $lastLesson->timeEnd) {
            $model = LessonsModel::model()->findAll();
            foreach ($model as $lesson) {
                if ($now > $lesson->timeStart && $now < $lesson->timeEnd) {
                    $resultLesson = $lesson->title;
                } else {
                    $resultLesson = 'Перерыв';
                }
            }
        } elseif (strtotime('00:00:00') > $firstLesson->timeStart) {
            $resultLesson = 'Пары еще не начались';
        } elseif (strtotime('00:00:00') > $firstLesson->timeEnd) {
            $resultLesson = 'Пары уже закончились';
        }

        $this->render('index', array(
            'lesson' => $resultLesson,
        ));
    }

}
?>

