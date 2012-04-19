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

class wfl extends Frontend
{

/*
** inject javascript and css into head section
*/
public function injectWfl($objPage, $objLayout)
{

	global $objPage;

	if ($objPage->outputFormat != '')
	{
		$this->strFormat = $objPage->outputFormat;
	}
	else
	{
		$this->strFormat = 'xhtml';
	}
	$this->strTagEnding = ($this->strFormat == 'xhtml') ? ' />' : '>';

	$this->wflMedia = deserialize($objLayout->wflmedia);
	$this->wflOutput = $objLayout->wfloutput;

	$this->arrConfigs = $this->getConfigs($objLayout->wfl);

	if(sizeof($this->arrConfigs) > 1)
	{

		$objLayout->head .= '
<!-- Contao Webfontloader by twobox.com and delahaye.de //-->
';

		$objLayout->head .= $this->buildCSS();
		if($this->arrConfigs['jsPossible'] && (strpos($this->wflOutput,'js')>-1))
		{
			$objLayout->head .= $this->buildJS();
		}
	}

}


/*
** merge all configurations to one
*/
protected function getConfigs($wfl)
{

	$arrWfl = deserialize($wfl);

	if($wfl && is_array($arrWfl))
	{

		// get all configs
		$return = array();

		foreach($arrWfl as $wflId)
		{
			$return['jsPossible'] = 0;

			$objWflConfig = $this->Database->prepare("SELECT * FROM tl_wfl_config WHERE id=?")
				->limit(1)
				->execute($wflId);
			
			if($objWflConfig->typekit)
			{
				$return['jsPossible'] = 1;
				$return['typekit']['id'] = ($return['typekit']['id'] ? $return['typekit']['id'] : $objWflConfig->typekit);
			}

			if($objWflConfig->monotype)
			{
				$return['jsPossible'] = 1;
				$return['monotype']['id'] = ($return['monotype']['id'] ? $return['monotype']['id'] : $objWflConfig->monotype);
			}

			if($objWflConfig->loading)
			{
				$return['loading'][] = $objWflConfig->loading;
			}
			if($objWflConfig->fontloading)
			{
				$return['fontloading'][] = $objWflConfig->fontloading;
			}
			if($objWflConfig->fontactive)
			{
				$return['fontactive'][] = $objWflConfig->fontactive;
			}
			if($objWflConfig->fontinactive)
			{
				$return['fontinactive'][] = $objWflConfig->fontinactive;
			}
			if($objWflConfig->active)
			{
				$return['active'][] = $objWflConfig->active;
			}
			if($objWflConfig->inactive)
			{
				$return['inactive'][] = $objWflConfig->inactive;
			}

			$objWfl = $this->Database->prepare("SELECT * FROM tl_wfl WHERE (pid=? AND published=1) ORDER BY sorting")
				->execute($wflId);

			while($objWfl->next())
			{
				switch($objWfl->type)
				{
					case 'GOOGLE':
						$return['jsPossible'] = 1;
						$return['google']['families'] = array_unique((is_array($return['google']['families']) ? array_merge($return['google']['families'], deserialize($objWfl->families)) : deserialize($objWfl->families)));
						break;
					case 'SQUIRREL':
						$return['jsPossible'] = 1;
						$return['custom']['families'] = array_unique((is_array($return['custom']['families']) ? array_merge($return['custom']['families'], explode(chr(10), $objWfl->kitfamilies)) : explode(chr(10), $objWfl->kitfamilies)));
						$dirname = explode('/',$objWfl->url);
						$return['custom']['urls'] = array_unique((is_array($return['custom']['urls']) ? array_merge($return['custom']['urls'], array($GLOBALS['TL_CONFIG']['uploadPath'].'/fontsquirrel/'.$dirname[sizeof($dirname)-1].'/stylesheet.css')) : array($GLOBALS['TL_CONFIG']['uploadPath'].'/fontsquirrel/'.$dirname[sizeof($dirname)-1].'/stylesheet.css')));
						break;
					case 'OWNCSS':
						$return['jsPossible'] = 1;
						$return['custom']['families'] = array_unique((is_array($return['custom']['families']) ? array_merge($return['custom']['families'], deserialize($objWfl->families)) : deserialize($objWfl->families)));
						$return['custom']['urls'] = array_unique((is_array($return['custom']['urls']) ? array_merge($return['custom']['urls'], deserialize($objWfl->multiSRC)) : deserialize($objWfl->multiSRC)));
						break;
					case 'CUSTOMCSS':
						$return['jsPossible'] = 1;
						$return['custom']['families'] = array_unique((is_array($return['custom']['families']) ? array_merge($return['custom']['families'], deserialize($objWfl->families)) : deserialize($objWfl->families)));
						$return['custom']['urls'] = array_unique((is_array($return['custom']['urls']) ? array_merge($return['custom']['urls'], deserialize($objWfl->urls)) : deserialize($objWfl->urls)));
						break;
					case 'OWNFILES':
						$return['ownfiles'][$objWfl->family] =  array(
							'eot' => $objWfl->eot,
							'woff' => $objWfl->woff,
							'ttf' => $objWfl->ttf,
							'svg' => ($objWfl->svgkey ? $objWfl->svg.'#'.$objWfl->svgkey : $objWfl->svg),
							'weight' => $objWfl->weight,
							'style' => $objWfl->style
							);
						break;
					case 'CUSTOMFILES':
						$return['ownfiles'][$objWfl->family] =  array(
							'eot' => $objWfl->eoturl,
							'woff' => $objWfl->woffurl,
							'ttf' => $objWfl->ttfurl,
							'svg' => ($objWfl->svgkey ? $objWfl->svgurl.'#'.$objWfl->svgkey : $objWfl->svgurl),
							'weight' => $objWfl->weight,
							'style' => $objWfl->style
							);
						break;
					case 'SNIPPET':
						$return['snippets'][] = $objWfl->snippet;
						break;
					}
			}

		}
	
	}

	return $return;
}


/*
** build css-urls from configuration
*/
protected function buildCSS()
{
		if(is_array($this->arrConfigs['google']['families']) && (strpos($this->wflOutput,'css')>-1))
		{
			if(strpos($this->wflOutput,'cssn')>-1)
			{
				$return .= '<noscript>
';
			}
			$return .= $this->getGoogleCSS();
		}

		if(is_array($this->arrConfigs['custom']['urls']) && (strpos($this->wflOutput,'css')>-1))
		{
			if(strpos($this->wflOutput,'cssn')>-1 && !$return)
			{
				$return .= '<noscript>
';
			}
			$return .= $this->getCustomCSS();
		}

		if(strpos($this->wflOutput,'cssn')>-1 && $return)
		{
			$return .= '</noscript>
';
		}

		if(is_array($this->arrConfigs['ownfiles']))
		{
			$return .= $this->getFontFaceCSS();
		}

		if(is_array($this->arrConfigs['snippets']))
		{
			$return .= $this->getSnippets();
		}

		return $return;
}


/*
** build Google CSS links
*/
protected function getGoogleCSS()
{
	foreach($this->arrConfigs['google']['families'] as $family)
	{
		$return .= '<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' . $family . '"'.($this->strFormat=='xhtml' ? ' type="text/css"' : '').$this->strTagEnding.'
';
	}

	return $return;
}


/*
** build custom CSS links
*/
protected function getCustomCSS()
{
	foreach($this->arrConfigs['custom']['urls'] as $url)
	{
		if($url)
		{
			$return .= '<link rel="stylesheet" href="'.$url.'"'.($this->strFormat=='xhtml' ? ' type="text/css"' : '').$this->strTagEnding.'
';
		}
	}

	return $return;
}


/*
** build @font-face CSS
*/
protected function getFontFaceCSS()
{
	foreach($this->wflMedia as $medium)
	{
		$return .= ($return ? ',' : '') . $medium;
	}
	if($this->strFormat=='xhtml')
	{
		$return = '<style type="text/css" media="'.$return.'">
<!--/*--><![CDATA[/*><!--*/
';
	}
	else
	{
		$return = '<style media="'.$return.'">
';
	}
	foreach($this->arrConfigs['ownfiles'] as $k=>$v)
	{
		$return .= '@font-face {
	font-family: \''.$k.'\';
	src: url(\''.$v['eot'].'\');
	src: url(\''.$v['eot'].'?#iefix\') format(\'embedded-opentype\'),
	url(\''.$v['woff'].'\') format(\'woff\'),
	url(\''.$v['ttf'].'\') format(\'truetype\'),
	url(\''.$v['svg'].'\') format(\'svg\');
	font-weight: '.$v['weight'].';
	font-style: '.$v['style'].';
}
';
	}
	if($this->strFormat=='xhtml')
	{
		$return .= '/*]]>*/-->
';
	}
	$return .= '</style>
';

	return $return;
}


/*
** build snippets
*/
protected function getSnippets()
{

	foreach($this->arrConfigs['snippets'] as $snippet)
	{
		if($snippet)
		{
			$return .= $snippet.'
';
		}
	}

	return $return;
}



/*
** build javascript from configuration
*/
protected function buildJS()
{
		$source = array();

		if(is_array($this->arrConfigs['google']['families']))
		{
			$source[] = $this->getGoogle();
		}

		if($this->arrConfigs['typekit']['id'])
		{
			$source[] = $this->getTypekit();
		}

		if($this->arrConfigs['monotype']['id'])
		{
			$source[] = $this->getMonotype();
		}

		if(is_array($this->arrConfigs['custom']['families']) || is_array($this->arrConfigs['custom']['urls']))
		{
			$source[] = $this->getCustom();
		}

		$callbacks = array(
			'loading',
			'fontloading',
			'fontactive',
			'fontinactive',
			'active',
			'inactive'
			);
		foreach($callbacks as $callback)
		{
			if(is_array($this->arrConfigs[$callback]))
			{
				$source[] = $this->getCallbacks($callback);
			}
		}

		if($source)
		{
			if($this->strFormat=='xhtml')
			{
				$return = '
<script type="text/javascript">
<!--//--><![CDATA[//><!--
';
			}
			else
			{
				$return = '
<script>
';
			}
			$return .= '// WebFont Loader by Google and Typekit
WebFontConfig = {
' . implode(', 
',$source) . '
};
(function() {
	document.getElementsByTagName(\'html\')[0].className += \' wf-loading\';
	var wf = document.createElement(\'script\');
	wf.src = (\'https:\' == document.location.protocol ? \'https\' : \'http\') +
		\'://ajax.googleapis.com/ajax/libs/webfont/1.0.19/webfont.js\';
	wf.type = \'text/javascript\';
	wf.async = \'true\';
	var s = document.getElementsByTagName(\'script\')[0];
	s.parentNode.insertBefore(wf, s);
})();
';
		if($this->strFormat=='xhtml')
		{
			$return .= '//--><!]]>
';
		}
		$return .= '</script>';
		return $return;
	}
	else
	{
		return '';
	}
}


/*
** get Google javascript
*/
protected function getGoogle()
{
	$return = 'google: { '.$this->getArgs('google','families') . ' } ';

	return $return;
}


/*
** get Typekit javascript
*/
protected function getTypekit()
{
	$return  = 'typekit: { 
id: \'' . $this->arrConfigs['typekit']['id'] . '\' } ';

	return $return;
}


/*
** get Monotype javascript
*/
protected function getMonotype()
{
	$return  = 'monotype: { 
projectId: \'' . $this->arrConfigs['monotype']['id'] . '\' } ';

	return $return;
}


/*
** get custom javascript
*/
protected function getCustom()
{
	$return = 'custom: { ';

	if (is_array($this->arrConfigs['custom']['families']))
	{
		$return .= $this->getArgs('custom','families');
	}

	if (is_array($this->arrConfigs['custom']['urls']))
	{
		if (is_array($this->arrConfigs['custom']['families']))
		{
			$return .= ', 
';
		}
		$return .= $this->getArgs('custom','urls');
	}

	$return .= ' } ';
	return $return;
}


/*
** build javascript from array
*/
protected function getArgs($vendor, $type)
{
	$return = $type . ': [ ';
	$first = true;
	foreach($this->arrConfigs[$vendor][$type] as $arg)
	{
		if($first)
		{
			$first = false;
		} else {
			$return .= ', ';
		}
		$return .= '\''.trim($arg).'\'';
	}
	$return .= ' ]';
	return $return;
}


/*
** build javascript from callbacks
*/
protected function getCallbacks($type)
{
	switch($type)
	{
		case 'loading':
		case 'active':
		case 'inactive':
			$return .= '
' . $type . ': function() {
';
			foreach($this->arrConfigs[$type] as $func)
			{
				$return .= $func.'
';
			}
			$return .= '
}';
			break;

		case 'fontloading':
		case 'fontactive':
		case 'fontinactive':
			$return .= '
' . $type . ': function(fontFamily, fontDescription) {
';
			foreach($this->arrConfigs[$type] as $func)
			{
				$return .= $func.'
';
			}
			$return .= '
}';
			break;
	}
	return $return;
}


}

?>