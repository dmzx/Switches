<?php
/**
*
* @package phpBB Extension - Switches
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_SWITCHES'						=> 'Switches',
	'ACP_SWITCHES_SETTINGS'				=> 'Switches settings',
	'ACP_SWITCHES_CONFIG_SETTINGS'		=> 'Settings',
	'ACP_SWITCHES_CONFIG_SET'			=> 'Configuration',
	'ACP_SWITCHES_CONFIG_SAVED'			=> 'Switches settings saved',
	'ACP_SWITCHES_VERSION'				=> 'Version',
	'ACP_SWITCHES_CREDITS'				=> 'Extension made by <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'ACP_SWITCHES_ENABLE'				=> 'Enable switch',
	'ACP_SWITCHES_ENABLE_EXPLAIN'				=> 'Use <em>IF SWITCHES_ENABLE</em>',
	'ACP_SWITCHES_ENABLE_FIRST'					=> 'Enable first switch',
	'ACP_SWITCHES_ENABLE_FIRST_EXPLAIN'			=> 'Use <em>IF SWITCHES_ENABLE_FIRST</em>',
	'ACP_SWITCHES_NAME_FIELD_FIRST'				=> 'Name field',
	'ACP_SWITCHES_NAME_FIELD_FIRST_EXPLAIN'		=> 'Use <em>SWITCHES_NAME_FIELD_FIRST</em>',
	'ACP_SWITCHES_TEXT_FIELD_FIRST'				=> 'Name field',
	'ACP_SWITCHES_TEXT_FIELD_FIRST_EXPLAIN'		=> 'Use <em>SWITCHES_TEXT_FIELD_FIRST</em>',
	'ACP_SWITCHES_ENABLE_SECOND'				=> 'Enable second switch',
	'ACP_SWITCHES_ENABLE_SECOND_EXPLAIN'		=> 'Use <em>IF SWITCHES_ENABLE_SECOND</em>',
	'ACP_SWITCHES_NAME_FIELD_SECOND'			=> 'Name field',
	'ACP_SWITCHES_NAME_FIELD_SECOND_EXPLAIN'	=> 'Use <em>SWITCHES_NAME_FIELD_SECOND</em>',
	'ACP_SWITCHES_TEXT_FIELD_SECOND'			=> 'Name field',
	'ACP_SWITCHES_TEXT_FIELD_SECOND_EXPLAIN'	=> 'Use <em>SWITCHES_TEXT_FIELD_SECOND</em>',
	'ACP_SWITCHES_ENABLE_THIRD'					=> 'Enable switch',
	'ACP_SWITCHES_ENABLE_THIRD_EXPLAIN'			=> 'Use <em>IF SWITCHES_ENABLE_THIRD</em>',
	'ACP_SWITCHES_NAME_FIELD_THIRD'				=> 'Name field',
	'ACP_SWITCHES_NAME_FIELD_THIRD_EXPLAIN'		=> 'Use <em>SWITCHES_NAME_FIELD_THIRD</em>',
	'ACP_SWITCHES_TEXT_FIELD_THIRD'				=> 'Name field',
	'ACP_SWITCHES_TEXT_FIELD_THIRD_EXPLAIN'		=> 'Use <em>SWITCHES_TEXT_FIELD_THIRD</em>',
));
