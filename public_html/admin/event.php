<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.3                                                               |
// +---------------------------------------------------------------------------+
// | event.php                                                                 |
// |                                                                           |
// | Geeklog event administration page.                                        |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2004 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs        - tony@tonybibbs.com                           |
// |          Mark Limburg      - mlimburg@users.sourceforge.net               |
// |          Jason Whittenburg - jwhitten@securitygeeks.com                   |
// |          Dirk Haun         - dirk@haun-online.de                          |
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
// $Id: event.php,v 1.53 2004/12/10 09:26:17 dhaun Exp $

require_once ('../lib-common.php');
require_once ('auth.inc.php');

// Uncomment the line below if you need to debug the HTTP variables being passed
// to the script.  This will sometimes cause errors but it will allow you to see
// the data being passed in a POST operation
// COM_debug($HTTP_POST_VARS);

// number of events to list per page
define ('EVENTS_PER_PAGE', 50);

$display = '';

// Ensure user even has the rights to access this page
if (!SEC_hasRights('event.edit')) {
    $display .= COM_siteHeader('menu');
    $display .= COM_startBlock ($MESSAGE[30], '',
                                COM_getBlockTemplate ('_msg_block', 'header'));
    $display .= $MESSAGE[35];
    $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
    $display .= COM_siteFooter();

    // Log attempt to error.log
    COM_accessLog("User {$_USER['username']} tried to illegally access the event administration screen.");

    echo $display;

    exit;
}

