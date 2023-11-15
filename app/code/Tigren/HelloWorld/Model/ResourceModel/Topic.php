<?php

namespace Tigren\HelloWorld\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Topic extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('Tigren_Topic', 'topic_id');
    }
}

