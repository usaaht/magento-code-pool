<?php
namespace Ader\Rest\Ui\DataProvider\Category\Listing;

use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

class Collection extends SearchResult
{
    /**
     * Override _initSelect to add custom columns
     *
     * @return void
     */
    protected function _initSelect()
    {
        $this->addFilterToMap('entity_id', 'grid_table.entity_id');
        $this->addFilterToMap('name', 'argridname.value');
        parent::_initSelect();
    }
}
