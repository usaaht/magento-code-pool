<?php

namespace Macademy\Blog\Controller\Index;


use Macademy\Blog\Controller\Post\Detail;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;

class Index implements HttpGetActionInterface
{
    /**
     * @var ForwardFactory
     */
    private $forwardFactory;

    /**
     * @var Detail
     */
    private $detail;

    public function __construct(
        ForwardFactory $forwardFactory,
        Detail $detail
    ) {
        $this->forwardFactory = $forwardFactory;
        $this->detail = $detail;
    }


    public function execute()
    {
        /**@var Forward $forward */
        $forward= $this->forwardFactory->create();
        $this->detail->xyz();
        return $forward->setController('post')->forward('list');
    }
}
