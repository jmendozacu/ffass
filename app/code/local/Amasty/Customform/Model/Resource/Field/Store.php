<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2015 Amasty (https://www.amasty.com)
 * @package Amasty_Customform
 */

class Amasty_Customform_Model_Resource_Field_Store extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('amcustomform/field_store', 'id');
    }
}