/**
* Shows event editor
*
* @param    string  $mode   Indicates if this is a submission or a regular entry
* @param    array   $A      array holding the event's details
* @param    string  $msg    an optional error message to display
* @return   string          HTML for event editor or error message
*
*/
function editevent ($mode, $A, $msg = '') 
{
    global $_CONF, $_GROUPS, $_TABLES, $_USER, $LANG12, $LANG22, $LANG30,
           $LANG_ACCESS, $_STATES;

    $retval = '';

    if (!empty ($msg)) {
        $retval .= COM_startBlock ($LANG22[2], '',
                        COM_getBlockTemplate ('_msg_block', 'header'));
        $retval .= $msg;
        $retval .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
    }

    $event_templates = new Template($_CONF['path_layout'] . 'admin/event');
    $event_templates->set_file('editor','eventeditor.thtml');
    $event_templates->set_var('site_url', $_CONF['site_url']);
    $event_templates->set_var('site_admin_url', $_CONF['site_admin_url']);
    $event_templates->set_var('layout_url',$_CONF['layout_url']);

    if ($mode <> 'editsubmission' AND !empty($A['eid'])) {
        // Get what level of access user has to this object
        $access = SEC_hasAccess($A['owner_id'],$A['group_id'],$A['perm_owner'],$A['perm_group'],$A['perm_members'],$A['perm_anon']);
        if ($access == 0 OR $access == 2) {
            // Uh, oh!  User doesn't have access to this object
            $retval .= COM_startBlock ($LANG22[16], '',
                               COM_getBlockTemplate ('_msg_block', 'header'));
            $retval .= $LANG22[17];
            $retval .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
            COM_accessLog("User {$_USER['username']} tried to illegally submit or edit event $eid.");
            return $retval;
        }
    } else {
        $A['owner_id'] = $_USER['uid'];
        if (isset ($_GROUPS['Event Admin'])) {
            $A['group_id'] = $_GROUPS['Event Admin'];
        } else {
            $A['group_id'] = SEC_getFeatureGroup ('event.edit');
        }
        $A['perm_owner'] = 3;
        $A['perm_group'] = 2;
        $A['perm_members'] = 2;
        $A['perm_anon'] = 2;
        $access = 3;
    }

    $retval .= COM_startBlock($LANG22[1], '',
                              COM_getBlockTemplate ('_admin_block', 'header'));

    if (!empty($A['eid']) && SEC_hasRights('event.edit')) {
        $event_templates->set_var ('delete_option',
            '<input type="submit" value="' . $LANG22[22] . '" name="mode">');
    }

    if (empty ($A['eid'])) { // new event
        $A['eid'] = COM_makesid ();

        // in case a start date/time has been passed from the calendar,
        // pick it up for the end date/time
        if (empty ($A['dateend'])) {
            $A['dateend'] = $A['datestart'];
        }
        if (empty ($A['timeend'])) {
            $A['timeend'] = $A['timestart'];
        }
    }

    $event_templates->set_var('event_id', $A['eid']);
    $event_templates->set_var('lang_eventtitle', $LANG22[3]);
    $event_templates->set_var('event_title', stripslashes ($A['title']));
    $types  = explode(',',$_CONF['event_types']);
    asort ($types);
    $catdd = '';
    for ($i = 1; $i <= count($types); $i++) {
        $catdd .= '<option value="' . current($types) . '"';
        if ($A['event_type'] == current($types)) {
            $catdd .= ' selected="selected"';
        }
        $catdd .= '>' . current($types) . '</option>';
        next($types);
    }
    $event_templates->set_var('lang_eventtype', $LANG12[49]);
    $event_templates->set_var('lang_editeventtypes', $LANG12[50]);
    $event_templates->set_var('type_options', $catdd);
    $event_templates->set_var('lang_eventurl', $LANG22[4]);
    $event_templates->set_var('max_url_length', 255);
    $event_templates->set_var('event_url', $A['url']);
    $event_templates->set_var('lang_includehttp', $LANG22[9]);
    $event_templates->set_var('lang_eventstartdate', $LANG22[5]);
    //$event_templates->set_var('event_startdate', $A['datestart']);
    $event_templates->set_var('lang_starttime', $LANG12[42]);

    // Combine date/time for easier manipulation
    $A['datestart'] = $A['datestart'] . ' ' . $A['timestart'];
    $start_stamp = strtotime($A['datestart']);
    $A['dateend'] = $A['dateend'] . ' ' . $A['timeend'];
    $end_stamp = strtotime($A['dateend']);
    $start_month = date('m', $start_stamp);
    $start_day = date('d', $start_stamp);
    $start_year = date('Y', $start_stamp);
    $end_month = date('m', $end_stamp);
    $end_day = date('d', $end_stamp);
    $end_year = date('Y', $end_stamp);
    $start_ampm = '';
    $end_ampm = '';
    $start_hour = date('H', $start_stamp);
    $start_minute = date('i', $start_stamp);
    if ($start_hour > 12) {
        $start_hour = $start_hour - 12;
        $event_templates->set_var('startpm_selected','selected="selected"');
    } else {
        $event_templates->set_var('startam_selected','selected="selected"');
    }
    $end_hour = date('H', $end_stamp);
    $end_minute = date('i', $end_stamp);
    $ampm = '';
    if ($end_hour > 12) {
        $end_hour = $end_hour - 12;
        $ampm = 'pm';
    }
    if ($ampm == 'pm') {
        $event_templates->set_var('endpm_selected', 'selected="selected"');
    } else {
        $event_templates->set_var('endam_selected', 'selected="selected"');
    }

    $month_options = COM_getMonthFormOptions ($start_month);
    $event_templates->set_var ('startmonth_options', $month_options);

    $month_options = COM_getMonthFormOptions ($end_month);
    $event_templates->set_var ('endmonth_options', $month_options);

    $day_options = COM_getDayFormOptions ($start_day);
    $event_templates->set_var ('startday_options', $day_options);

    $day_options = COM_getDayFormOptions ($end_day);
    $event_templates->set_var ('endday_options', $day_options);

    $year_options = COM_getYearFormOptions ($start_year);
    $event_templates->set_var ('startyear_options', $year_options);

    $year_options = COM_getYearFormOptions ($end_year);
    $event_templates->set_var ('endyear_options', $year_options);

    $hour_options = COM_getHourFormOptions ($start_hour);
    $event_templates->set_var ('starthour_options', $hour_options);

    $hour_options = COM_getHourFormOptions ($end_hour);
    $event_templates->set_var ('endhour_options', $hour_options);

    // Set minute for start time
    switch ($start_minute) {
    case '00':
        $event_templates->set_var('startminuteoption1_selected', 'selected="selected"');
        break;
    case '15':
        $event_templates->set_var('startminuteoption2_selected', 'selected="selected"');
        break;
    case '30':
        $event_templates->set_var('startminuteoption3_selected', 'selected="selected"');
        break;
    case '45':
        $event_templates->set_var('startminuteoption4_selected', 'selected="selected"');
        break;
    }

    // Set minute for end time
    switch ($end_minute) {
    case '00':
        $event_templates->set_var('endminuteoption1_selected', 'selected="selected"');
        break;
    case '15':
        $event_templates->set_var('endminuteoption2_selected', 'selected="selected"');
        break;
    case '30':
        $event_templates->set_var('endminuteoption3_selected', 'selected="selected"');
        break;
    case '45':
        $event_templates->set_var('endminuteoption4_selected', 'selected="selected"');
        break;
    }

    $event_templates->set_var('lang_enddate', $LANG12[13]);
    $event_templates->set_var('lang_eventenddate', $LANG22[6]);
    $event_templates->set_var('event_enddate', $A['dateend']);
    $event_templates->set_var('hour_options', $hour_options);
    $event_templates->set_var('lang_enddate', $LANG12[13]);
    $event_templates->set_var('lang_endtime', $LANG12[41]);
    $event_templates->set_var('lang_alldayevent',$LANG12[43]);
    if ($A['allday'] == 1) {
        $event_templates->set_var('allday_checked', 'checked="CHECKED"');
    }
    $event_templates->set_var('lang_location',$LANG12[51]);
    $event_templates->set_var('event_location', stripslashes ($A['location']));
    $event_templates->set_var('lang_addressline1',$LANG12[44]);
    $event_templates->set_var('event_address1', stripslashes ($A['address1']));
    $event_templates->set_var('lang_addressline2',$LANG12[45]);
    $event_templates->set_var('event_address2', stripslashes ($A['address2']));
    $event_templates->set_var('lang_city',$LANG12[46]);
    $event_templates->set_var('event_city', stripslashes ($A['city']));
    $event_templates->set_var('lang_state',$LANG12[47]);
    $state_options = '';
    for ($i = 1; $i <= count($_STATES); $i++) {
        $state_options .= '<option value="' . key($_STATES) . '" ';
        if (key($_STATES) == $A['state']) {
            $state_options .= 'selected="selected"';
        }
        $state_options .= '>' . current($_STATES) . '</option>';
        next($_STATES);
    }
    $event_templates->set_var('state_options',$state_options);
    $event_templates->set_var('lang_zipcode',$LANG12[48]);
    $event_templates->set_var('event_zipcode', $A['zipcode']);
    $event_templates->set_var('lang_eventlocation', $LANG22[7]);
    $event_templates->set_var('event_location', stripslashes ($A['location']));
    $event_templates->set_var('lang_eventdescription', $LANG22[8]);
    $event_templates->set_var('event_description', stripslashes ($A['description']));
    $event_templates->set_var('lang_save', $LANG22[20]);
    $event_templates->set_var('lang_cancel', $LANG22[21]);

    // user access info
    $event_templates->set_var('lang_accessrights',$LANG_ACCESS['accessrights']);
    $event_templates->set_var('lang_owner', $LANG_ACCESS['owner']);
    $event_templates->set_var('owner_username', DB_getItem($_TABLES['users'],'username',"uid = {$A['owner_id']}"));
    $event_templates->set_var('owner_id', $A['owner_id']);
    $event_templates->set_var('lang_group', $LANG_ACCESS['group']);

    $groupdd = '';
    $usergroups = SEC_getUserGroups();
    if ($access == 3) {
        $groupdd .= '<select name="group_id">';
        for ($i = 0; $i < count($usergroups); $i++) {
            $groupdd .= '<option value="' . $usergroups[key($usergroups)] . '"';
            if ($A['group_id'] == $usergroups[key($usergroups)]) {
                $groupdd .= ' selected="selected"';
            }
            $groupdd .= '>' . key($usergroups) . '</option>';
            next($usergroups);
        }
        $groupdd.= '</select>';
    } else {
        // they can't set the group then
        $groupdd .= DB_getItem($_TABLES['groups'],'grp_name',"grp_id = {$A['group_id']}");
        $groupdd .= '<input type="hidden" name="group_id" value="' . $A['group_id'] . '">';
    }
    $event_templates->set_var('group_dropdown', $groupdd);
    $event_templates->set_var('lang_permissions', $LANG_ACCESS['permissions']);
    $event_templates->set_var('lang_permissionskey', $LANG_ACCESS['permissionskey']);
    $event_templates->set_var('permissions_editor', SEC_getPermissionsHTML($A['perm_owner'],$A['perm_group'],$A['perm_members'],$A['perm_anon']));
    $event_templates->parse('output', 'editor');
    $retval .= $event_templates->finish($event_templates->get_var('output'));
    $retval .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));

    return $retval;
}

