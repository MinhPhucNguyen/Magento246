<?php


namespace Tigren\HelloWorld\Api\Data;

interface TopicInterface
{

    const CREATION_TIME = 'creation_time';
    const TOPIC_ID = 'topic_id';
    const ID = 'id';
    const CONTENT = 'content';
    const TITLE = 'title';

    /**
     * Get topic_id
     * @return string|null
     */
    public function getTopicId();

    /**
     * Set topic_id
     * @param string $topicId
     * @return \Tigren\HelloWorld\Topic\Api\Data\TopicInterface
     */
    public function setTopicId($topicId);

    /**
     * Get id
     * @return string|null
     */
    public function getId();

    /**
     * Set id
     * @param string $id
     * @return \Tigren\HelloWorld\Topic\Api\Data\TopicInterface
     */
    public function setId($id);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \Tigren\HelloWorld\Topic\Api\Data\TopicInterface
     */
    public function setTitle($title);

    /**
     * Get content
     * @return string|null
     */
    public function getContent();

    /**
     * Set content
     * @param string $content
     * @return \Tigren\HelloWorld\Topic\Api\Data\TopicInterface
     */
    public function setContent($content);

    /**
     * Get creation_time
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Set creation_time
     * @param string $creationTime
     * @return \Tigren\HelloWorld\Topic\Api\Data\TopicInterface
     */
    public function setCreationTime($creationTime);
}
