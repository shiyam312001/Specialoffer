<?php
namespace Vendor\Module\Controller\Api;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class SpecialOffer extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    protected $productCollectionFactory;

    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        CollectionFactory $productCollectionFactory
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->productCollectionFactory = $productCollectionFactory;
    }

    public function execute()
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect(['name', 'price', 'image', 'special_price'])
                   ->addAttributeToFilter('special_offer', 1)
                   ->setPageSize(10);

        $products = [];
        foreach ($collection as $product) {
            $products[] = [
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'special_price' => $product->getSpecialPrice(),
                'image' => $product->getImage(),
            ];
        }

        $result = $this->resultJsonFactory->create();
        return $result->setData($products);
    }
}
