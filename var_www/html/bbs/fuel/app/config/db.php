<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Global database settings
 * -----------------------------------------------------------------------------
 *
 *  Set database configurations here to override environment specific
 *  configurations
 *
 */

return array(

'development' => array(
    'type'           => 'pdo',
    'connection'     => array(
        'dsn'            => 'mysql:host=mysql;dbname=fuel_db',
        'username'       => 'root',
        'password'       => 'fuel_db_password',
        'persistent'     => false,
        'compress'       => false,
    ),
    'identifier'     => '`',
    'table_prefix'   => '',
    'charset'        => 'utf8',
    'enable_cache'   => true,
    'profiling'      => false,
    'readonly'       => false,
),


'development' => array(
    'type'           => 'pdo',
    'connection'     => array(
        'dsn'            => 'mysql:host=mysql;dbname=fuel_db',
        'username'       => 'root',
        'password'       => 'fuel_db_password',
        'persistent'     => false,
        'compress'       => false,
    ),
    'identifier'     => '`',
    'table_prefix'   => '',
    'charset'        => 'utf8',
    'enable_cache'   => true,
    'profiling'      => false,
    'readonly'       => false,
),
);

