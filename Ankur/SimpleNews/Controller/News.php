<?php
namespace Ankur\SimpleNews\Controller;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;
use Ankur\SimpleNews\Helper\Data;
use Ankur\SimpleNews\Model\NewsFactory;

abstract class News extends Action 
{
    protected $_pageFactory;
    protected $_dataHelper;
    protected $_newsFactory;

    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory, 
        \Ankur\SimpleNews\Helper\Data $helper, 
        \Ankur\SimpleNews\Model\NewsFactory $newsFactory
    ){
        $this->_pageFactory = $pageFactory;
        $this->_dataHelper = $helper;
        $this->_newsFactory = $newsFactory;
        parent::__construct($context);
    }

    public function dispatch(RequestInterface $request) {
        if($this->_dataHelper->isEnabledInFrontend()) {
            $result = parent::dispatch($request);
            return $result;
        }
        else {
            $this->_forward('noroute');
        }
    }
}