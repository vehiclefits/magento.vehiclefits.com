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

$query = "CREATE TABLE `elite_schema` (
`key` VARCHAR( 25 ) NOT NULL ,
`value` VARCHAR( 255 ) NOT NULL
) ENGINE = InnoDB;";
$db->query( $query );

$schema = new VF_Schema();
$levels = $schema->getLevels();
if(!count($levels))
{
    $levels = array( 'make', 'model', 'year' );
}
foreach($levels as $level)
{
    if(!trim($level))
    {
        $levels = array( 'make', 'model', 'year' );
    }
}
$db->insert( 'elite_schema', array('key'=>'levels','value'=>implode(',',$levels)) );