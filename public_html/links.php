<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.3                                                               |
// +---------------------------------------------------------------------------+
// | links.php                                                                 |
// | This is the links page                                                    |
// |                                                                           |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000,2001,2002 by the following authors:                    |
// |                                                                           |
// | Authors: Tony Bibbs       - tony@tonybibbs.com                            |
// |          Mark Limburg     - mlimburg@users.sourceforge.net                |
// |          Jason Wittenburg - jwhitten@securitygeeks.com                    |
// |          Tom Willett      - tomw@pigstye.net                              |
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
// $Id: links.php,v 1.18 2002/08/13 21:35:47 dhaun Exp $

require_once('lib-common.php');

// MAIN

$display .= COM_siteHeader();
if (empty ($_USER['username']) &&
    (($_CONF['loginrequired'] == 1) || ($_CONF['linksloginrequired'] == 1))) {
    $display .= COM_startBlock($LANG_LOGIN[1]);
    $login = new Template($_CONF['path_layout'] . 'submit');
    $login->set_file (array ('login'=>'submitloginrequired.thtml'));
    $login->set_var ('login_message', $LANG_LOGIN[2]);
    $login->set_var ('site_url', $_CONF['site_url']);
    $login->set_var ('lang_login', $LANG_LOGIN[3]);
    $login->set_var ('lang_newuser', $LANG_LOGIN[4]);
    $login->parse ('output', 'login');
    $display .= $login->finish ($login->get_var('output'));
} else {
    $display .= COM_startBlock($LANG06[1]);

    $linklist = new Template($_CONF['path_layout'] . 'links');
    $linklist->set_file(array('linklist'=>'links.thtml','catlinks'=>'categorylinks.thtml','link'=>'linkdetails.thtml','catnav'=>'categorynavigation.thtml','catrow'=>'categoryrow.thtml','catcol'=>'categorycol.thtml','actcol'=>'categoryactivecol.thtml','pagenav'=>'pagenavigation.thtml'));

    if ($_CONF['linkcols'] > 0) {
        $result = DB_query("SELECT DISTINCT category FROM {$_TABLES['links']} ORDER BY category");
        $nrows  = DB_numRows($result);
        if ($nrows > 0) {
            $linklist->set_var ('lang_categories', $LANG23[14]);
            for ($i = 1; $i <= $nrows; $i++) {
                $C = DB_fetchArray($result);
                $cat = addslashes ($C['category']);
                $result1 = DB_query ("SELECT count(*) AS count FROM {$_TABLES['links']} WHERE category = '{$cat}'");
                $D = DB_fetchArray($result1);
                $linklist->set_var ('category_name', $C['category']);
                $linklist->set_var ('category_link', $_CONF['site_url'] .
                    '/links.php?category=' . urlencode ($C['category']));
                $linklist->set_var ('category_count', $D['count']);
                $linklist->set_var ('width', floor (100 / $_CONF['linkcols']));
                if ($category == $C['category']) {
                    $linklist->parse ('category_col', 'actcol', true);
                } else {
                    $linklist->parse ('category_col', 'catcol', true);
                }
                if ($i % $_CONF['linkcols'] == 0) {
                    $linklist->parse ('category_row', 'catrow', true);
                    $linklist->set_var ('category_col', '');
                }
            }
            $linklist->parse ('category_navigation', 'catnav', true);
        } else {
            $linklist->set_var ('category_navigation', '');
        }
    } else {
        $linklist->set_var ('category_navigation', '');
    }

    $linklist->set_var('site_url', $_CONF['site_url']);
    $linklist->set_var('lang_addalink', $LANG06[3]);

    $sql = "SELECT * FROM {$_TABLES['links']} ";
    if ($_CONF['linkcols'] > 0) {
        $cat = addslashes ($category);
        $sql .= "WHERE category = '$cat' ";
    }
    $sql .= "ORDER BY category asc,title";
    $result = DB_query($sql);
    $nrows = DB_numRows($result);
    if ($nrows == 0) {
        $page = 0;
        $end = 10;
    } else {
        if ($_CONF['linksperpage'] == 0) {
            $start = 1;
            $end = $nrows + 1;
        } else {
            if ($page > 0) {
                $start = (($page - 1) * $_CONF['linksperpage']) + 1;
            } else {
                $page = 1;
                $start = 1;
            }
            $end = $start + $_CONF['linksperpage'];
            if ($nrows < $end) {
                $end = $nrows + 1;
            }
        }

        $currentcategory = '';
        for ($i = 1; $i < $end; $i++) {
            $A = DB_fetchArray($result);
            if ($i >= $start) {
                if (SEC_hasAccess($A['owner_id'],$A['group_id'],$A['perm_owner'],$A['perm_group'],$A['perm_members'],$A['perm_anon']) > 0) {
                    if (($A['category'] <> $currentcategory) AND ($i > $start)) {
                        // print the category and link
                        $linklist->parse('category_links','catlinks',true);
                        $linklist->set_var('link_details','');
                        $currentcategory = $A['category'];
                        $linklist->set_var('link_category',$currentcategory);
                    } else if ($A['category'] <> $currentcategory) {
                        $currentcategory = $A['category'];
                        $linklist->set_var('link_category',$currentcategory);
                    }
                    $linklist->set_var('link_url', $_CONF['site_url'] .
                        '/portal.php?url=' . urlencode($A['url']) .
                        '&amp;what=link&amp;item=' . $A['lid']);
                    $linklist->set_var('link_name', stripslashes($A['title']));
                    $linklist->set_var('link_hits', $A['hits']);
                    $linklist->set_var('link_description', $A['description']);
                    $linklist->parse('link_details', 'link', true);
                }
            }
        }
        $linklist->parse('category_links','catlinks',true);
    }

    if ($_CONF['linksperpage'] > 0) {
        $pages = (int) ($nrows / $_CONF['linksperpage']);
        if (($nrows % $_CONF['linksperpage']) > 0 ) {
            $pages++;
        }
    }
    if ($pages > 0) {
        if ($_CONF['linkcols'] > 0) {
            $catlink = '?category=' . urlencode ($currentcategory);
        } else {
            $catlink = '';
        }
        $linklist->set_var ('page_navigation',
            COM_printPageNavigation ($_CONF['site_url'] . '/links.php' .
            $catlink, $page, $pages));
    } else {
        $linklist->set_var ('page_navigation', '');
    }

    $linklist->parse('output', 'linklist');
    $display .= $linklist->finish($linklist->get_var('output'));
}
$display .= COM_endBlock() . COM_siteFooter();

echo $display;

?>
