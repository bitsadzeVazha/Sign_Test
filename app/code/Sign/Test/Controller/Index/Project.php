<?php

namespace Sign\Test\Controller\Index;

class Project extends \Magento\Framework\App\Action\Action
{

	protected $helperInventory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Sign\Test\Helper\Inventory $helperInventory

	)
	{
		$this->helperInventory = $helperInventory;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.

		echo $this->helperInventory->makeACurlRequest();
		
		exit();

	}
}