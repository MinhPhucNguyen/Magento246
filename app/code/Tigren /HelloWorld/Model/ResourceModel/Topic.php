<?php
namespace Tigren\HelloWorld\Model\ResourceModel;
class Topic extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }
    protected function _construct()
    {
        $this->_init('Tigren_topic', 'topic_id');
    }
}
