<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.3                                                               |
// +---------------------------------------------------------------------------+
// | search.php                                                                |
// |                                                                           |
// | Geeklog search tool.                                                      |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2004 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs        - tony@tonybibbs.com                           |
// |          Mark Limburg      - mlimburg@users.sourceforge.net               |
// |          Jason Whittenburg - jwhitten@securitygeeks.com                   |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//
// $Id: search.php,v 1.53 2004/08/05 12:54:46 dhaun Exp $

require_once('lib-common.php');
require_once($_CONF['path_system'] . 'classes/search.class.php');

$searchObj = new Search();

if ($HTTP_GET_VARS['mode'] == 'search') {    
    $_CONF['pagetitle'] = $LANG09[11];
    $display = COM_siteHeader();
    $display .= $searchObj->doSearch();
} else {
    $_CONF['pagetitle'] = $LANG09[1];
    $display = COM_siteHeader();
    $display .= $searchObj->showForm();
}

$display .= COM_siteFooter();

echo $display;

?>
