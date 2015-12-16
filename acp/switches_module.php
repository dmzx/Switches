<?php
/**
*
* @package phpBB Extension - Switches
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\switches\acp;

class switches_module
{
var $u_action;

	function main($id, $mode)
	{
		global $config, $user, $template, $request;

		$this->tpl_name = 'acp_switches_config';
		$this->page_title = $user->lang['ACP_SWITCHES_SETTINGS'];
		add_form_key('acp_switches_config');

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('acp_switches_config'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('switches_enable', $request->variable('switches_enable', 0));
			$config->set('switches_enable_first', $request->variable('switches_enable_first', 0));
			$config->set('switches_name_field_first', $request->variable('switches_name_field_first', '', true));
			$config->set('switches_text_field_first', $request->variable('switches_text_field_first', '', true));
			$config->set('switches_enable_second', $request->variable('switches_enable_second', 0));
			$config->set('switches_name_field_second', $request->variable('switches_name_field_second', '', true));
			$config->set('switches_text_field_second', $request->variable('switches_text_field_second', '', true));
			$config->set('switches_enable_third', $request->variable('switches_enable_third', 0));
			$config->set('switches_name_field_third', $request->variable('switches_name_field_third', '', true));
			$config->set('switches_text_field_third', $request->variable('switches_text_field_third', '', true));

			trigger_error($user->lang['ACP_SWITCHES_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'ACP_SWITCHES_VERSION'			=> (isset($config['switches_version'])) ? $config['switches_version'] : '',
			'ACP_SWITCHES_ENABLE'			=> (!empty($config['switches_enable'])) ? true : false,
			'ACP_SWITCHES_ENABLE_FIRST'		=> (!empty($config['switches_enable_first'])) ? true : false,
			'SWITCHES_NAME_FIELD_FIRST'		=> (isset($config['switches_name_field_first'])) ? $config['switches_name_field_first'] : '',
			'SWITCHES_TEXT_FIELD_FIRST'		=> (isset($config['switches_text_field_first'])) ? $config['switches_text_field_first'] : '',
			'ACP_SWITCHES_ENABLE_SECOND'	=> (!empty($config['switches_enable_second'])) ? true : false,
			'SWITCHES_NAME_FIELD_SECOND'	=> (isset($config['switches_name_field_second'])) ? $config['switches_name_field_second'] : '',
			'SWITCHES_TEXT_FIELD_SECOND'	=> (isset($config['switches_text_field_second'])) ? $config['switches_text_field_second'] : '',
			'ACP_SWITCHES_ENABLE_THIRD'		=> (!empty($config['switches_enable_third'])) ? true : false,
			'SWITCHES_NAME_FIELD_THIRD'		=> (isset($config['switches_name_field_third'])) ? $config['switches_name_field_third'] : '',
			'SWITCHES_TEXT_FIELD_THIRD'		=> (isset($config['switches_text_field_third'])) ? $config['switches_text_field_third'] : '',
			'U_ACTION'						=> $this->u_action,
		));
	}
}
