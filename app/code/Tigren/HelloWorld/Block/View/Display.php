<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Tigren\HelloWorld\Block\View;

class Display extends \Magento\Framework\View\Element\Template
{

    protected  $topicFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Tigren\HelloWorld\Model\TopicFactory $topicFactory
    ) {
        $this->topicFactory = $topicFactory;
        parent::__construct($context);
    }

    public  function  getTopicList(){
        $topicList = $this->topicFactory->create();
        return $topicList->getCollection();
    }
}

