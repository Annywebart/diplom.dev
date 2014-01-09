<?php

/**
 * This is the controller for create log of users. 
 *
 */
class UserLogComponent extends CApplicationComponent
{
    /**
     * Write to log.
     * @param integer $systemId System id.
     * @param integer $memberId Member id.
     * @param integer $action Action id.
     * @param integer $sessionId Session id.
     *
     */
    public function writeLog($sessionId, $pageUrl)
    {
        
        $criteria = new CDbCriteria();
        $criteria->condition = 'sessionId=:sessionId';
        $criteria->params = array('sessionId' => $sessionId);
        $criteria->limit = 1;
        $criteria->order = 'entryTime DESC';
        $previous = UserLogsModel::model()->find($criteria);
        
        if (NULL !== $previous) {
            if ($pageUrl !== $previous->pageUrl) {
                $model = new UserLogsModel();
                $model->sessionId = $sessionId;
                $model->userIp = Yii::app()->request->userHostAddress;
                $model->userName = Yii::app()->user->getName();
                $model->browser = 'Firefox';
                $model->operatingSystem = 'Windows 7'; //переделать
                $model->entryTime = date('Y-m-d H:i:s');
                $model->refererUrl = $pageUrl;  //переделать
                $model->pageUrl = $pageUrl;

                if ($model->save()) {
                    $previous->spentTime = (strtotime($model->entryTime) - strtotime($previous->entryTime));
                    $previous->save();
                }
            }
        } else {
            $model = new UserLogsModel();
            $model->sessionId = $sessionId;
            $model->userIp = Yii::app()->request->userHostAddress;
            $model->userName = Yii::app()->user->getName();
            $model->browser = 'Firefox';
            $model->operatingSystem = 'Windows 7'; //переделать
            $model->entryTime = date('Y-m-d H:i:s');
            $model->refererUrl = $pageUrl;  //переделать
            $model->pageUrl = $pageUrl;
            $model->save();
        }
    }

}

?>
