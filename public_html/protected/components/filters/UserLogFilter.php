<?php

class UserLogFilter extends CFilter
{
    protected function preFilter($filterChain)
    {
        $pageUrl = Yii::app()->request->requestUri;
        $sessionId = Yii::app()->session->sessionId;
        Yii::app()->userLog->writeLog($sessionId, $pageUrl);
        
        return true;
    }

    protected function postFilter($filterChain)
    {
        
    }

}