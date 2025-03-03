<?php
namespace Vendor\Module\Model;

class Promotion extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Vendor\Module\Model\ResourceModel\Promotion::class);
    }
}