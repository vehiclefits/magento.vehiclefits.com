<?php
/**
 * Vehicle Fits
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Vehicle Fits to newer
 * versions in the future. If you wish to customize Vehicle Fits for your
 * needs please refer to http://www.vehiclefits.com for more information.

 * @copyright  Copyright (c) 2013 Vehicle Fits, llc
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
$db = Elite_Vaf_Helper_Data::getInstance()->getReadAdapter();
$db->query("ALTER TABLE `elite_note` CHANGE `id` `code` VARCHAR( 50 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ");
$db->query("ALTER TABLE elite_note DROP PRIMARY KEY ");
$db->query("ALTER TABLE `elite_note` ADD UNIQUE (`code`)");
$db->query("ALTER TABLE `elite_note` ADD `id` INT( 50 ) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST ");