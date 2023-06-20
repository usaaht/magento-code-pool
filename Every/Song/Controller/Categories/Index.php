<?php

namespace Every\Song\Controller\Categories;

use Every\Song\Model\ResourceModel\Sales\BestSellers\CollectionFactory as BestsellersCollectionFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    protected BestsellersCollectionFactory $bestsellersCollectionFactory;

    public function __construct(
        Context $context,
        BestsellersCollectionFactory  $bestsellersCollectionFactory
    ) {
        $this->bestsellersCollectionFactory = $bestsellersCollectionFactory;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $request = $this->getRequest();
        $categoryId = $request->getParam('category_id');
        $limit  = $request->getParam('limit');
        $bestsellersCollection = $this->bestsellersCollectionFactory->create();
        $filteredBestsellersCollection = $bestsellersCollection->addFieldToFilter('every_song_sales_best_sellers', [
            'gt' => 1 ,
        ]);
        $firstItem = $bestsellersCollection->getFirstItem();
        $allItems = $filteredBestsellersCollection->getItems();

        echo '<pre>';
        foreach ($allItems as $item) {
            var_dump($item->getData());
        }
        die();

        $result->setContents("category_id : $categoryId , limit : $limit");
        return $result;
    }
}
