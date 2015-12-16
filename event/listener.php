<?php
/**
*
* @package phpBB Extension - Switches
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\switches\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/**
	* Constructor
	*
	* @param \phpbb\template\template			$template
	* @param \phpbb\config\config				$config
	*
	*/
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->template = $template;
		$this->config = $config;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'	=> 'add_page_header_link',
		);
	}

	public function add_page_header_link($event)
	{
		$this->template->assign_vars(array(
			'SWITCHES_ENABLE'				=> $this->config['switches_enable'] ? true : false,
			'SWITCHES_ENABLE_FIRST'			=> $this->config['switches_enable_first'] ? true : false,
			'SWITCHES_NAME_FIELD_FIRST'		=> (isset($this->config['switches_name_field_first'])) ? $this->config['switches_name_field_first'] : '',
			'SWITCHES_TEXT_FIELD_FIRST'		=> (isset($this->config['switches_text_field_first'])) ? $this->config['switches_text_field_first'] : '',
			'SWITCHES_ENABLE_SECOND'		=> $this->config['switches_enable_second'] ? true : false,
			'SWITCHES_NAME_FIELD_SECOND'	=> (isset($this->config['switches_name_field_second'])) ? $this->config['switches_name_field_second'] : '',
			'SWITCHES_TEXT_FIELD_SECOND'	=> (isset($this->config['switches_text_field_second'])) ? $this->config['switches_text_field_second'] : '',
			'SWITCHES_ENABLE_THIRD'			=> $this->config['switches_enable_third'] ? true : false,
			'SWITCHES_NAME_FIELD_THIRD'		=> (isset($this->config['switches_name_field_third'])) ? $this->config['switches_name_field_third'] : '',
			'SWITCHES_TEXT_FIELD_THIRD'		=> (isset($this->config['switches_text_field_third'])) ? $this->config['switches_text_field_third'] : '',
		));
	}
}
