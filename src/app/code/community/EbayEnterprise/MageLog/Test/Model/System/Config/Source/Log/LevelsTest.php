<?php
/**
 * Copyright (c) 2013-2014 eBay Enterprise, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright   Copyright (c) 2013-2014 eBay Enterprise, Inc. (http://www.ebayenterprise.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


class EbayEnterprise_MageLog_Test_Model_System_Config_Source_Log_LevelsTest extends EcomDev_PHPUnit_Test_Case
{
	protected $_levels;

	/**
	 * setUp method
	 */
	public function setUp()
	{
		parent::setUp();
		$this->_levels = $this->_getLevels();
	}

	protected function _getLevels()
	{
		if(!$this->_levels){
			$this->_levels = mage::getModel('ebayenterprise_magelog/system_config_source_log_levels');
		}
		return $this->_levels;
	}

	/**
	 * testing toOptionArray
	 *
	 */
	public function testToOptionArray()
	{
		$this->assertSame(
			[
				['value' => Zend_Log::EMERG, 'label' => 'EMERG'],
				['value' => Zend_Log::ALERT, 'label' => 'ALERT'],
				['value' => Zend_Log::CRIT, 'label' => 'CRIT'],
				['value' => Zend_Log::ERR, 'label' => 'ERR'],
				['value' => Zend_Log::WARN, 'label' => 'WARN'],
				['value' => Zend_Log::NOTICE, 'label' => 'NOTICE'],
				['value' => Zend_Log::INFO, 'label' => 'INFO'],
				['value' => Zend_Log::DEBUG, 'label' => 'DEBUG']
			],
			$this->_getLevels()->toOptionArray()
		);
	}
}
