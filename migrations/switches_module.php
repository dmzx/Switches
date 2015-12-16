<?php
/**
*
* @package phpBB Extension - Switches
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\switches\migrations;

class switches_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_SWITCHES')),
			array('module.add', array(
			'acp', 'ACP_SWITCHES', array(
			'module_basename'	=> '\dmzx\switches\acp\switches_module', 'modes' => array('config'),
				),
			)),
		);
	}
}
