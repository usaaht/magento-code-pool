<?php declare(strict_types=1);

namespace Macademy\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Detail implements HttpGetActionInterface
{

    /**
     * @var PageFactory
     */
    private PageFactory $pageFactory;
    /**
     * @var EventManager
     */
    private eventManager $eventManager;
    /**
     * @var RequestInterface
     */
    private RequestInterface $request;

    /**
     * @param PageFactory $pageFactory
     * @param EventManager $eventManager
     * @param RequestInterface $request
     */
    public function __construct(
        PageFactory $pageFactory,
        EventManager $eventManager,
        RequestInterface $request
    ) {
        $this->request = $request;
        $this->eventManager = $eventManager;
        $this->pageFactory = $pageFactory;
    }

    /**
     * @return Page|ResultInterface
     */

    public function execute()
    {
        $this->eventManager->dispatch(
            'macademy_blog_post_detail_view',
            [
            'request' => $this->request ,
            ]
        );
        return $this->pageFactory->create();
    }
}
