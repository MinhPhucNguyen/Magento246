<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Tigren\HelloWorld\Controller\View;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Display implements HttpGetActionInterface
{

    protected $resultPageFactory;
    protected $topicFactory;

    public function __construct(PageFactory $resultPageFactory, \Tigren\HelloWorld\Model\TopicFactory $topicFactory)
    {
        $this->topicFactory = $topicFactory;
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}

