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
$GLOBALS['TL_LANG']['tl_layout']['wfloutput_options']['cssn_js'] = 'Google WebFont Loader plus CSS in noscript-tag - does not validate';
$GLOBALS['TL_LANG']['tl_layout']['wfloutput_options']['css']     = 'CSS only';
$GLOBALS['TL_LANG']['tl_layout']['wfloutput_options']['js']      = 'Google WebFont Loader only - no fonts without JavaScript';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_layout']['wfl'] 		= array('Font collections','Specify which webfontloader font collections are used in this layout.');
$GLOBALS['TL_LANG']['tl_layout']['wfloutput'] 	= array('Font referencing','Specify how the fonts are referenced. <strong>Attention:</strong> with the types "Font files from the file manager" and "Font files from external URL" only CSS is available, if you use a Typekit-ID or Monotype project-ID only the Google WebFont Loader is used.');
$GLOBALS['TL_LANG']['tl_layout']['wflmedia'] 	= array('Media with webfonts','Specify the media, for what @font-face-stylesheets are valid. <strong>Attention:</strong> This is only used for the types "Font files from the file manager" and "Font files from external URL"');


?>