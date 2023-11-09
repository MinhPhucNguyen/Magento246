<?php
//Resource Model Collection

namespace Tigren\HelloWorld\Model\ResourceModel\Topic;
class Collection extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'topic_id';
    protected $_eventPrefix = 'tigren_helloworld_topic_collection';
    protected $_eventObject = 'topic_collection';

    protected function _construct()
    {
        $this->_init('Tigren\HelloWorld\Model\Topic',
            'Tigren\HelloWorld\Model\ResourceModel\Topic');
    }
}
