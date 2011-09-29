<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Calendar Plugin 1.1                                                       |
// +---------------------------------------------------------------------------+
// | Upgrade SQL                                                               |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2009 by the following authors:                              |
// |                                                                           |
// | Authors: Dirk Haun        - dirk AT haun-online DOT de                    |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is licensed under the terms of the GNU General Public License|
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                      |
// | See the GNU General Public License for more details.                      |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+

/**
* PG SQL updates
*
* @package Calendar
*/

$_UPDATES = array(

    '1.1.1' => array(
        // Set new Tab column to whatever fieldset is
        "UPDATE {$_TABLES['conf_values']} SET tab = fieldset WHERE group_name = 'calendar'",   
        "INSERT INTO {$_TABLES['features']} (ft_name, ft_descr, ft_gl_core) VALUES ('config.calendar.tab_main', 'Access to configure general calendar settings', 0)",
        "INSERT INTO {$_TABLES['features']} (ft_name, ft_descr, ft_gl_core) VALUES ('config.calendar.tab_permissions', 'Access to configure event default permissions', 0)",
        "INSERT INTO {$_TABLES['features']} (ft_name, ft_descr, ft_gl_core) VALUES ('config.calendar.tab_autotag_permissions', 'Access to configure event autotag usage permissions', 0)"        
    ),     

    '1.1.2' => array(
        // Delete Events block since moved to dynamic
        "DELETE FROM {$_TABLES['blocks']} WHERE phpblockfn = 'phpblock_calendar'", 
        "INSERT INTO {$_TABLES['features']} (ft_name, ft_descr, ft_gl_core) VALUES ('config.calendar.tab_events_block', 'Access to configure events block', 0)"
    )    
    
);

/**
 * Add is new security rights for the Group "Calendar Admin"
 *
 */
function calendar_update_ConfigSecurity_1_1_1()
{
    global $_TABLES;
    
    // Add in security rights for Calendar Admin
    $group_id = DB_getItem($_TABLES['groups'], 'grp_id',
                            "grp_name = 'Calendar Admin'");

    if ($group_id > 0) {
        $ft_names[] = 'config.calendar.tab_main';
        $ft_names[] = 'config.calendar.tab_permissions';
        $ft_names[] = 'config.calendar.tab_autotag_permissions';
        
        foreach ($ft_names as $name) {
            $ft_id = DB_getItem($_TABLES['features'], 'ft_id', "ft_name = '$name'");         
            if ($ft_id > 0) {
                $sql = "INSERT INTO {$_TABLES['access']} (acc_ft_id, acc_grp_id) VALUES ($ft_id, $group_id)";
                DB_query($sql);
            }
        }        
    }    

}

/**
 * Add in new security rights for the Group "Calendar Admin"
 *
 */
function calendar_update_ConfigSecurity_1_1_2()
{
    global $_TABLES;
    
    // Add in security rights for Calendar Admin
    $group_id = DB_getItem($_TABLES['groups'], 'grp_id',
                            "grp_name = 'Calendar Admin'");

    if ($group_id > 0) {
        $ft_id = DB_getItem($_TABLES['features'], 'ft_id', "ft_name = 'config.calendar.tab_events_block'");   
        $sql = "INSERT INTO {$_TABLES['access']} (acc_ft_id, acc_grp_id) VALUES ($ft_id, $group_id)";
        DB_query($sql);    
    }    

}

?>
