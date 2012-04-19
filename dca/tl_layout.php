<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  de la Haye Kommunikationsdesign 2011
 * @author     Christian de la Haye <http://www.delahaye.de>
 * @package    wfl
 * @license    LGPL
 * @filesource
 */


/**
 * Add palettes to tl_layout
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default']   = str_replace('{style_legend}','{wfl_legend},wfl,wfloutput,wflmedia;{style_legend}',$GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);


/**
 * Add fields to tl_layout
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['wfl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['wfl'],
	'exclude'                 => true,
	'inputType'               => 'checkboxWizard',
	'foreignKey'              => 'tl_wfl_config.title',
	'eval'                    => array('multiple'=>true, 'mandatory'=>false)
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['wfloutput'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['wfloutput'],
	'exclude'                 => true,
	'inputType'               => 'radio',
	'options'                 => array('css_js','cssn_js','css','js'),
	'default'                 => 'css_js',
	'reference'               => &$GLOBALS['TL_LANG']['tl_layout']['wfloutput_options'],
	'eval'                    => array('mandatory'=>true)
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['wflmedia'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['wflmedia'],
	'inputType'               => 'checkbox',
	'exclude'                 => true,
	'filter'                  => true,
	'options'                 => array('all', 'aural', 'braille', 'embossed', 'handheld', 'print', 'projection', 'screen', 'tty', 'tv'),
	'eval'                    => array('multiple'=>true, 'mandatory'=>true, 'tl_class'=>'clr')
);


?>