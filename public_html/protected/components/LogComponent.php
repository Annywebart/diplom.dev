<?php

class LogComponent extends CApplicationComponent
{

    private $_url = 0;

    public function setUrl($id)
    {
        $this->_url = $id;
    }

    public function getUrl()
    {
        return $this->_url;
    }

}
