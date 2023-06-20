<?php

namespace Macademy\Blog\Api;

use Macademy\Blog\Api\Data\PostInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Blog post CRUD interface.
 * @api
 * @since 1.0.0
 */
interface PostRepositoryInterface
{
    /**
     * @param  $id
     * @return PostInterface
     * @throws LocalizedException
     */
    public function getById(PostInterface $id): PostInterface;

    /**
     * @param PostInterface $post
     * @return PostInterface
     * @throws LocalizedException
     */
    public function save(PostInterface $post): PostInterface;

    /**
     * @param $id
     * @return bool
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function deleteById(PostInterface $id): bool;
}