/**
* Saves an event to the database
*
* @param    string  $eid            Event ID
* @param    string  $title          Event Title
* @param    string  $url            URL for the event
* @param    string  $datestart      Date the event begins on
* @param    string  $dateend        Date the event ends on
* @param    string  $location       Where the event will be held at
* @param    string  $description    Description about the event
* @param    string  $owner_id       ID of owner
* @param    string  $group_id       ID of group event belongs to
* @param    string  $perm_owner     Permissions the owner has on event
* @param    string  $perm_group     Permissions the groups has on the event
* @param    string  $perm_members   Permisssions members have on the event
* @param    string  $perm_anon      Permissions anonymous users have
* @return   string                  HTML redirect or error message
*
*/
function saveevent ($eid, $title, $event_type, $url, $allday, $start_month, $start_day, $start_year, $start_hour, $start_minute, $start_ampm, $end_month, $end_day, $end_year, $end_hour, $end_minute, $end_ampm, $location, $address1, $address2, $city, $state, $zipcode, $description, $owner_id, $group_id, $perm_owner, $perm_group, $perm_members, $perm_anon, $mode) 
{
    global $_CONF, $_TABLES, $_USER, $LANG22;

    $retval = '';

    // Convert array values to numeric permission values
    list($perm_owner,$perm_group,$perm_members,$perm_anon) = SEC_getPermissionValues($perm_owner,$perm_group,$perm_members,$perm_anon);

    $access = 0;
    if (DB_count ($_TABLES['events'], 'eid', $eid) > 0) {
        $result = DB_query ("SELECT owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon FROM {$_TABLES['events']} WHERE eid = '{$eid}'");
        $A = DB_fetchArray ($result);
        $access = SEC_hasAccess ($A['owner_id'], $A['group_id'],
                $A['perm_owner'], $A['perm_group'], $A['perm_members'],
                $A['perm_anon']);
    } else {
        $access = SEC_hasAccess ($owner_id, $group_id, $perm_owner, $perm_group,
                $perm_members, $perm_anon);
    }
    if (($access < 3) || !SEC_inGroup ($group_id)) {
        $retval .= COM_siteHeader('menu');
        $retval .= COM_startBlock ($MESSAGE[30], '',
                            COM_getBlockTemplate ('_msg_block', 'header'));
        $retval .= $MESSAGE[31];
        $retval .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
        $retval .= COM_siteFooter();
        COM_accessLog ("User {$_USER['username']} tried to illegally submit or edit event $eid.");
        return $retval;
    }

    if ($allday == 'on') {
        $allday = 1;
    } else {
        $allday = 0;
    }

    // Make sure start date is before end date
    if (checkdate ($start_month, $start_day, $start_year)) {
        $datestart = $start_year . '-' . $start_month . '-' . $start_day;
        $timestart = $start_hour . ':' . $start_minute . ':00';
    } else {
        $retval .= COM_siteHeader ('menu');
        $retval .= COM_startBlock ($LANG22[2], '',
                            COM_getBlockTemplate ('_msg_block', 'header'));
        $retval .= $LANG22[23];
        $retval .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
        $retval .= COM_siteFooter ();

        return $retval;
    }
    if (checkdate ($end_month, $end_day, $end_year)) {
        $dateend = $end_year . '-' . $end_month . '-' . $end_day;
        $timeend = $end_hour . ':' . $end_minute . ':00';
    } else {
        $retval .= COM_siteHeader ('menu');
        $retval .= COM_startBlock ($LANG22[2], '',
                            COM_getBlockTemplate ('_msg_block', 'header'));
        $retval .= $LANG22[24];
        $retval .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
        $retval .= COM_siteFooter ();

        return $retval;
    }
    if ($allday == 0) {
        if ($dateend < $datestart) {
            $retval .= COM_siteHeader ('menu');
            $retval .= COM_startBlock ($LANG22[2], '',
                                COM_getBlockTemplate ('_msg_block', 'header'));
            $retval .= $LANG22[25];
            $retval .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
            $retval .= COM_siteFooter ();

            return $retval;
        }
    } else {
        if ($dateend < $datestart) {
            // Force end date to be same as start date
            $dateend = $datestart;
        }
    }

    // clean 'em up 
    $description = addslashes (COM_checkHTML (COM_checkWords ($description)));
    $title = addslashes (COM_checkHTML (COM_checkWords ($title)));
    $location = addslashes (COM_checkHTML (COM_checkWords ($location)));
    $address1 = addslashes (COM_checkHTML (COM_checkWords ($address1)));
    $address2 = addslashes (COM_checkHTML (COM_checkWords ($address2)));
    $city = addslashes (COM_checkHTML (COM_checkWords ($city)));
    $zipcode =  addslashes (COM_checkHTML (COM_checkWords ($zipcode)));
    if ($allday == 0) {
        // Add 12 to make time on 24 hour clock if needed
        if ($start_ampm == 'pm' AND $start_hour <> 12) {
            $start_hour = $start_hour + 12;
        }
        // If 12AM set hour to 00
        if ($start_ampm == 'am' AND $start_hour == 12) {
            $start_hour = '00';
        }
        // Add 12 to make time on 24 hour clock if needed
        if ($end_ampm == 'pm' AND $end_hour <> 12) {
           $end_hour = $end_hour + 12;
        }
        // If 12AM set hour to 00
        if ($end_ampm == 'am' AND $end_hour == 12) {
            $end_hour = '00';
        }
        $timestart = $start_hour . ':' . $start_minute . ':00';
        $timeend = $end_hour . ':' . $end_minute . ':00';
    }

    if (!empty ($eid) AND !empty ($description) AND !empty ($title)) {
        DB_delete ($_TABLES['eventsubmission'], 'eid', $eid);

        DB_save($_TABLES['events'],'eid,title,event_type,url,allday,datestart,dateend,timestart,timeend,location,address1,address2,city,state,zipcode,description,owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon',"$eid,'$title','$event_type','$url',$allday,'$datestart','$dateend','$timestart','$timeend','$location','$address1','$address2','$city','$state','$zipcode','$description',$owner_id,$group_id,$perm_owner,$perm_group,$perm_members,$perm_anon");
        if (DB_count ($_TABLES['personal_events'], 'eid', $eid) > 0) {
            $result = DB_query ("SELECT uid FROM {$_TABLES['personal_events']} WHERE eid = '{$eid}'");
            $numrows = DB_numRows ($result);
            for ($i = 1; $i <= $numrows; $i++) {
                $P = DB_fetchArray ($result);
                DB_save ($_TABLES['personal_events'], 'eid,title,event_type,datestart,dateend,address1,address2,city,state,zipcode,allday,url,description,group_id,owner_id,perm_owner,perm_group,perm_members,perm_anon,uid,location,timestart,timeend',
                    "$eid,'$title','$event_type','$datestart','$dateend','$address1','$address2','$city','$state','$zipcode',$allday,'$url','$description',$group_id,$owner_id,$perm_owner,$perm_group,$perm_members,$perm_anon,{$P['uid']},'$location','$timestart','$timeend'");
            }
        }
        COM_rdfUpToDateCheck ();

        return COM_refresh ($_CONF['site_admin_url'] . '/event.php?msg=17');
    } else {
        $retval .= COM_siteHeader ('menu');
        $retval .= COM_startBlock ($LANG22[2], '',
                            COM_getBlockTemplate ('_msg_block', 'header'));
        $retval .= $LANG22[10];
        $retval .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
        $retval .= COM_siteFooter ();

        return $retval;
    }
}

