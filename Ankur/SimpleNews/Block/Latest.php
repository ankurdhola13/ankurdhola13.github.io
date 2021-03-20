<?php
namespace Ankur\SimpleNews\Block;

use Magento\Framework\View\Element\Template;
use Ankur\SimpleNews\Helper\Data;
use Ankur\SimpleNews\Model\NewsFactory;
use Ankur\SimpleNews\Model\System\Config\Status;

class Latest extends Template {
    protected $_dataHelper;
    protected $_newsFactory;

    public function __construct(Template\Context $context, Data $dataHelper, NewsFactory $newsFactory) {
        $this->_dataHelper = $dataHelper;
        $this->_newsFactory = $newsFactory;
        parent::__construct($context);
    }

    //Get five latest news
    public function getLatestNews() {
        $collection = $this->_newsFactory->create()->getCollection();
        $collection->addFieldToFilter('status', ['eq'=> 1]);
        $collection->getSelect()->order('id DESC')->limit(5);

        return $collection;
    }
}