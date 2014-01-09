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
            'specialities' => SpecialitiesModel::model()->findAll('idFacultet=:id', array(':id' => $id)),
         ));
    }

    public function actionGroup($id)
    {
        $this->render('group', array(
            'model' => TimetableModel::model()->findAll('idGroup=:id', array(':id' => $id)),
            'lessons' => LessonsModel::model()->findAll(),
        ));
    }

}
