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
 * Table tl_wfl
 */
$GLOBALS['TL_DCA']['tl_wfl'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_wfl_config',
		'enableVersioning'            => true,
		'onsubmit_callback'           => array(
			array('tl_wfl','getSquirrel')
			)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('sorting'),
			'panelLayout'             => 'filter;sort,search,limit',
			'headerFields'            => array('title', 'typekit', 'monotype'),
			'child_record_callback'   => array('tl_wfl', 'listWflEntries')
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
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl']['copy'],
				'href'                => 'act=paste&amp;mode=copy',
				'icon'                => 'copy.gif'
			),
			'cut' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl']['cut'],
				'href'                => 'act=paste&amp;mode=cut',
				'icon'                => 'cut.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
				'button_callback'     => array('tl_wfl', 'toggleIcon')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_wfl']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'            => array('type'),
		'default'                 => '{title_legend},title;{config_legend},type;{publish_legend},published',

		'GOOGLE'                  => '{title_legend},title;{config_legend},type,families;{publish_legend},published',
		'SQUIRREL'                => '{title_legend},title;{config_legend},type,url,kitfamilies;{publish_legend},published',
		'OWNCSS'                  => '{title_legend},title;{config_legend},type,families,multiSRC;{publish_legend},published',
		'CUSTOMCSS'               => '{title_legend},title;{config_legend},type,families,urls;{publish_legend},published',
		'OWNFILES'                => '{title_legend},title;{config_legend},type,family,eot,woff,ttf,svg,svgkey,weight,style;{publish_legend},published',
		'CUSTOMFILES'             => '{title_legend},title;{config_legend},type,family,eoturl,woffurl,ttfurl,svgurl,svgkey,weight,style;{publish_legend},published',
		'SNIPPET'                 => '{title_legend},title;{config_legend},type,snippet;{publish_legend},published'
	),

	// Fields
	'fields' => array
	(
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 2,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['type'],
			'exclude'                 => true,
			'filter'                  => true,
			'sorting'                 => true,
			'flag'                    => 2,
			'inputType'               => 'select',
			'options'                 => array('GOOGLE','SQUIRREL','OWNCSS','CUSTOMCSS','OWNFILES','CUSTOMFILES','SNIPPET'),
			'default'                 => '',
			'reference'               => &$GLOBALS['TL_LANG']['tl_wfl']['types'],
			'eval'                    => array('includeBlankOption'=>true, 'mandatory'=>true, 'submitOnChange'=>true)
		),
		'families' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['families'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'listWizard',
			'eval'                    => array('mandatory'=>true, 'class'=>'nowizard')
		),
		'urls' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['urls'],
			'exclude'                 => true,
			'inputType'               => 'listWizard',
			'eval'                    => array('mandatory'=>true, 'class'=>'nowizard')
		),
		'multiSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['multiSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('extensions'=>'css', 'files'=>true, 'filesOnly'=>true, 'fieldType'=>'checkbox', 'multiple'=>true)
		),
		'url' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['url'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'long')
		),
		'kitfamilies' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['kitfamilies'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('style'=>'height:80px;width:100%;" readonly="readonly' ),
		),
		'family' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['family'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'eot' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['eot'],
			'inputType'               => 'fileTree',
			'eval'                    => array('extensions'=>'eot', 'files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio')
		),
		'woff' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['woff'],
			'inputType'               => 'fileTree',
			'eval'                    => array('extensions'=>'woff', 'files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio')
		),
		'ttf' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['ttf'],
			'inputType'               => 'fileTree',
			'eval'                    => array('extensions'=>'ttf', 'files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio')
		),
		'svg' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['svg'],
			'inputType'               => 'fileTree',
			'eval'                    => array('extensions'=>'svg', 'files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio')
		),
		'eoturl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['eoturl'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'long')
		),
		'woffurl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['woffurl'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'long')
		),
		'ttfurl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['ttfurl'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'long')
		),
		'svgurl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['svgurl'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'long')
		),
		'svgkey' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['svgkey'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>32)
		),
		'weight' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['weight'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('lighter','normal','bold','bolder','100','200','300','400','500','600','700','800','900'),
			'default'                 => 'normal',
			'reference'               => &$GLOBALS['TL_LANG']['tl_wfl']['weights'],
			'eval'                    => array('mandatory'=>true)
		),
		'style' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['style'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('normal','italic','oblique'),
			'default'                 => 'normal',
			'reference'               => &$GLOBALS['TL_LANG']['tl_wfl']['styles'],
			'eval'                    => array('mandatory'=>true)
		),
		'snippet' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['snippet'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'codeMirror|html'),
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_wfl']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true)
		),
		'sorting' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['sorting'],
			'sorting'                 => true,
			'flag'                    => 2,
		)
	)
);


