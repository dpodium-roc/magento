<?php

namespace Local\Configuration\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
	protected $storeManager;
	protected $objectManager;
	
	const XML_PATH_LOCAL_CONFIGURATION_GENERAL='local_configuration/general/';
	
	public function __construct(Context $context,
		ObjectManagerInterface $objjectManager,
		StoreManagerInterface $storeManager
	){
		$this->objectManager=$objectManager;
		$this->storeManager=$storeManager;
		parent::__construct($context);
	}
	
	public function getConfigValue($field, $storeId=null)
	{
		//i dnot understand this line
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}
	
	public function getGeneralConfig($code, $storeId=null)
	{
		return $this->getConfigValue(
			self::XML_PATH_LOCAL_CONFIGURATION_GENERAL . $code, $storeId
		);
	}
	
	//dont knoow code below
	$helper = $this->objectManager->create('Mageplaza\HelloWorld\Helper\Data');
	echo $helper->getGeneralConfig('enable');
	echo $helper->getGeneralConfig('display_text');
	
	//or this
	$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
	echo $objectManager->get('Magento\Framework\App\Config\ScopeConfigInterface')->getValue('helloworld/general/display_text');
}



















