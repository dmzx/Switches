<?php
/**
*
* @package phpBB Extension - Switches
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\switches\acp;

class switches_info
{
	function module()
	{
		return array(
			'filename'	=> '\dmzx\switches\acp\pmregbar_module',
			'title'		=> 'ACP_SWITCHES',
			'modes'		=> array(
			'config'	=> array('title' => 'ACP_SWITCHES_CONFIG_SETTINGS', 'auth' => 'ext_dmzx/switches && acl_a_board', 'cat' => array('ACP_SWITCHES')),
			),
		);
	}
}