/**
 * Class tl_wfl
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  de la Haye Kommunikationsdesign 2011
 * @author     Christian de la Haye <http://www.delahaye.de>
 * @package    wfl
 */
class tl_wfl extends Backend
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
	 * Add the type of input field
	 * @param array
	 * @return string
	 */
	public function listWflEntries($arrRow)
	{
		$key = $arrRow['published'] ? 'published' : 'unpublished';
		$date = $this->parseDate($GLOBALS['TL_CONFIG']['datimFormat'], $arrRow['tstamp']);

		if ($arrRow['type'] == 'GOOGLE')
		{
			$families = implode('<br />- ',deserialize($arrRow['families']));
		}
		elseif ($arrRow['type'] == 'SQUIRREL')
		{
			$families = implode('<br />- ',explode(chr(10),$arrRow['kitfamilies']));
		}
		else
		{
			$families = false;
		}

		return '
<div class="cte_type ' . $key . '"><strong>' . $arrRow['title'] . '</strong> - ' . $date . '</div>
<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h52' : '') . ' block">
'.$GLOBALS['TL_LANG']['tl_wfl']['type'][0].': '.$GLOBALS['TL_LANG']['tl_wfl']['types'][$arrRow['type']].'<br />
'.($families ? $GLOBALS['TL_LANG']['tl_wfl']['families'][0].':<br />- '.$families : '').'
</div>' . "\n";
	}


	/**
	 * Return the "toggle visibility" button
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen($this->Input->get('tid')))
		{
			$this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
			$this->redirect($this->getReferer());
		}

		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_wfl::published', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

		if (!$row['published'])
		{
			$icon = 'invisible.gif';
		}		

		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}


	/**
	 * Disable/enable a user group
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($intId, $blnVisible)
	{
		// Check permissions to publish
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_wfl::published', 'alexf'))
		{
			$this->log('Not enough permissions to publish/unpublish WFL ID "'.$intId.'"', 'tl_wfl toggleVisibility', TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}

		$this->createInitialVersion('tl_wfl', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_wfl']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_wfl']['fields']['published']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		// Update the database
		$this->Database->prepare("UPDATE tl_wfl SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_wfl', $intId);
	}


	public function getSquirrel(DataContainer $dc)
	{

		$this->import('Files');

		if($dc->activeRecord->url)
		{

			$this->Files->mkdir($GLOBALS['TL_CONFIG']['uploadPath'].'/fontsquirrel');

			$tmp = explode('/',trim(rtrim($dc->activeRecord->url,'/')));
			$filename = $tmp[sizeof($tmp)-1];
			$path = $GLOBALS['TL_CONFIG']['uploadPath'].'/fontsquirrel/'.$filename;

			$this->Files->mkdir($path);

			if(!is_file(TL_ROOT.'/'.$path.'/'.$filename.'-fontfacekit.zip'))
			{
				// Danke an Stefan Lindeke für bessere Fontsquirrel-Routine
				$objRequest = new Request();
				$objRequest->send('http://www.fontsquirrel.com/fontfacekit/'.$filename);

				if ($objRequest->hasError())
				{
					return;
				} 

				$objFile = new File($path.'/'.$filename.'-fontfacekit.zip');
				$objFile->write($objRequest->response);
				$objFile->close(); 
			}

			$zipfile = new File($path.'/'.$filename.'-fontfacekit.zip');

			if($zipfile->filesize == 0)
			{
					$this->Database->prepare("UPDATE tl_wfl SET kitfamilies=? WHERE id=?")
							->execute('ERROR 404 - not found', $dc->id);
					$this->Files->delete($path.'/'.$filename.'-fontfacekit.zip');
					$this->Files->rmdir($path);

					return;
			}

			if(is_file(TL_ROOT.'/'.$path.'/'.$filename.'-fontfacekit.zip') && !is_file(TL_ROOT.'/'.$path.'/demo.html'))
			{
				$zip = new ZipReader($path.'/'.$filename.'-fontfacekit.zip');
				while ($zip->next()) {
					$data = $zip->unzip();
					if($zip->file_name == 'stylesheet.css')
					{
						preg_match_all("~font-family: '(.*)'~isU", $data, $tmp);
						$fonts = '';
						foreach($tmp[1] as $tmp2)
						{
							if($fonts!='')
							{
								$fonts .= chr(10);
							}
							$fonts .= $tmp2;
						}
						$this->Database->prepare("UPDATE tl_wfl SET kitfamilies=? WHERE id=?")
							->execute($fonts, $dc->id);
					}
					$fp = new File($path.'/'.$zip->file_name);
					if (!$fp->write($data))
						throw new Exception(sprintf('File error', $path.'/'.$zip->file_name));
					$fp->close();
				}

			}

		}
		return;
	}


}

?>