<?php
namespace Macademy\Blog\Model\ResourceModel\Post;

use Macademy\Blog\Model\Post;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init(Post::class, Post::class);
    }
}
