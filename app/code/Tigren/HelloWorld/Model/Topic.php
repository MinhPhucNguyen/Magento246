<?php
namespace Tigren\HelloWorld\Model;

use Magento\Framework\Model\AbstractModel;
use Tigren\HelloWorld\Api\Data\TopicInterface;

class Topic extends AbstractModel implements TopicInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Tigren\HelloWorld\Model\ResourceModel\Topic::class);
    }

    /**
     * @inheritDoc
     */
    public function getTopicId()
    {
        return $this->getData(self::TOPIC_ID);
    }

    /**
     * @inheritDoc
     */
    public function setTopicId($topicId)
    {
        return $this->setData(self::TOPIC_ID, $topicId);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @inheritDoc
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @inheritDoc
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @inheritDoc
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * @inheritDoc
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * @inheritDoc
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * @inheritDoc
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * @inheritDoc
     */
    public function setCreationTime($creationTime)
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }
}
