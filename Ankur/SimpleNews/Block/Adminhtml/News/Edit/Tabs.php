<?php
namespace Ankur\SimpleNews\Block\Adminhtml\News\Edit;

use Magento\Backend\Block\Widget\Tabs as WidgetTabs;

/** This file will declare tabs at left column of the editing page */
class Tabs extends WidgetTabs {
    protected function _construct() {
        parent::_construct();
        $this->setId('news_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('News Information'));
    }

    protected function _beforeToHtml() {
        $this->addTab('news_info',
            [
                'label' => __('General'),
                'title' => __('General'),
                'content' => $this->getLayout()->createBlock('Ankur\SimpleNews\Block\Adminhtml\News\Edit\Tab\Info')->toHtml(),
                'active' => true
            ]
        );

        return parent::_beforeToHtml();
    }
}