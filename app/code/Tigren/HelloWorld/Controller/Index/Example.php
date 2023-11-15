<?php


namespace Mageplaza\HelloWorld\Controller\Index;

use \Magento\Framework\App\Action\Action;

class Example extends Action
{
    protected $title;

    /**
     * @param $title
     * @return mixed
     */
    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function execute()
    {
        echo $this->setTitle('Welcome to ABCSDASD');
        echo $this->getTitle();
    }
}
