<?php
namespace Smartosc\Articles\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
    * Define model & resource model
    */
    protected function _construct()
    {
        $this->_init(
'Smartosc\Articles\Model\Test',
'Smartosc\Articles\Model\ResourceModel\Test'
);
    }
}
