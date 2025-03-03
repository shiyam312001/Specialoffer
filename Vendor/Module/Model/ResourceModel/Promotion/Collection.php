<?php
namespace Vendor\Module\Model\ResourceModel\Promotion;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Vendor\Module\Model\Promotion::class,
            \Vendor\Module\Model\ResourceModel\Promotion::class
        );
    }
}