<?php

/**
 * @copyright  Helmut Schottmüller 2010-2013
 * @author     Helmut Schottmüller <https://github.com/hschottm/tabindex>
 * @package    tabindex
 * @license    LGPL
 */

/**
 * Table tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['text'] = str_replace(';{submit_legend', ',tabindex;{submit_legend', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['text']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['password'] = str_replace(';{submit_legend', ',tabindex;{submit_legend', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['password']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['textarea'] = str_replace(';{submit_legend', ',tabindex;{submit_legend', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['textarea']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['select'] = str_replace(';{submit_legend', ',tabindex;{submit_legend', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['select']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['upload'] = str_replace(';{submit_legend', ',tabindex;{submit_legend', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['upload']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['submit'] .= ',tabindex';

$GLOBALS['TL_DCA']['tl_form_field']['fields']['tabindex'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['tabindex'],
	'exclude'                 => true,
	'search'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'rgxp'=>'digit', 'tl_class'=>'w50'),
	'sql'                     => "varchar(16) NOT NULL default ''"
);

?>