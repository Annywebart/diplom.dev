<?php

/**
 * 
 * @link http://www.zfort.com/
 * @copyright Copyright &copy; 2000-2013 Zfort Group
 * @license http://www.zfort.com/terms-of-use
 */

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