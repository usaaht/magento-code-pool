<?php

namespace Banner\Slider\Block;

use Magento\Framework\View\Element\Template;

class PopBanner extends Template
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

    /**
     * @return string
     */
    public function getMagentoUrl()
    {
        $imageUrl = $this->getUrl();
        return $imageUrl;
    }
}
