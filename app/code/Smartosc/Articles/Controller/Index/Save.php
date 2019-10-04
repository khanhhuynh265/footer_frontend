<?php

namespace Smartosc\Articles\Controller\Index;

use Magento\Framework\App\Action\Context;
use Smartosc\Articles\Model\TestFactory;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Test
     */
    protected $_test;

    public function __construct(
        Context $context,
        TestFactory $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $test = $this->_test->create();
        $test->setData($data);
        if ($test->save()) {
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        } else {
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('articles/index/index');
        return $resultRedirect;
    }
}
