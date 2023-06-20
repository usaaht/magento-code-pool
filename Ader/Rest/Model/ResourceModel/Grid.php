<?php

namespace Ader\Rest\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Grid extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('grid_table', 'id');
    }
}
