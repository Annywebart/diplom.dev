<?php

class SiteController extends Controller
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
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
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

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $this->layout = '//layouts/mainLight';

        // begin eauth
        $service = Yii::app()->request->getQuery('service');
        if (isset($service)) {
            $authIdentity = Yii::app()->eauth->getIdentity($service);
            $authIdentity->redirectUrl = Yii::app()->user->returnUrl;
            $authIdentity->cancelUrl = $this->createAbsoluteUrl('site/login');

            if ($authIdentity->authenticate()) {
                $identity = new ServiceUserIdentity($authIdentity);

                // successful entry
                if ($identity->authenticate()) {
                    Yii::app()->user->login($identity);
                    // save the user's attributes in session
                    $session = Yii::app()->session;
                    $session['eauth_profile'] = $authIdentity->attributes;

                    $model = UsersModel::model()->find('email=:email', array(':email' => $authIdentity->email));
                    if (NULL == $model) {
                        $userModel = new UsersModel;

                        $userModel->firstName = $authIdentity->name;
                        $userModel->lastName = $authIdentity->lastname;
//                        $userModel->gender = $authIdentity->gender;
                        $userModel->email = $authIdentity->email;
                        $userModel->type = UserTypesModel::USER;
                        $userModel->save();
                    }
                    // redirect with closing popup window 
                    $authIdentity->redirect(Yii::app()->createAbsoluteUrl('site/index'));
                } else {
                    // close the popup window and redirect to cancelUrl
                    $authIdentity->cancel();
                }
            }

            // something went wrong, redirect to the login page
            $this->redirect(array('site/login'));
        }
        // end eauth

        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect('admin/default');
        }
        if (NULL == Yii::app()->user->getId()) {
            // display the login form
            $this->render('login', array('model' => $model));
        } else {
            $this->redirect(Yii::app()->createAbsoluteUrl('admin/default'));
        }
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionRaspisanie()
    {
        $this->render('raspisanie');
    }

    public function actionPrepodavately()
    {
        $model = new LecturersModel('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['LecturersModel']))
            $model->attributes = $_GET['LecturersModel'];

        $this->render('prepodavately', array('model' => $model));
    }

    public function actionKorpusa()
    {
        $this->render('korpusa');
    }

    public function actionFakultety()
    {
        $model = new FacultetsModel('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['FacultetsModel']))
            $model->attributes = $_GET['FacultetsModel'];

        $this->render('fakultety', array('model' => $model));
    }

    public function actionPages($alias)
    {
        $model = PagesModel::model()->findByAttributes(array('alias' => $alias));

        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
            return false;
        }

        $this->render('pages', array('model' => $model));
    }

}
