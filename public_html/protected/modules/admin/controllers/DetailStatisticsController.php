<?php

class DetailStatisticsController extends AdminController
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
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
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
        
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Table with user log
     */
    public function actionView($sessionId)
    {
        $criteria = new CDbCriteria;

        $criteria->condition = 'sessionId =:sessionId';
        $criteria->params = array(':sessionId' => $sessionId);

        $dataProvider = new CActiveDataProvider('UserLogsModel', array(
            'pagination' => false,
            'criteria' => $criteria,
        ));
        
        $this->render('view', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Deleting session info
     */
    public function actionDelete($sessionId)
    {
        $model = UserLogsModel::model()->deleteAll('sessionId=:sessionId', array(':sessionId' => $sessionId));
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
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
