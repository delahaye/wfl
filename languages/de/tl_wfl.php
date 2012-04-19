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
$GLOBALS['TL_LANG']['tl_wfl']['title'] 			= array('Titel', 'Titel der Schrift-Definition (nur intern genutzt).');
$GLOBALS['TL_LANG']['tl_wfl']['type'] 			= array('Font-Anbieter', 'Herkunft der Fonts, z. B. <a style="color:#000000;text-decoration:underline;" href="http://www.google.com/webfonts" onclick="window.open(this.href); return false;">Google</a>, <a style="color:#000000;text-decoration:underline;" href="http://www.fontsquirrel.com" onclick="window.open(this.href); return false;">Fontsquirrel</a>');
$GLOBALS['TL_LANG']['tl_wfl']['families'] 		= array('Schriftfamilien', 'Namen der Schriftfamilien');
$GLOBALS['TL_LANG']['tl_wfl']['urls'] 			= array('Urls', 'CSS-Urls');
$GLOBALS['TL_LANG']['tl_wfl']['multiSRC'] 		= array('CSS-Dateien', 'Wählen Sie die CSS-Dateien mit den @font-face-Angaben aus.');
$GLOBALS['TL_LANG']['tl_wfl']['published'] 		= array('Veröffentlicht', 'Schrift-Definition ist veröffentlicht.');
$GLOBALS['TL_LANG']['tl_wfl']['url'] 			= array('Url des Fontsquirrel-Kits', 'Hier nur die Url des Downloads eintragen, die bei der Fontsquirrel-Schriftart mit "get Kit" verlinkt ist. Nachträgliche Veränderung führt zum erneuten Download-Versuch!');
$GLOBALS['TL_LANG']['tl_wfl']['kitfamilies'] 	= array('Im Kit vorhandene Schriften', 'Nicht manuell verändern! Das Feld zeigt nur die vorhandenen Schriften zum rauskopieren an.');
$GLOBALS['TL_LANG']['tl_wfl']['family'] 		= array('Name der Schrift', 'Geben Sie den offiziellen Namen der Schriftfamilie an.');
$GLOBALS['TL_LANG']['tl_wfl']['eot'] 			= array('.eot-Datei', 'Lokale .eot-Schriftdatei');
$GLOBALS['TL_LANG']['tl_wfl']['woff'] 			= array('.woff-Datei', 'Lokale .woff-Schriftdatei');
$GLOBALS['TL_LANG']['tl_wfl']['ttf'] 			= array('.ttf-Datei', 'Lokale .ttf-Schriftdatei');
$GLOBALS['TL_LANG']['tl_wfl']['svg'] 			= array('.svg-Datei', 'Lokale .svg-Schriftdatei');
$GLOBALS['TL_LANG']['tl_wfl']['eoturl'] 		= array('.eot-Datei', 'Url der .eot-Schriftdatei');
$GLOBALS['TL_LANG']['tl_wfl']['woffurl'] 		= array('.woff-Datei', 'Url der  .woff-Schriftdatei');
$GLOBALS['TL_LANG']['tl_wfl']['ttfurl'] 		= array('.ttf-Datei', 'Url der .ttf-Schriftdatei');
$GLOBALS['TL_LANG']['tl_wfl']['svgurl'] 		= array('.svg-Datei', 'Url der .svg-Schriftdatei');
$GLOBALS['TL_LANG']['tl_wfl']['svgkey'] 		= array('SVG-Key, wenn vorhanden', 'Wenn ein SVG-Key vorhanden ist, tragen Sie ihn hier ein.');
$GLOBALS['TL_LANG']['tl_wfl']['weight']			= array('Schrift-Gewicht', 'Geben Sie ein Schrift-Gewicht an.');
$GLOBALS['TL_LANG']['tl_wfl']['style']			= array('Schrift-Stil', 'Geben Sie einen Schrift-Stil an.');
$GLOBALS['TL_LANG']['tl_wfl']['snippet']		= array('Code-Schnipsel', 'Geben Sie den vom Fontanbieter gelieferten Code ein.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_wfl']['title_legend'] 	= 'Titel';
$GLOBALS['TL_LANG']['tl_wfl']['publish_legend'] = 'Veröffentlichung';
$GLOBALS['TL_LANG']['tl_wfl']['config_legend'] 	= 'Konfiguration';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_wfl']['types']['GOOGLE'] 		= 'Google Webfonts';
$GLOBALS['TL_LANG']['tl_wfl']['types']['TYPEKIT'] 		= 'Typekit';
$GLOBALS['TL_LANG']['tl_wfl']['types']['SQUIRREL'] 		= 'Fontsquirrel @Fontface Kit';
$GLOBALS['TL_LANG']['tl_wfl']['types']['CUSTOMCSS']		= 'CSS-Dateien mit @font-face von externer URL';
$GLOBALS['TL_LANG']['tl_wfl']['types']['CUSTOMFILES'] 	= 'Schriftdateien von externer URL';
$GLOBALS['TL_LANG']['tl_wfl']['types']['OWNFILES'] 		= 'Schriftdateien aus der Dateiverwaltung';
$GLOBALS['TL_LANG']['tl_wfl']['types']['OWNCSS']   		= 'CSS-Dateien mit @font-face aus der Dateiverwaltung';
$GLOBALS['TL_LANG']['tl_wfl']['types']['SNIPPET']   	= 'Fertig gelieferte Code-Schnipsel';

$GLOBALS['TL_LANG']['tl_wfl']['styles']['normal'] 	= 'Normal';
$GLOBALS['TL_LANG']['tl_wfl']['styles']['italic'] 	= 'Kursiv';
$GLOBALS['TL_LANG']['tl_wfl']['styles']['oblique'] 	= 'Schräggestellt';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['normal'] 	= 'Normal';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['bold'] 	= 'Fett';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['lighter']	= 'Dünner';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['bolder'] 	= 'Extra fett';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['100'] 	= '100 (extra dünn)';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['200'] 	= '200 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['300'] 	= '300 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['400'] 	= '400 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['500'] 	= '500 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['600'] 	= '600 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['700'] 	= '700 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['800'] 	= '800 ...';
$GLOBALS['TL_LANG']['tl_wfl']['weights']['900'] 	= '900 (extra fett)';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_wfl']['new']        = array('Neue Schrift-Definition', 'Eine neue Schrift-Definition erstellen');
$GLOBALS['TL_LANG']['tl_wfl']['show']       = array('Details der Schrift-Definition', 'Details der Schrift-Definition ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_wfl']['edit']       = array('Schrift-Definition bearbeiten', 'Schrift-Definition ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_wfl']['copy']       = array('Schrift-Definition duplizieren', 'Schrift-Definition ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_wfl']['cut']        = array('Schrift-Definition verschieben', 'Schrift-Definition ID %s verschieben');
$GLOBALS['TL_LANG']['tl_wfl']['delete']     = array('Schrift-Definition löschen', 'Schrift-Definition ID %s löschen');
$GLOBALS['TL_LANG']['tl_wfl']['toggle']     = array('Schrift-Definition veröffentlichen/unveröffentlichen', 'Schrift-Definition ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_wfl']['editheader'] = array('Schriftsammlung bearbeiten', 'Die Einstellungen der Schriftsammlung bearbeiten');
$GLOBALS['TL_LANG']['tl_wfl']['pasteafter'] = array('Oben einfügen', 'Nach dem Konfigurationseintrag ID %s einfügen');
$GLOBALS['TL_LANG']['tl_wfl']['pastenew']   = array('Neue Schrift-Definition oben erstellen', 'Neues Element nach dem Konfigurationseintrag ID %s erstellen');

?>