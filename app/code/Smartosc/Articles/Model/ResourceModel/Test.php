<?php
namespace Smartosc\Articles\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('sm_article', 'id');   //here "smartosc_articles" is table name and "id" is the primary key of custom table
    }
}