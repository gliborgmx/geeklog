<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.3                                                               |
// +---------------------------------------------------------------------------+
// | pollbooth.php                                                            |
// | This is the pollbooth page.                                               |
// |                                                                           |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000,2001 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs       - tony@tonybibbs.com                            |
// |          Mark Limburg     - mlimburg@dingoblue.net.au                     |
// |          Jason Wittenburg - jwhitten@securitygeeks.com                    |
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
// $Id: pollbooth.php,v 1.9 2002/01/12 04:08:08 tony_bibbs Exp $

include_once('lib-common.php');

/**
* Saves a user's vote
*
* Saves the users vote, if allowed for the poll $qid.  NOTE
* all data comes from form post
*
*/
function pollsave() 
{
    global $_TABLES, $qid, $aid, $db, $REMOTE_ADDR, $LANG07;

    DB_change($_TABLES['pollquestions'],'voters',"voters + 1",'qid',$qid,'',true);
    $id[1] = 'qid';
    $value[1] = $qid;
    $id[2] = 'aid';
    $value[2] = $aid;
    // This call to DB-change will properly supress the insertion of quoes around $value in the sql
    DB_change($_TABLES['pollanswers'],'votes',"votes + 1",$id,$value, '', true);
    DB_save($_TABLES['pollvoters'],'ipaddress, date, qid',"'$REMOTE_ADDR',unix_timestamp(),'$qid'");
    $retval .= COM_startBlock($LANG07[1])
        . $LANG07[2] . ' ' . $qid
        . COM_endBlock()
        . COM_pollResults($qid);

    return $retval;
}

/**
* Shows all polls in system
*
* List all the polls on the system if no $qid is provided
*
*/
function polllist() 
{
    global $_TABLES, $_CONF, $LANG07;
	
    $result = DB_query("SELECT qid,question,voters FROM {$_TABLES['pollquestions']}");
    $nrows = DB_numRows($result);
    $retval = '';
    $retval .= COM_startBlock($LANG07[4]);
    $pollitem = new Template($_CONF['path_layout'] . 'pollbooth');
    $pollitem->set_file('pollitem', 'polllist.thtml');
    for ($i = 1; $i <= $nrows; $i++) {
        $Q = DB_fetchArray($result);
        $pollitem->set_var('item_num', $i);
        $pollitem->set_var('poll_url', $_CONF['site_url'].'/pollbooth.php?qid=' . $Q['qid'] . '&aid=-1');
        $pollitem->set_var('poll_question', stripslashes($Q['question']));
        $pollitem->set_var('poll_votes', $Q['voters']);
        $pollitem->set_var('lang_votes', $LANG07[5]);
        if ($i == $nrows) {
            $pollitem->set_var('ending_br', '<br><br>');
        } else {
            $pollitem->set_var('ending_br', '');
        }
        $pollitem->parse('output', 'pollitem');
        $retval .= $pollitem->finish($pollitem->get_var('output'));
    }

    $retval .= COM_endBlock();
	
	return $retval;
}

// MAIN
//
// no qid will load a list of polls
// no aid will let you vote on the select poll
// an aid greater than 0 will save a vote for that answer on the selected poll
// an aid of -1 will display the select poll

if ($reply == $LANG01[25]) {
	$display .= COM_refresh($_CONF['site_url'] . "/comment.php?sid=$qid&pid=$pid&type=$type");
	echo $display;
	exit;			
}
if (empty($qid)) {
	$display .= COM_siteHeader() . polllist();
} else if (empty($aid)) {
	$display .= COM_siteHeader();
	if (empty($HTTP_COOKIE_VARS[$qid])) {
		$display .= COM_pollVote($qid);
	} else {
		$display .= COM_pollResults($qid,400,$order,$mode);
	}
} else if ($aid  > 0  and empty($HTTP_COOKIE_VARS[$qid])) {
	setcookie($qid,$aid,time()+$_CONF['pollcookietime']);
	$display .= COM_siteHeader()
		.pollsave();
} else {
	$display .= COM_siteHeader()
		.COM_pollResults($qid,400,$order,$mode);
}
$display .= COM_siteFooter();
echo $display;
?>
