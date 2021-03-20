<?php
namespace Ankur\SimpleNews\Controller\Adminhtml\News;

use Ankur\SimpleNews\Controller\Adminhtml\News;


class Edit extends News {
    public function execute() {
        $newsId = $this->getRequest()->getParam('id');
        $model = $this->_newsFactory->create();

        if($newsId) {
            $model->load($newsId); 

            if(!$model->getId()) {
                $this->messageManager->addError(__('This news no longer exists.'));
                $this->_redirect('*/*/');

                return;
            }
        }

        $data = $this->_session->getNewsData(true);
        if(!empty($data)) {
            $model->setData($data);
        }

        $this->_coreRegistry->register('simplenews_news', $model);

        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Ankur_SimpleNews::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Simple News'));

        return $resultPage;
    }
}