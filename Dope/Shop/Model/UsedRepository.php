<?php

namespace Dope\Shop\Model;

use Dope\Shop\Api\Data\UsedInterface;
use Dope\Shop\Model\ResourceModel\Used;
use Dope\Shop\Model\ResourceModel\Used\CollectionFactory;
use Magento\Framework\Exception\AlreadyExistsException;

class UsedRepository implements \Dope\Shop\Api\UsedRepositoryInterface
{
    /**
     * @var Used
     */
    protected $resource;
    /**
     * @var CollectionFactory
     */
    protected $usedCollectionFactory;

    /**
     * @param Used $resource
     * @param CollectionFactory $usedCollectionFactory
     */
    public function __construct(
        Used $resource,
        CollectionFactory $usedCollectionFactory
    ) {
        $this->resource =  $resource;
        $this->usedCollectionFactory = $usedCollectionFactory;
    }

    /**
     * @inheritDoc
     * @throws AlreadyExistsException
     */
    public function save(UsedInterface $used)
    {
        $this->resource->save($used);
        return $used;
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     */
    public function delete($entity_id)
    {
        $this->resource->delete($entity_id);
        return $entity_id;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        $this->getById($id);
        return $id;
    }
}
