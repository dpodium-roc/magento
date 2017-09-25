<?php
 namespace Pipwave\Magento\Controller\Index;
 
 class Index extends \Magento\Framework\App\Action\Action
 {
   public function execute()
   {
      $hello = new \Magento\Framework\DataObject(array('label' => Hello Magento 2));
      $this->_eventManager->dispatch('hello_magento_display', ['display' => $hello]);
      echo $hello->getDisplay();
      exit;
   }
 }