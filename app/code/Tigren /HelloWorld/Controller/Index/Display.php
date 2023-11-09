<?php

namespace Tigren\HelloWorld\Controller\Index;

class Display extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory )
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    public function execute()
    {
        $this->pageFactory->create();
//        echo 'Hello World';
//        exit;
    }
}
