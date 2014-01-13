<?php

class FacultetsController extends Controller
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
        $model = new FacultetsModel('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['FacultetsModel']))
            $model->attributes = $_GET['FacultetsModel'];

        $this->render('index', array('model' => $model));
    }
    
    public function actionInfo($id)
    {
        $model = FacultetsModel::model()->find('id=:id', array(':id' => $id));

        $this->render('view', array('model' => $model));
    }
    
    public function actionKafedry($id)
    {
        $dataProvider = new CActiveDataProvider('DepartmentsModel', array(
            'criteria' => array(
                'condition' => 'idFacultet=:id',
                'params' => array(':id' => $id),
            ),
        ));
        
        $this->render('departments', array(
            'model' => FacultetsModel::model()->find('id=:id', array(':id' => $id)),
            'dataProvider' => $dataProvider,
        ));
    }
    
    public function actionKafedra($id)
    {
        $this->render('departmentInfo', array(
            'model' => DepartmentsModel::model()->find('id=:id', array(':id' => $id)),
        ));
    }
    
    public function actionSpecialnosti($id)
    {
        $model = SpecialitiesModel::model()->find('idFacultet=:id', array(':id' => $id));

        $this->render('specialities', array('model' => $model));
    }

}
