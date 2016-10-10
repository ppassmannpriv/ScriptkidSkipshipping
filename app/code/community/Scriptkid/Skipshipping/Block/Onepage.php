<?php
class Scriptkid_Skipshipping_Block_Onepage extends Mage_Checkout_Block_Onepage
{
    protected function _getStepCodes()
    {
        if (!Mage::helper('skipshipping')->getHideShipping()){
            return parent::_getStepCodes();
        }

        return array_diff(parent::_getStepCodes(), array('shipping_method'));
    }
}
