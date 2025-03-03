<?php
namespace Vendor\Module\Ui\Component;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    protected $collection;
    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Vendor\Module\Model\ResourceModel\Promotion\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
    
    public function getData()
    {
        if (!$this->getCollection()->isLoaded()) {
            $this->getCollection()->load();
        }
        
        $items = $this->getCollection()->toArray();
        
        return [
            'totalRecords' => $this->getCollection()->getSize(),
            'items' => array_values($items['items'] ?? []),
        ];
    }
}