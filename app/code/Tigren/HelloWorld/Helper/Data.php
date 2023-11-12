<?php

namespace Tigren\HelloWorld\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper{
    const XML_PATH_HELLOWORLD = 'helloworld/';

    public function getConfigValue($field){
        return $this->scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE);
    }

    public function getGeneralConfig($code){
        return $this->getConfigValue(self::XML_PATH_HELLOWORLD. 'general/' . $code);
    }
}
