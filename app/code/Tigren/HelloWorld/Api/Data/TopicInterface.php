<?php


namespace Tigren\HelloWorld\Api\Data;

interface TopicInterface
{
    const CREATION_TIME = 'creation_time';
    const TOPIC_ID = 'topic_id';
    const ID = 'id';
    const CONTENT = 'content';
    const TITLE = 'title';

    public function getTopicId();

    public function setTopicId($topicId);

    public function getId();

    public function setId($id);

    public function getTitle();

    public function setTitle($title);

    public function getContent();

    public function setContent($content);

    public function getCreationTime();

    public function setCreationTime($creationTime);
}
