<?php

class DetailStatisticsController extends AdminController
{

    public $layout = '/layouts/column2';

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
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('index', 'users', 'UsersView', 'pages', 'pagesView', 'usersDelete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionUsers()
    {
        $result = Yii::app()->db->createCommand()
                ->select('id, sessionId, entryTime, userIp, browser, userName, operatingSystem, 
                    SUBTIME(DATE_FORMAT(MAX(entryTime), "%H%i%s"), DATE_FORMAT(MIN(entryTime), "%H%i%s")) AS totalTime,
                    COUNT(*) as pages,
                    SEC_TO_TIME((MAX(UNIX_TIMESTAMP(entryTime)) - MIN(UNIX_TIMESTAMP(entryTime)))/count(*)) as meanTime '
                )
                ->from(UserLogsModel::model()->tableName())
                ->group('sessionId')
                ->order('entryTime DESC')
                ->queryAll();
        $dataProvider = new CArrayDataProvider($result, array(
//            'pagination' => array(
//                'pageSize' => 10,
//            )
            'pagination' => false
        ));

        $this->render('users', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Table with user log
     */
    public function actionUsersView($sessionId)
    {
        $criteria = new CDbCriteria;

        $criteria->condition = 'sessionId =:sessionId';
        $criteria->params = array(':sessionId' => $sessionId);

        $dataProvider = new CActiveDataProvider('UserLogsModel', array(
            'pagination' => false,
            'criteria' => $criteria,
        ));

        $this->render('usersView', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Deleting session info
     */
    public function actionUsersDelete($sessionId)
    {
        $model = UserLogsModel::model()->deleteAll('sessionId=:sessionId', array(':sessionId' => $sessionId));
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionPages()
    {
        $result = Yii::app()->db->createCommand()
                ->select('id, pageUrl, 
                        COUNT(*) as users,
                        SEC_TO_TIME(SUM(spentTime)/COUNT(pageUrl)) as meanTime,
                        COUNT(spentTime) as failPercent,
                        (COUNT(*) - COUNT(spentTime))*100/COUNT(*) as outPercent
                        ')
//                count(SEC_TO_TIME(spentTime)<"00:00:02") as failPercent
                ->from(UserLogsModel::model()->tableName())
                ->group('pageUrl')
                ->order('users DESC')
                ->queryAll();
        $dataProvider = new CArrayDataProvider($result, array(
//            'pagination' => array(
//                'pageSize' => 10,
//            )
            'pagination' => false
        ));

        $this->render('pages', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return BannerModel the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = UserLogsModel::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'Страница не найдена');
        return $model;
    }

}
