<?php

namespace Dope\Shop\Api;

interface UsedRepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function getById(\Dope\Shop\Api\Data\UsedInterface $id);

    /**
     * @param Data\UsedInterface $used
     * @return mixed
     */
    public function save(\Dope\Shop\Api\Data\UsedInterface $used);

    /**
     * @param $id
     * @return mixed
     */
    public function delete(\Dope\Shop\Api\Data\UsedInterface $entity_id);
}
