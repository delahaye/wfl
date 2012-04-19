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
$GLOBALS['TL_LANG']['tl_wfl_config']['title'] 			= array('Titel (nur für die Auswahl verwendet)', 'Bitte geben Sie den Titel der Schriftsammlung ein.');
$GLOBALS['TL_LANG']['tl_wfl_config']['tstamp'] 			= array('Änderungsdatum', 'Datum und Uhrzeit der letzten Änderung');
$GLOBALS['TL_LANG']['tl_wfl_config']['typekit'] 		= array('Typekit ID, wenn vorhanden', 'Geben sie eine <a style="color:#000000;text-decoration:underline;" href="http://typekit.com" onclick="window.open(this.href); return false;">Typekit-ID</a> ein. Wenn eine Typekit-ID angegeben ist, brauchen keine Abschnitte für die entsprechenden Fonts angelegt zu werden. Hinweis: Es kann immer nur die erste gefundene ID pro Seite berücksichtigt werden.');
$GLOBALS['TL_LANG']['tl_wfl_config']['monotype'] 		= array('Monotype Projekt-ID, wenn vorhanden', 'Geben sie eine <a style="color:#000000;text-decoration:underline;" href="http://fonts.com" onclick="window.open(this.href); return false;">Monotype Projekt-ID</a> ein. Wenn eine Monotype Projekt-ID angegeben ist, brauchen keine Abschnitte für die entsprechenden Fonts angelegt zu werden. Hinweis: Es kann immer nur die erste gefundene ID pro Seite berücksichtigt werden.');
$GLOBALS['TL_LANG']['tl_wfl_config']['loading'] 		= array('Event ´loading()´', 'Bitte Javascript-Code eingeben.');
$GLOBALS['TL_LANG']['tl_wfl_config']['fontloading'] 	= array('Event ´fontloading(fontFamily, fontDescription)´', 'Bitte Javascript-Code eingeben.');
$GLOBALS['TL_LANG']['tl_wfl_config']['fontactive'] 		= array('Event ´fontactive(fontFamily, fontDescription)´', 'Bitte Javascript-Code eingeben.');
$GLOBALS['TL_LANG']['tl_wfl_config']['fontinactive'] 	= array('Event ´fontinactive(fontFamily, fontDescription)´', 'Bitte Javascript-Code eingeben.');
$GLOBALS['TL_LANG']['tl_wfl_config']['active'] 			= array('Event ´active()´', 'Bitte Javascript-Code eingeben.');
$GLOBALS['TL_LANG']['tl_wfl_config']['inactive'] 		= array('Event ´inactive()´', 'Bitte Javascript-Code eingeben.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_wfl_config']['title_legend'] 		= 'Titel und Anbieter-IDs';
$GLOBALS['TL_LANG']['tl_wfl_config']['callbacks_legend'] 	= 'Javascript-Callbacks innerhalb von Google WebFont Loader';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_wfl_config']['new']        = array('Neue Schriftsammlung', 'Eine neue Sammlung von Schrift-Definitionen anlegen');
$GLOBALS['TL_LANG']['tl_wfl_config']['show']       = array('Details der Schriftsammlung', 'Details der Schriftsammlung ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_wfl_config']['edit']       = array('Schriftsammlung bearbeiten', 'Schriftsammlung ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_wfl_config']['editheader'] = array('Einstellungen der Schriftsammlung bearbeiten', 'Einstellungen der Schriftsammlung ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_wfl_config']['copy']       = array('Schriftsammlung duplizieren', 'Schriftsammlung ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_wfl_config']['delete']     = array('Schriftsammlung löschen', 'Schriftsammlung ID %s löschen');

?>