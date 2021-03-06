<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
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
 * @copyright  numero2 - Agentur für Internetdienstleistungen <www.numero2.de>
 * @author     Benny Born <benny.born@numero2.de>
 * @package    storelocator
 * @license    LGPL
 * @filesource
 */


/**
 * Weekdays
 */
$GLOBALS['TL_LANG']['tl_storelocator']['weekdays'] = array(
	'MO' => $GLOBALS['TL_LANG']['DAYS'][1]
,	'TU' => $GLOBALS['TL_LANG']['DAYS'][2]
,	'WE' => $GLOBALS['TL_LANG']['DAYS'][3]
,	'TH' => $GLOBALS['TL_LANG']['DAYS'][4]
,	'FR' => $GLOBALS['TL_LANG']['DAYS'][5]
,	'SA' => $GLOBALS['TL_LANG']['DAYS'][6]
,	'SO' => $GLOBALS['TL_LANG']['DAYS'][0]
);


/**
 * CSV-Import
 */
$GLOBALS['TL_LANG']['tl_storelocator']['import'] = array();
$GLOBALS['TL_LANG']['tl_storelocator']['import']['head'] = 'Import stores from CSV';
$GLOBALS['TL_LANG']['tl_storelocator']['import']['start'] = 'Start import';
$GLOBALS['TL_LANG']['tl_storelocator']['import']['file'] = array('Choose file','The file must be saved using the UTF8-charset and may contain the following structure: name, email, url, phone, fax, street, postal, city, country (2-letters)');


/**
 * Messages
 */
$GLOBALS['TL_LANG']['tl_storelocator']['noresults'] = 'No results found.';


/**
 * Labels
 */
$GLOBALS['TL_LANG']['tl_storelocator']['field']['distance'] = 'Distance approx.';
$GLOBALS['TL_LANG']['tl_storelocator']['field']['phone'] = 'Phone';
$GLOBALS['TL_LANG']['tl_storelocator']['field']['fax'] = 'Fax';
$GLOBALS['TL_LANG']['tl_storelocator']['field']['email'] = 'E-Mail';
$GLOBALS['TL_LANG']['tl_storelocator']['field']['www'] = 'WWW';
$GLOBALS['TL_LANG']['tl_storelocator']['field']['more'] = 'more Information';
$GLOBALS['TL_LANG']['tl_storelocator']['field']['postal'] = 'ZIP / City';
$GLOBALS['TL_LANG']['tl_storelocator']['field']['country'] = 'Country';
$GLOBALS['TL_LANG']['tl_storelocator']['field']['search'] = 'Search';

?>