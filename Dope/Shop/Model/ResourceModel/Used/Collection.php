<?php

namespace Dope\Shop\Model\ResourceModel\Used;

use Dope\Shop\Model\ResourceModel\Used;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\Dope\Shop\Model\Used::class, Used::class);
    }
}