/**
* lists all the events in the system
*
* @param    int     $page   page number to display 
* @return   string          HTML for list of events
*
*/
function listevents ($page = 1) 
{
    global $_CONF, $_TABLES, $LANG22, $LANG_ACCESS;

    $retval = '';

    if ($page < 1) {
        $page = 1;
    }

    $retval .= COM_startBlock ($LANG22[11], '',
                               COM_getBlockTemplate ('_admin_block', 'header'));

    $event_templates = new Template($_CONF['path_layout'] . 'admin/event');
    $event_templates->set_file(array('list'=>'eventlist.thtml','row'=>'listitem.thtml'));
    $event_templates->set_var('site_url', $_CONF['site_url']);
    $event_templates->set_var('site_admin_url', $_CONF['site_admin_url']);
    $event_templates->set_var('lang_newevent', $LANG22[18]);
    $event_templates->set_var('lang_adminhome', $LANG22[19]);
    $event_templates->set_var('lang_instructions', $LANG22[12]);
    $event_templates->set_var('lang_eventtitle', $LANG22[13]);
    $event_templates->set_var('lang_access', $LANG_ACCESS['access']);
    $event_templates->set_var('lang_startdate', $LANG22[14]);
    $event_templates->set_var('lang_enddate', $LANG22[15]);
    $event_templates->set_var('layout_url',$_CONF['layout_url']);

    $limit = (EVENTS_PER_PAGE * ($page - 1));
    $result = DB_query ("SELECT * FROM {$_TABLES['events']}" . COM_getPermSQL () . " ORDER BY datestart DESC LIMIT $limit," . EVENTS_PER_PAGE);
    $nrows = DB_numRows ($result);
    for ($i = 0; $i < $nrows; $i++) {
        $A = DB_fetchArray ($result);
        $access = SEC_hasAccess ($A['owner_id'], $A['group_id'],
                                 $A['perm_owner'], $A['perm_group'],
                                 $A['perm_members'], $A['perm_anon']);
        if ($access == 3) {
            $access = $LANG_ACCESS['edit'];
        } else {
            $access = $LANG_ACCESS['readonly'];
        }
        $ecount = (EVENTS_PER_PAGE * ($page - 1)) + $i + 1;
        $event_templates->set_var('event_id', $A['eid']);
        $event_templates->set_var('event_title', stripslashes ($A['title']));
        $event_templates->set_var('event_access', $access);
        $event_templates->set_var('event_startdate', $A['datestart']);
        $event_templates->set_var('event_enddate', $A['dateend']); 
        $event_templates->set_var('row_num', $ecount);
        $event_templates->parse('event_row', 'row', true);
    }

    $eresult = DB_query ("SELECT COUNT(*) AS count FROM {$_TABLES['events']}" . COM_getPermSQL ());
    $N = DB_fetchArray ($eresult);
    $numevents = $N['count'];
    if ($numevents > EVENTS_PER_PAGE) {
        $baseurl = $_CONF['site_admin_url'] . '/event.php';
        $numpages = ceil ($numevents / EVENTS_PER_PAGE);
        $event_templates->set_var ('google_paging',
                COM_printPageNavigation ($baseurl, $page, $numpages));
    } else {
        $event_templates->set_var ('google_paging', '');
    }

    $event_templates->parse('output', 'list');
    $retval .= $event_templates->finish($event_templates->get_var('output'));
    $retval .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));

    return $retval;
}

