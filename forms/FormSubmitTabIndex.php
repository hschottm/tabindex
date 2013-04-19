<?php

/**
 * @copyright  Helmut Schottmüller 2010-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/tabindex>
 * @package    tabindex
 * @license    LGPL
 */

namespace Contao;

/**
 * Class FormSubmitTabIndex
 *
 * Form field "submit".
 * @copyright  2010 Helmut Schottmüller 
 * @author     Helmut Schottmüller <contao@aurealis.de>
 * @package    Controller
 */
class FormSubmitTabIndex extends FormSubmit
{
	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{
		$result = parent::generate();
		if (strlen($this->tabindex))
		{
			$result = str_replace("<input", sprintf('<input tabindex="%s"', $this->tabindex), $result);
		}
		return $result;
	}
}

?>