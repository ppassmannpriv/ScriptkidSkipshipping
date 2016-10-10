<?php

class Scriptkid_Skipshipping_Model_Session extends Mage_Checkout_Model_Session
{

  public function getStepData($step=null, $data=null)
  {
    if($step == 'shipping_method')
    {
      if (!Mage::helper('skipshipping')->getHideShipping()){
          return parent::getStepData($step, $data);
      } else {
          return false;
      }
    } else {
      return parent::getStepData($step, $data);
    }
  }

}
