<?php
if (!defined('ALLOWED_ACCESS')) exit('Direct access not allowed.');

$db_auth_host = '__DB_HOST__';
$db_auth_port = '3306';
$db_auth_user = '__DB_USER__';
$db_auth_pass = '__DB_PASS__';
$db_auth_name = 'acore_auth';

$db_world_host = '__DB_HOST__';
$db_world_port = '3306';
$db_world_user = '__DB_USER__';
$db_world_pass = '__DB_PASS__';
$db_world_name = 'acore_world';

$db_char_host = '__DB_HOST__';
$db_char_port = '3306';
$db_char_user = '__DB_USER__';
$db_char_pass = '__DB_PASS__';
$db_char_name = 'acore_characters';

$db_site_host = '__DB_HOST__';
$db_site_port = '3306';
$db_site_user = '__DB_USER__';
$db_site_pass = '__DB_PASS__';
$db_site_name = '__DB_SITE__';

$auth_db  = new mysqli($db_auth_host,  $db_auth_user,  $db_auth_pass,  $db_auth_name,  $db_auth_port);
$world_db = new mysqli($db_world_host, $db_world_user, $db_world_pass, $db_world_name, $db_world_port);
$char_db  = new mysqli($db_char_host,  $db_char_user,  $db_char_pass,  $db_char_name,  $db_char_port);
$site_db  = new mysqli($db_site_host,  $db_site_user,  $db_site_pass,  $db_site_name,  $db_site_port);

if ($auth_db->connect_error)  die('Auth DB Connection failed: '  . $auth_db->connect_error);
if ($world_db->connect_error) die('World DB Connection failed: ' . $world_db->connect_error);
if ($char_db->connect_error)  die('Char DB Connection failed: '  . $char_db->connect_error);
if ($site_db->connect_error)  die('Site DB Connection failed: '  . $site_db->connect_error);
?>