/**
* Delete an event
*
* @param    string  $eid    id of event to delete
* @param    string          HTML redirect
*/
function deleteEvent ($eid)
{
    global $_CONF, $_TABLES, $_USER;

    $result = DB_query ("SELECT owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon FROM {$_TABLES['events']} WHERE eid = '$eid'");
    $A = DB_fetchArray ($result);
    $access = SEC_hasAccess ($A['owner_id'], $A['group_id'], $A['perm_owner'],
            $A['perm_group'], $A['perm_members'], $A['perm_anon']);
    if ($access < 3) {
        COM_accessLog ("User {$_USER['username']} tried to illegally delete event $eid.");
        return COM_refresh ($_CONF['site_admin_url'] . '/event.php');
    }

    DB_delete ($_TABLES['events'], 'eid', $eid);
    DB_delete ($_TABLES['personal_events'], 'eid', $eid);

    return COM_refresh ($_CONF['site_admin_url'] . '/event.php?msg=18');
}

// MAIN
if (count ($HTTP_POST_VARS) == 0) {
    $http_input_vars = $HTTP_GET_VARS;
} else {
    $http_input_vars = $HTTP_POST_VARS;
}   
$mode = $http_input_vars['mode'];

if (($mode == $LANG22[22]) && !empty ($LANG22[22])) { // delete
    $eid = COM_applyFilter ($http_input_vars['eid']);
    if (!isset ($eid) || empty ($eid) || ($eid == 0)) {
        COM_errorLog ('Attempted to delete event eid=\''
                      . $http_input_vars['eid'] . "'");
        $display .= COM_refresh ($_CONF['site_admin_url'] . '/event.php');
    } else {
        $display .= deleteEvent ($eid);
    }
} else if (($mode == $LANG22[20]) && !empty ($LANG22[20])) { // save
    $display .= saveevent (COM_applyFilter ($HTTP_POST_VARS['eid']),
            $HTTP_POST_VARS['title'], $HTTP_POST_VARS['event_type'],
            $HTTP_POST_VARS['url'], $HTTP_POST_VARS['allday'],
            $HTTP_POST_VARS['start_month'], $HTTP_POST_VARS['start_day'],
            $HTTP_POST_VARS['start_year'], $HTTP_POST_VARS['start_hour'],
            $HTTP_POST_VARS['start_minute'], $HTTP_POST_VARS['start_ampm'],
            $HTTP_POST_VARS['end_month'], $HTTP_POST_VARS['end_day'],
            $HTTP_POST_VARS['end_year'], $HTTP_POST_VARS['end_hour'],
            $HTTP_POST_VARS['end_minute'], $HTTP_POST_VARS['end_ampm'],
            $HTTP_POST_VARS['location'], $HTTP_POST_VARS['address1'],
            $HTTP_POST_VARS['address2'], $HTTP_POST_VARS['city'],
            $HTTP_POST_VARS['state'], $HTTP_POST_VARS['zipcode'],
            $HTTP_POST_VARS['description'], $HTTP_POST_VARS['owner_id'],
            $HTTP_POST_VARS['group_id'], $HTTP_POST_VARS['perm_owner'],
            $HTTP_POST_VARS['perm_group'], $HTTP_POST_VARS['perm_members'],
            $HTTP_POST_VARS['perm_anon'], $mode);
} else if ($mode == 'editsubmission') {
    $id = COM_applyFilter ($http_input_vars['id']);
    $result = DB_query ("SELECT * FROM {$_TABLES['eventsubmission']} WHERE eid ='$id'");
    $A = DB_fetchArray ($result);
    $display .= COM_siteHeader ('menu');
    $display .= editevent ($mode, $A);
    $display .= COM_siteFooter ();
} else if ($mode == 'clone') {
    $eid = COM_applyFilter ($http_input_vars['eid']);
    $result = DB_query ("SELECT * FROM {$_TABLES['events']} WHERE eid ='$eid'");
    $A = DB_fetchArray ($result);
    $A['eid'] = COM_makesid ();
    $A['owner_id'] = $_USER['uid'];
    $display .= COM_siteHeader ('menu');
    $display .= editevent ($mode, $A);
    $display .= COM_siteFooter ();
} else if ($mode == 'edit') {
    $eid = COM_applyFilter ($http_input_vars['eid']);
    if (empty ($eid)) {
        $A = array ();
        $A['datestart'] = COM_applyFilter ($http_input_vars['datestart']);
        $A['timestart'] = COM_applyFilter ($http_input_vars['timestart']);
    } else {
        $result = DB_query ("SELECT * FROM {$_TABLES['events']} WHERE eid ='$eid'");
        $A = DB_fetchArray ($result);
    }
    $display .= COM_siteHeader ('menu');
    $display .= editevent ($mode, $A);
    $display .= COM_siteFooter ();
} else { // 'cancel' or no mode at all
    $display .= COM_siteHeader ('menu');
    if (isset ($http_input_vars['msg'])) {
        $display .= COM_showMessage (COM_applyFilter ($http_input_vars['msg'],
                                                      true));
    }
    $display .= listevents (COM_applyFilter ($http_input_vars['page'], true));
    $display .= COM_siteFooter ();
}

echo $display;

?>
