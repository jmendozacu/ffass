<?php

class Bc_Brand_Model_Mysql4_Brand extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the manufacturer_id refers to the key field in your database table.
        $this->_init('brand/brand', 'brand_id');
    }
}