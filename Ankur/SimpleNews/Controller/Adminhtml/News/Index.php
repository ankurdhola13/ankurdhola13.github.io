<?php
namespace Ankur\SimpleNews\Controller\Adminhtml\News;

use Ankur\SimpleNews\Controller\Adminhtml\News;

class Index extends News {
    public function execute() {
        if($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }

        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Ankur_SimpleNews::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Ankur Simple News'));

        return $resultPage;
    }
}