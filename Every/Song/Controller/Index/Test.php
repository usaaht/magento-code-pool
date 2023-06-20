<?php

namespace Every\Song\Controller\Index;

use Magento\Framework\App\Action\Action;

class Test extends Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $textDisplay = new \Magento\Framework\DataObject(['text' => 'Mageplaza']);
        $this->_eventManager->dispatch('mageplaza_helloworld_display_text', ['mp_text' => $textDisplay]);
        echo $textDisplay->getText();
        exit;
    }
}
