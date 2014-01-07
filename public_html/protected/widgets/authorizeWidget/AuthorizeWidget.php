<?php

class AuthorizeWidget extends CWidget
{

    public function run()
    {
        $session = Yii::app()->session;

        $this->render('index', array(
            'user' => $session['eauth_profile'],
        ));
    }

}

?>
