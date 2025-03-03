<?php
namespace Vendor\Module\Model\ResourceModel;

class Promotion extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('custom_promotions', 'entity_id');
    }
}