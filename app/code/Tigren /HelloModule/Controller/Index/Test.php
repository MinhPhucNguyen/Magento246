<?php

namespace Tigren\HelloModule\Controller\Index;

use Magento\Framework\App\Action\Context;

class Test extends \Magento\Framework\App\Action\Action
{

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        echo 'This is HelloModule';
        exit;
    }
}
