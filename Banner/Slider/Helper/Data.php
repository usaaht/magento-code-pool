<?php

namespace Banner\Slider\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_IMAGE_SHOW = 'banner_section/general_pop/logo';
    const XML_PATH_TIME_FROM = 'banner_section/general_pop/fromdatetime';
    const XML_PATH_TIME_TO = 'banner_section/general_pop/todatetime';

    const XML_PATH_TIME_TEXT = 'banner_section/my_account_page/your_text';
    /**
     * @param $storeCode
     * @return mixed
     */
    public function setImage($storeCode = null)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_IMAGE_SHOW, ScopeInterface::SCOPE_STORE, $storeCode);
    }

    /**
     * @param $storeCode
     * @return mixed
     */
    public function fromDate($storeCode = null)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_TIME_FROM, ScopeInterface::SCOPE_STORE, $storeCode);
    }
    public function toDate($storeCode = null)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_TIME_TO, ScopeInterface::SCOPE_STORE, $storeCode);
    }
    public function yourText($storeCode = null)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_TIME_TEXT, ScopeInterface::SCOPE_STORE, $storeCode);

    }
}
