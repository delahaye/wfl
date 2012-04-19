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
 * Table tl_wfl_config
 */
$GLOBALS['TL_DCA']['tl_wfl_config'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_wfl'),
		'switchToEdit'                => true,
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 1,
			'panelLayout'             => 'search,limit'
		),
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl_config']['edit'],
				'href'                => 'table=tl_wfl',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'editheader' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl_config']['editheader'],
				'href'                => 'act=edit',
				'icon'                => 'header.gif',
				'button_callback'     => array('tl_wfl_config', 'editHeader'),
				'attributes'          => 'class="edit-header"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl_config']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl_config']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['tl_wfl_config']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl_config']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},title,typekit,monotype;{callbacks_legend:hide},loading,fontloading,fontactive,fontinactive,active,inactive'
	),


	// Fields
	'fields' => array
	(
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'typekit' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['typekit'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
		'monotype' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['monotype'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
		'loading' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['loading'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true,'style'=>'height:80px;')
		),
		'fontloading' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['fontloading'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true,'style'=>'height:80px;')
		),
		'fontactive' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['fontactive'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true,'style'=>'height:80px;')
		),
		'fontinactive' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['fontinactive'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true,'style'=>'height:80px;')
		),
		'active' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['active'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true,'style'=>'height:80px;')
		),
		'inactive' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl_config']['inactive'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('preserveTags'=>true,'style'=>'height:80px;')
		)
	)
);


/**
 * Class tl_wfl_config
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  de la Haye Kommunikationsdesign 2011
 * @author     Christian de la Haye <http://www.delahaye.de>
 * @package    wfl
 */
class tl_wfl_config extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}


	/**
	 * Return the edit header button
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @return string
	 */
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return ($this->User->isAdmin || count(preg_grep('/^tl_wfl_config::/', $this->User->alexf)) > 0) ? '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ' : '';
	}
}

?>