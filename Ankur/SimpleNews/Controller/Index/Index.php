<?php
namespace Ankur\SimpleNews\Controller\Index;

use Ankur\SimpleNews\Controller\News;

class Index extends News
{

    public function execute()
    {
        $pageFactory = $this->_pageFactory->create();

        $pageFactory->getConfig()->getTitle()->set($this->_dataHelper->getHeadTitle());

        
        $breadcrumbs = $pageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home', ['label'=>__('Home'), 'title'=>__('Home'), 'link'=>$this->_url->getUrl('')]);
        $breadcrumbs->addCrumb('simplenews', ['label'=>__('Simple News'), 'title'=>__('Simple News')]);

        return $pageFactory;
    }
}
