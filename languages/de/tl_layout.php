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
 * References
 */
$GLOBALS['TL_LANG']['tl_layout']['wfl_legend'] = 'Webfontloader';
$GLOBALS['TL_LANG']['tl_layout']['wfloutput_options']['css_js']  = 'Google WebFont Loader plus CSS';
$GLOBALS['TL_LANG']['tl_layout']['wfloutput_options']['cssn_js'] = 'Google WebFont Loader plus CSS im noscript-Tag - validiert nicht';
$GLOBALS['TL_LANG']['tl_layout']['wfloutput_options']['css']     = 'Nur CSS';
$GLOBALS['TL_LANG']['tl_layout']['wfloutput_options']['js']      = 'Nur Google WebFont Loader - ohne JavaScript keine Fonts';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_layout']['wfl'] 		= array('Schriftsammlungen','Geben Sie an, welche Webfontloader-Schriftsammlungen verwendet werden sollen.');
$GLOBALS['TL_LANG']['tl_layout']['wfloutput'] 	= array('Font-Einbindung','Geben Sie an, wie die Fonts eingebunden werden sollen. <strong>Achtung:</strong> bei den Typen "Schriftdateien aus der Dateiverwaltung" und "Schriftdateien von externer URL" ist nur CSS möglich, bei Einbindung einer Typekit-ID oder Monotyoe Projekt-ID nur der Google WebFont Loader.');
$GLOBALS['TL_LANG']['tl_layout']['wflmedia'] 	= array('Medien mit Webfonts','Geben Sie an, für welche Medien @font-face-Stylesheets gelten sollen. <strong>Achtung:</strong> Gilt nur für die Typen "Schriftdateien aus der Dateiverwaltung" und "Schriftdateien von externer URL"');


?>