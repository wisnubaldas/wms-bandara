<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection(
	[
		'driver'    => 'mysql',
		'read' => [
			'host' => '10.1.1.103',
			'username'  => 'hera',
			'password'  => 'DrHe@DiAr75',
			'database'  => 'tpsonline_mau',
		],
		'write' => [
			'host' => '10.1.1.102',
			'username'  => 'hera',
			'password'  => 'DrHe@DiAr75',
			'database'  => 'tpsonline_mau',
		],
		'charset'   => 'utf8',
		'collation' => 'utf8_general_ci',
		'prefix'    => '',
	],'tpsonline_mau'
);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$active_group = 'tpsonline_mau';
$query_builder = TRUE;


$db['tpsonline_mau'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'tpsonline_mau',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['tpsonline_mau_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'tpsonline_mau',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['tpsonline_master_bc'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'tpsonline_master_bc',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);


$active_group = 'TPS';
$query_builder = TRUE;

$db['TPS'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'tpsonline_mau',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['TPS_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'tpsonline_mau',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdlogin'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdlogin',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdlogin_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdlogin',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdwarehouse_jkt'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdwarehouse_jkt',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdwarehouse_jkt_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdwarehouse_jkt',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdwarehouse_bdo'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdwarehouse_bdo',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdwarehouse_bdo_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdwarehouse_bdo',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdwarehouse_aap'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdwarehouse_aap',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdwarehouse_aap_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdwarehouse_aap',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdinterchangemessage'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdinterchangemessage',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['rdinterchangemessage_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'rdinterchangemessage',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['db_tpsonline'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'db_tpsonline',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['db_tpsonline_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'hera',
	'password' => 'DrHe@DiAr75',
	'database' => 'db_tpsonline',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

// backup schema

$db['backup_tpsonline_mau'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'backup_user',
	'password' => 'Cy_u?j(Cm8F-vfpQ',
	'database' => 'backup_tpsonline_mau',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['backup_tpsonline_mau_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'backup_user',
	'password' => 'Cy_u?j(Cm8F-vfpQ',
	'database' => 'backup_tpsonline_mau',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['backup_rdwarehouse_jkt'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.102',
	'username' => 'backup_user',
	'password' => 'Cy_u?j(Cm8F-vfpQ',
	'database' => 'backup_warehouse_jkt',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['backup_rdwarehouse_jkt_read'] = array(
	'dsn'	=> '',
	'hostname' => '10.1.1.103',
	'username' => 'backup_user',
	'password' => 'Cy_u?j(Cm8F-vfpQ',
	'database' => 'backup_warehouse_jkt',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

