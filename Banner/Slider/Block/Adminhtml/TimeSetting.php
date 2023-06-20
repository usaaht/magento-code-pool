<?php

namespace Banner\Slider\Block\Adminhtml;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;

class TimeSetting extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var Registry
     */
    protected $_coreRegistry;
    public function __construct(
        Context  $context,
        Registry $coreRegistry,
        array    $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->setDateFormat(\Magento\Framework\Stdlib\DateTime::DATE_INTERNAL_FORMAT);
        $element->setTimeFormat("HH:mm:ss"); //set date and time as per requirment
        return parent::render($element);
    }
}
