<?php
/**
 * Magento
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
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_SalesRule
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * @var $installer Mage_Core_Model_Resource_Setup
 */
$installer = $this;

$installer->getConnection()
    ->addColumn(
        $installer->getTable('salesrule_coupon'),
        'created_at',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
            'comment'  => 'Coupon Code Creation Date',
            'nullable' => false,
            'default'  => Varien_Db_Ddl_Table::TIMESTAMP_INIT
        )
    );

$installer->getConnection()->addColumn(
        $installer->getTable('salesrule_coupon'),
        'type',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_SMALLINT,
            'comment'  => 'Coupon Code Type',
            'default'  => 0
        )
    );

$installer->getConnection()
    ->addColumn(
        $installer->getTable('salesrule'),
        'use_auto_generation',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_SMALLINT,
            'comment'  => 'Use Auto Generation',
            'nullable' => false,
            'default'  => 0
        )
    );

$installer->getConnection()
    ->addColumn(
        $installer->getTable('salesrule'),
        'uses_per_coupon',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_INTEGER,
            'comment'  => 'Uses Per Coupon',
            'nullable' => false,
            'default'  => 0
        )
    );

$installer->getConnection()
    ->addColumn(
        $installer->getTable('coupon_aggregated'),
        'rule_name',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_TEXT,
            'length'   => 255,
            'comment'  => 'Rule Name',
        )
    );

$installer->getConnection()
    ->addColumn(
        $installer->getTable('coupon_aggregated_order'),
        'rule_name',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_TEXT,
            'length'   => 255,
            'comment'  => 'Rule Name',
        )
    );

$installer->getConnection()
    ->addColumn(
        $installer->getTable('coupon_aggregated_updated'),
        'rule_name',
        array(
            'type'     => Varien_Db_Ddl_Table::TYPE_TEXT,
            'length'   => 255,
            'comment'  => 'Rule Name',
        )
    );

$installer->getConnection()
    ->addIndex(
        $installer->getTable('coupon_aggregated'),
        $installer->getIdxName(
            'coupon_aggregated',
            array('rule_name'),
            Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX
        ),
        array('rule_name'),
        Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX
    );

$installer->getConnection()
    ->addIndex(
        $installer->getTable('coupon_aggregated_order'),
        $installer->getIdxName(
            'coupon_aggregated_order',
            array('rule_name'),
            Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX
        ),
        array('rule_name'),
        Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX
    );

$installer->getConnection()
    ->addIndex(
        $installer->getTable('coupon_aggregated_updated'),
        $installer->getIdxName(
            'coupon_aggregated_updated',
            array('rule_name'),
            Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX
        ),
        array('rule_name'),
        Varien_Db_Adapter_Interface::INDEX_TYPE_INDEX
    );
