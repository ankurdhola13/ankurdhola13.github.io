<?php
namespace Ankur\SimpleNews\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Ankur\SimpleNews\Model\NewsFactory;

abstract class News extends Action {
    protected $_coreRegistry;

    protected $_resultPageFactory;

    protected $_newsFactory;

    public function __construct(
        Context $context,
        Registry $coreRegistry,
        PageFactory $resultPageFactory,
        NewsFactory $newsFactory
    ) {
        $this->_coreRegistry = $coreRegistry;
        $this->_resultPageFactory = $resultPageFactory;
        $this->_newsFactory = $newsFactory;
        parent::__construct($context);
    }

    protected function _isAllowed() {
        return $this->_authorization->isAllowed('Ankur_SimpleNews::manage_news');
    }
}