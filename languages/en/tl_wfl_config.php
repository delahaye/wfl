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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_wfl_config']['title'] 			= array('Title (only used internally)', 'Please enter a title for the font collection.');
$GLOBALS['TL_LANG']['tl_wfl_config']['tstamp'] 			= array('Modified', 'Date and time of the last modification.');
$GLOBALS['TL_LANG']['tl_wfl_config']['typekit'] 		= array('Typekit ID', 'Enter a <a style="color:#000000;text-decoration:underline;" href="http://typekit.com" onclick="window.open(this.href); return false;">Typekit-ID</a>. If there is a Typekit-ID, no font definitions have to be added to the configuration. Attention: only one id per page is used.');
$GLOBALS['TL_LANG']['tl_wfl_config']['monotype'] 		= array('Monotype Project-ID', 'Enter a <a style="color:#000000;text-decoration:underline;" href="http://fonts.com" onclick="window.open(this.href); return false;">Monotype project-ID</a>. If there is a Monotype Projekt-ID angegeben ist, no font definitions have to be added to the configuration. Attention: only one id per page is used.');
$GLOBALS['TL_LANG']['tl_wfl_config']['loading'] 		= array('Event ´loading()´', 'Please enter Javascript code.');
$GLOBALS['TL_LANG']['tl_wfl_config']['fontloading'] 	= array('Event ´fontloading(fontFamily, fontDescription)´', 'Please enter Javascript code.');
$GLOBALS['TL_LANG']['tl_wfl_config']['fontactive'] 		= array('Event ´fontactive(fontFamily, fontDescription)´', 'Please enter Javascript code.');
$GLOBALS['TL_LANG']['tl_wfl_config']['fontinactive'] 	= array('Event ´fontinactive(fontFamily, fontDescription)´', 'Please enter Javascript code.');
$GLOBALS['TL_LANG']['tl_wfl_config']['active'] 			= array('Event ´active()´', 'Please enter Javascript code.');
$GLOBALS['TL_LANG']['tl_wfl_config']['inactive'] 		= array('Event ´inactive()´', 'Please enter Javascript code.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_wfl_config']['title_legend'] 		= 'Title and supplier IDs';
$GLOBALS['TL_LANG']['tl_wfl_config']['callbacks_legend'] 	= 'Javascript callbacks within the Google WebFont Loader';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_wfl_config']['new']        = array('New font collection', 'Add a new font collection');
$GLOBALS['TL_LANG']['tl_wfl_config']['show']       = array('Font collection details', 'Details of the font collection ID %s');
$GLOBALS['TL_LANG']['tl_wfl_config']['edit']       = array('Modify font collection', 'Modify font collection ID %s');
$GLOBALS['TL_LANG']['tl_wfl_config']['editheader'] = array('Edit font collection settings', 'Edit settings of the font collection ID %s');
$GLOBALS['TL_LANG']['tl_wfl_config']['copy']       = array('Duplicate font collection', 'Duplicate font collection ID %s');
$GLOBALS['TL_LANG']['tl_wfl_config']['delete']     = array('Delete font collection', 'Delete font collection ID %s');

?>