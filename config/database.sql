-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_layout`
-- 

CREATE TABLE `tl_layout` (
  `wfl` blob NULL,
  `wfloutput` varchar(8) NOT NULL default 'css_js',
  `wflmedia` blob NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_wfl`
-- 

CREATE TABLE `tl_wfl` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `type` varchar(16) NOT NULL default '',
  `families` blob NULL,
  `urls` blob NULL,
  `multiSRC` blob NULL,
  `url` varchar(255) NOT NULL default '',
  `kitfamilies` text NULL,
  `family` varchar(64) NOT NULL default '',
  `eot` varchar(255) NOT NULL default '',
  `woff` varchar(255) NOT NULL default '',
  `ttf` varchar(255) NOT NULL default '',
  `svg` varchar(255) NOT NULL default '',
  `eoturl` varchar(255) NOT NULL default '',
  `woffurl` varchar(255) NOT NULL default '',
  `ttfurl` varchar(255) NOT NULL default '',
  `svgurl` varchar(255) NOT NULL default '',
  `svgkey` varchar(32) NOT NULL default '',
  `weight` varchar(32) NOT NULL default '',
  `style` varchar(32) NOT NULL default '',
  `snippet` text NULL,
  `published` char(1) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_wfl_config`
-- 

CREATE TABLE `tl_wfl_config` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `typekit` varchar(255) NOT NULL default '',
  `monotype` varchar(255) NOT NULL default '',
  `loading` text NULL,
  `fontloading` text NULL,
  `fontactive` text NULL,
  `fontinactive` text NULL,
  `active` text NULL,
  `inactive` text NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;