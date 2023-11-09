<?php

namespace Tigren\HelloWorld\Block;

class Index extends \Magento\Framework\View\Element\Template{

    protected $topicFactory;
    public function
    __construct(\Magento\Framework\View\Element\Template\Context $context,
     \Tigren\HelloWorld\Model\TopicFactory $topicFactory)
    {
        $this->topicFactory=$topicFactory;
        parent::__construct($context);
    }

    public function sayHello(){
       $topic = $this->topicFactory->create();
       return $topic->getCollection();
    }
}
