<?php
namespace Vendor\Module\Model;

use Vendor\Module\Api\SpecialOfferInterface;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class SpecialOffer implements SpecialOfferInterface
{
    protected $productCollectionFactory;

    public function __construct(CollectionFactory $productCollectionFactory)
    {
        $this->productCollectionFactory = $productCollectionFactory;
    }

    public function getSpecialOfferProducts()
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('special_offer', 1);
        return $collection->getItems();
    }
}
