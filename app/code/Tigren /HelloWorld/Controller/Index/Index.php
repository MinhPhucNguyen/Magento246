<?php

namespace Tigren\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;

    protected $topicFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Tigren\HelloWorld\Model\TopicFactory $topicFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->$topicFactory = $topicFactory;
        return parent::__construct($context);
    }
    public function execute()
    {
        $post = $this->topicFactory->create();
        $collection = $post->getCollection();
        foreach($collection as $item){
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        exit();
//        return  $this->pageFactory->create();
    }
}
