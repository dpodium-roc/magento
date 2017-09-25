<?php
namespace Pipwave\Magento\Observer;
 
class Pipwave_Magento_Payment implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
       $displayText = $observer->getData('display');
       $displayText->setDisplay('Catch magento 2 event successfully!!!');
       return $this;
    }
}