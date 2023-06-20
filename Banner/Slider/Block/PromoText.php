<?php

namespace Banner\Slider\Block;


use Magento\Framework\View\Element\Template;

class PromoText extends Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
}
