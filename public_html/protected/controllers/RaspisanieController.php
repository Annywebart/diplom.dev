<?php

class RaspisanieController extends Controller
{

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } elseif ($error['code'] == 404) {
                $this->render('404', $error);
            } else {
                $this->render('error', $error);
            }
        }
    }

    public function actionIndex()
    {
        $this->render('index', array(
            'facultets' => FacultetsModel::getFacultetsByLetter(),
        ));
    }

    public function actionFacultet($id)
    {
        $this->render('facultet', array(
            'model' => FacultetsModel::model()->find('id=:id', array(':id' => $id)),
        ));
    }

    public function actionGroup($id)
    {
        $model = GroupsModel::model()->find('id=:id', array(':id' => $id));
        $lessons = LessonsModel::model()->findAll();

        $day = array();
        foreach (DayOfWeekModel::listData(true) as $key => $value) {
            $day[$key] = NULL;

            foreach ($lessons as $lesson) {
                $day[$key][$lesson->id] = NULL;
                foreach ($model->timetable as $item) {
                    if ($item) {
                        if ($key == $item->dayOfWeek) {
                            if ($lesson->id == $item->idLesson) {
                                $day[$key][$lesson->id] = $item;
                            }
                        }
                    }
                }
            }
        }

//        echo '<pre>';
//        var_dump($day);
//        die;


        $this->render('group', array(
            'model' => $model,
            'day' => $day,
        ));
    }

}
