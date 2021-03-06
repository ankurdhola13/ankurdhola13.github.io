<?php
namespace Ankur\SimpleNews\Block\Adminhtml\News;

use Magento\Backend\Block\Widget\Form\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

/* This is the block file of form container */
class Edit extends Container {
    protected $_coreRegistry = null;

    public function __construct(Context $context, Registry $registry, array $data = []) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    protected function _construct() {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'Ankur_SimpleNews';

        parent::_construct();

        $this->buttonList->update('delete', 'label', __('Delete'));
    }

    public function getHeaderText() {
        $newsRegistry = $this->_coreRegistry->registry('simplenews_news');

        if($newsRegistry->getId()) {
            $newsTitle = $this->escapeHtml($newsRegistry->getTitle());
            return __("Edit News '%1'", $newsTitle);
        }
        else {
            return __('Add News');
        }
    }

    protected function _prepareLayout() {
        $this->_formScripts[] = "
            function toggleEditor() {
                if(tinyMCE.getInstanceById('post_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'post_content');
                }
                else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'post_content');
                }
            };
        ";

        return parent::_prepareLayout();
    }
}
