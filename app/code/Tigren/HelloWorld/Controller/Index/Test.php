<?php

namespace Tigren\HelloWorld\Controller\Index;

use \Magento\Framework\App\Action\Action;
use  \Magento\Framework\App\Action\Context;
use \Magento\Framework\DataObject;

class Test extends Action {
    public function __construct(Context $context)
    {
        return parent::__construct($context);
    }

    public function execute()
    {
        $textDisplay = new DataObject(['text' => 'Tigren Hellooo']);

//      _eventManager: thuộc tính của class Action do Test extends
//      dispatch(event-name, data): khi event được phát đi sẽ phát đi với tên 'tigren_helloworld_display_text'
        $this->_eventManager->dispatch('tigren_helloworld_display_text', ['tigren_text' => $textDisplay]);

        echo $textDisplay->getText();
        exit;
    }
}
