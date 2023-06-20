<?php

namespace Dope\Shop\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Used extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('my_table', 'entity_id');
    }
}
