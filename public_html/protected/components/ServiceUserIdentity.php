<?php
/**
 * @author Drozdenko Anna <drozdenko@zfort.com>
 * @link http://www.zfort.com/
 * @copyright Copyright &copy; 2000-2013 Zfort Group
 * @license http://www.zfort.com/terms-of-use
 */

/**
 * Сlass for authorization through social networks.
 * Saving the attributes id and name in the session of current user.
 * 
 * @author Drozdenko Anna <drozdenko@zfort.com>
 */
class ServiceUserIdentity extends UserIdentity {
    
    const ERROR_NOT_AUTHENTICATED = 3;

    /**
     * @var EAuthServiceBase the authorization service instance.
     */
    protected $service;
    
    /**
     * Constructor.
     * @param EAuthServiceBase $service the authorization service instance.
     */
    public function __construct($service) {
        $this->service = $service;
    }
    
    /**
     * Authenticates a user based on {@link username}.
     * This method is required by {@link IUserIdentity}.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {        
        if ($this->service->isAuthenticated) {
            $this->username = $this->service->getAttribute('name');
            $this->setState('id', $this->service->id);
            $this->setState('name', $this->username);
            $this->setState('service', $this->service->serviceName);
            $this->errorCode = self::ERROR_NONE;        
        }
        else {
            $this->errorCode = self::ERROR_NOT_AUTHENTICATED;
        }
        return !$this->errorCode;
    }
}