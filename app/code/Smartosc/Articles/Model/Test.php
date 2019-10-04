<?php
namespace Smartosc\Articles\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Smartosc\Articles\Model\ResourceModel\Test');
    }
}