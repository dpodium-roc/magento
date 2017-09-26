<?php

//these two lines is a must to run below functions
	$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
	$cart = $objectManager->get('\Magento\Checkout\Model\Cart');

//get number of items in cart 
//i dont the meaning
	$totalItems = $cart->getQuote()->getItemsCount();

//get total quantity in cart
	$totalQuantity = $cart->getQuote()->getItemsQty();


///get quote items array
	$items = $cart->getQuote()->getAllItems();{
	foreach($items as $item){
		
		//later change echo to substitute into table
		
		//ID
		echo $item->getProductId();
		//Name
		echo $item->getName();
		//SKU
		echo $item->getSku();
		//quantity
		echo $item->getQty();
		//price
		echo $item->getPrice();
	}
	}

//get base total price 
//i dont get the meaning
	$subTotal = $cart->getQuote()->getSubtotal();

//get grand total price
//what is the difference?
	$grandtotal = $cart->getQuote()->getGrandTotal();

//get billing address
	$billingAddress = $cart->getQuote()->getBillingAddress();
		//output (not sure why echo and print_r)
		echo '<pre>';
		print_r($billingAddress->getData());
		echo '<pre>';

//get shipping address
	$shippingAddress = $cart->getQuote()->getshippingAddress();
		//output (not sure why echo and print_r)
		echo '<pre>';
		print_r($shippingAddress->getData());
		echo '<pre>';


























