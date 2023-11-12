<?php

namespace Tigren\HelloWorld\Controller\Index;

use \Magento\Framework\App\Action\Action;
use  \Magento\Framework\App\Action\Context;
use  \Tigren\HelloWorld\Helper\Data;

class Config extends Action {

    protected $helperData;

    public function __construct(Context $context, Data $helperData)
    {
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo $this->helperData->getGeneralConfig('enable', null);
        echo '<br>';
        echo $this->helperData->getGeneralConfig('display_text', null);
        exit;
    }
}
