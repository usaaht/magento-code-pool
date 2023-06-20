<?php declare(strict_types=1);

namespace Macademy\Blog\ViewModel;

use Macademy\Blog\Api\Data\PostInterface;
use Macademy\Blog\Api\PostRepositoryInterface;
use Macademy\Blog\Model\ResourceModel\Post\Collection;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Post implements ArgumentInterface
{
    private Collection $collection;
    private PostRepositoryInterface $postRepository;
    private RequestInterface  $request;

    public function __construct(
        Collection $collection,
        PostRepositoryInterface $postRepository,
        RequestInterface $request
    ) {
        $this->collection = $collection;
        $this->postRepository = $postRepository;
        $this->request = $request;
    }

    public function getList() : array
    {
        return $this->collection->getItems();
    }

    public function getCount() : int
    {
        return $this->collection->count();
    }

    public function getDetail() : array
    {
        $id = (int) $this->request->getParam('id ');
        return [];
    }
}
