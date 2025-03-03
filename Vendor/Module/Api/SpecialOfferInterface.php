<?php
namespace Vendor\Module\Api;

interface SpecialOfferInterface
{
    /**
     * Get list of special offer products
     *
     * @return \Vendor\Module\Api\Data\ProductInterface[] Array of special offer products
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getSpecialOfferProducts();
}
