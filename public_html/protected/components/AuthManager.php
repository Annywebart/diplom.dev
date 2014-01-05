<?php

/**
 * AuthManager
 *
 */
class AuthManager extends CPhpAuthManager
{

    private $_model = null;
    public $tableRole = '';
    public $fieldRole = '';

    /**
     * Get role
     *
     * @return string User role
     */
    function getRole()
    {
        if ($user = $this->getRoleModel()) {
            // get role from table
            return $user->{$this->fieldRole};
        }
    }

    /**
     * Get model
     *
     * @author Orlov Alexey <Orlov.Alexey@zfort.net>
     * @version $Id$
     * @package components
     * @since 1.0
     * @retun CModel
     */
    private function getRoleModel()
    {
        if (!Yii::app()->user->isGuest && $this->_model === null) {
            $roleTable = $this->tableRole;
            $this->_model = $roleTable::model()->findByPk(Yii::app()->user->getId());
        }
        return $this->_model;
    }

    /**
     * Init
     *
     * @author Orlov Alexey <Orlov.Alexey@zfort.net>
     * @version $Id$
     * @package components
     * @since 1.0
     */
    public function init()
    {
        // Иерархию ролей расположим в файле auth.php в директории config приложения
        if ($this->authFile === null) {
            $this->authFile = Yii::getPathOfAlias('application.config.auth') . '.php';
        }

        parent::init();

        if (!Yii::app()->user->isGuest) {
            //add role for auth user
            $this->assign($this->getRole(), Yii::app()->user->getId());
        }
    }

}
