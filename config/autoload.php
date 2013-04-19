<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Tabindex
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Forms
	'Contao\FormFileUploadTabIndex' => 'system/modules/tabindex/forms/FormFileUploadTabIndex.php',
	'Contao\FormPasswordTabIndex'   => 'system/modules/tabindex/forms/FormPasswordTabIndex.php',
	'Contao\FormSelectMenuTabIndex' => 'system/modules/tabindex/forms/FormSelectMenuTabIndex.php',
	'Contao\FormSubmitTabIndex'     => 'system/modules/tabindex/forms/FormSubmitTabIndex.php',
	'Contao\FormTextAreaTabIndex'   => 'system/modules/tabindex/forms/FormTextAreaTabIndex.php',
	'Contao\FormTextFieldTabIndex'  => 'system/modules/tabindex/forms/FormTextFieldTabIndex.php',
));
