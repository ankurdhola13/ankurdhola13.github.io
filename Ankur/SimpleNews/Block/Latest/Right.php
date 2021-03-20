<?php
namespace Ankur\SimpleNews\Block\Latest;

use Ankur\SimpleNews\Block\Latest;
use Ankur\SimpleNews\Model\System\Config\LatestNews\Position;

class Right extends Latest {
    public function _construct() {
         $position = $this->_dataHelper->getLatestNewsBlockPosition();

         if($position == Position::RIGHT) {
            $this->setTemplate('Ankur_SimpleNews::latest.phtml');
         }
    }
}