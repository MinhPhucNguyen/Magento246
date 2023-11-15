<?php

namespace Tigren\HelloWorld\Model\ResourceModel\Topic;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = 'topic_id';
    
    protected function _construct()
    {
        $this->_init(
            \Tigren\HelloWorld\Model\Topic::class,
            \Tigren\HelloWorld\Model\ResourceModel\Topic::class
        );
    }
}
