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
$GLOBALS['TL_LANG']['tl_wfl']['title'] 			= array('Title', 'Title of the font definition (only used internally).');
$GLOBALS['TL_LANG']['tl_wfl']['type'] 			= array('Font supplier', 'Download source of the fonts, e. g. <a style="color:#000000;text-decoration:underline;" href="http://www.google.com/webfonts" onclick="window.open(this.href); return false;">Google</a>, <a style="color:#000000;text-decoration:underline;" href="http://www.fontsquirrel.com" onclick="window.open(this.href); return false;">Fontsquirrel</a>');
$GLOBALS['TL_LANG']['tl_wfl']['families'] 		= array('Font families', 'Names of the font families');
$GLOBALS['TL_LANG']['tl_wfl']['urls'] 			= array('Urls', 'CSS urls');
$GLOBALS['TL_LANG']['tl_wfl']['multiSRC'] 		= array('CSS files', 'Select the css files containing the @font-face settings.');
$GLOBALS['TL_LANG']['tl_wfl']['published'] 		= array('Published', 'The font definition is published.');
$GLOBALS['TL_LANG']['tl_wfl']['url'] 			= array('Url of the Fontsquirrel kit', 'Enter only the URL of the download, which is linked by "get Kit" at the Fontsquirrel font. Further changes cause a repeated download!');
$GLOBALS['TL_LANG']['tl_wfl']['kitfamilies'] 	= array('Fonts in the kit', 'Do not change manually! The field only shows the available fonts for copy and paste.');
$GLOBALS['TL_LANG']['tl_wfl']['family'] 		= array('Name of the font', 'Enter the official name of the font family.');
$GLOBALS['TL_LANG']['tl_wfl']['eot'] 			= array('.eot file', 'Local .eot font file');
$GLOBALS['TL_LANG']['tl_wfl']['woff'] 			= array('.woff file', 'Local .woff font file');
$GLOBALS['TL_LANG']['tl_wfl']['ttf'] 			= array('.ttf file', 'Local .ttf font file');
$GLOBALS['TL_LANG']['tl_wfl']['svg'] 			= array('.svg file', 'Local .svg font file');
$GLOBALS['TL_LANG']['tl_wfl']['eoturl'] 		= array('.eot file', 'Url of the .eot font file');
$GLOBALS['TL_LANG']['tl_wfl']['woffurl'] 		= array('.woff file', 'Url of the  .woff font file');
$GLOBALS['TL_LANG']['tl_wfl']['ttfurl'] 		= array('.ttf file', 'Url of the .ttf font file');
$GLOBALS['TL_LANG']['tl_wfl']['svgurl'] 		= array('.svg file', 'Url of the .svg font file');
$GLOBALS['TL_LANG']['tl_wfl']['svgkey'] 		= array('SVG key', 'If there is a SVG key, enter it here.');
$GLOBALS['TL_LANG']['tl_wfl']['weight']			= array('Font weight', 'Enter a font weight.');
$GLOBALS['TL_LANG']['tl_wfl']['style']			= array('Font style', 'Enter a font style.');
$GLOBALS['TL_LANG']['tl_wfl']['snippet']		= array('Code snippet', 'Enter the code snippet provided by the font supplier.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_wfl']['title_legend'] 	= 'Title';
$GLOBALS['TL_LANG']['tl_wfl']['publish_legend'] = 'Publishing';
$GLOBALS['TL_LANG']['tl_wfl']['config_legend'] 	= 'Configuration';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_wfl']['types']['GOOGLE'] 		= 'Google Webfonts';
$GLOBALS['TL_LANG']['tl_wfl']['types']['TYPEKIT'] 		= 'Typekit';
$GLOBALS['TL_LANG']['tl_wfl']['types']['SQUIRREL'] 		= 'Fontsquirrel @Fontface Kit';
$GLOBALS['TL_LANG']['tl_wfl']['types']['CUSTOMCSS']		= 'CSS files with @font-face from external URL';
$GLOBALS['TL_LANG']['tl_wfl']['types']['CUSTOMFILES'] 	= 'Font files from external URL';
$GLOBALS['TL_LANG']['tl_wfl']['types']['OWNFILES'] 		= 'Font files from the file manager';
$GLOBALS['TL_LANG']['tl_wfl']['types']['OWNCSS']   		= 'CSS files with @font-face from the file manager';
$GLOBALS['TL_LANG']['tl_wfl']['types']['SNIPPET']   	= 'Provided code snippet';

$GLOBALS['TL_LANG']['tl_wfl']['styles']['normal'] 	= 'Normal';
$GLOBALS['TL_LANG']['tl_wfl']['styles']['italic'] 	= 'Italic';
$GLOBALS['TL_LANG']['tl_wfl']['styles']['oblique'] 	= 'Oblique';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['normal'] 	= 'Normal';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['bold'] 	= 'Bold';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['lighter']	= 'Lighter';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['bolder'] 	= 'Extra bold';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['100'] 	= '100 (extra light)';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['200'] 	= '200 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['300'] 	= '300 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['400'] 	= '400 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['500'] 	= '500 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['600'] 	= '600 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['700'] 	= '700 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['800'] 	= '800 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['900'] 	= '900 (extra bold)';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_wfl']['new']        = array('Neuer Konfigurationseintrag', 'Einen neuen Konfigurationseintrag erstellen');
$GLOBALS['TL_LANG']['tl_wfl']['show']       = array('Konfigurationseintragsetails', 'Details des Konfigurationseintrags ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_wfl']['edit']       = array('Konfigurationseintrag bearbeiten', 'Konfigurationseintrag ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_wfl']['copy']       = array('Konfigurationseintrag duplizieren', 'Konfigurationseintrag ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_wfl']['cut']        = array('Konfigurationseintrag verschieben', 'Konfigurationseintrag ID %s verschieben');
$GLOBALS['TL_LANG']['tl_wfl']['delete']     = array('Konfigurationseintrag löschen', 'Konfigurationseintrag ID %s löschen');
$GLOBALS['TL_LANG']['tl_wfl']['toggle']     = array('Konfigurationseintrag veröffentlichen/unveröffentlichen', 'Konfigurationseintrag ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_wfl']['editheader'] = array('Konfigurationseintrag bearbeiten', 'Die Konfigurationseintrag-Einstellungen bearbeiten');
$GLOBALS['TL_LANG']['tl_wfl']['pasteafter'] = array('Oben einfügen', 'Nach dem Konfigurationseintrag ID %s einfügen');
$GLOBALS['TL_LANG']['tl_wfl']['pastenew']   = array('Neuen Konfigurationseintrag oben erstellen', 'Neues Element nach dem Konfigurationseintrag ID %s erstellen');

?>