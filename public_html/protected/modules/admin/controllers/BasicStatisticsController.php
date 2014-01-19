<?php

class BasicStatisticsController extends AdminController
{

    public $layout = '/layouts/column2';

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
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('index', 'systemInfo', 'usersInfo', 'ajaxInterval'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
//    public function actionIndex()
//    {
//        $this->render('index');
//    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $result = Yii::app()->db->createCommand()
            ->select('
                COUNT(DISTINCT sessionId) AS totalSiteViews,
                COUNT(*) as totalPagesViews
            ')
            ->from(UserLogsModel::model()->tableName())
            ->queryAll();
        
        $this->render('views', array('info' => $result[0]));
    }

    public function actionSystemInfo()
    {
        $browser = Yii::app()->db->createCommand()
            ->select('browser, COUNT(DISTINCT sessionId) as browserCount')
            ->from(UserLogsModel::model()->tableName())
            ->group('browser')
            ->queryAll();
        
        $os = Yii::app()->db->createCommand()
            ->select('operatingSystem, COUNT(DISTINCT sessionId) as osCount')
            ->from(UserLogsModel::model()->tableName())
            ->group('operatingSystem')
            ->queryAll();
        
        $resolution = Yii::app()->db->createCommand()
            ->select('resolution, COUNT(DISTINCT sessionId) as resolutionCount')
            ->from(UserLogsModel::model()->tableName())
            ->group('resolution')
            ->queryAll();
        
        $this->render('systemInfo', array(
            'browser' => $browser, 
            'os' => $os, 
            'resolution' => $resolution
        ));
    }

    public function actionUsersInfo()
    {
        $this->render('usersInfo');
    }

//    public function actionAjaxInterval(){
//        if('year' == $_POST['interval']){
//            echo $this->renderPartial('_viewsYear', false, true);
//        } 
//        elseif('month' == $_POST['interval']){
//            echo $this->renderPartial('_viewsMonth', false, true);
//            die();
//        } 
//        elseif('day' == $_POST['interval']){
//            echo $this->renderPartial('_viewsDay', false, true);
//        }
//    }
}
