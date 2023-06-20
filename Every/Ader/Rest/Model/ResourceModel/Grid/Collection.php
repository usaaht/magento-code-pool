<?php declare(strict_types=1);

namespace Ader\Rest\Model\ResourceModel\Grid;

use Ader\Rest\Model\Grid;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Grid::class, \Ader\Rest\Model\ResourceModel\Grid::class);
    }
}
