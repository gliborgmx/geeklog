<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.3                                                               |
// +---------------------------------------------------------------------------+
// | config.php                                                                |
// | Geeklog configuration file.                                               |
// |                                                                           |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000,2001 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs	- tony@tonybibbs.com                           |
// |          Mark Limburg	- mlimburg@dingoblue.net.au                    |
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
// | See the INSTALL.HTML file for more information on configuration           | 
// | information                                                               |
// +---------------------------------------------------------------------------+
//
// $Id: config.php,v 1.14 2001/10/18 14:04:57 tony_bibbs Exp $

// +---------------------------------------------------------------------------+
// | SERVER SETTINGS                                                           |
// |                                                                           |
// | All paths must have a trailing slash ('/'). The 'path' value signifies    |
// | where the config.php (this file) resides                                  | 
// +---------------------------------------------------------------------------+

$_CONF['path']          = '/path/to/geeklog/';
$_CONF['path_system']   = $_CONF['path'] . 'system/';
$_CONF['path_html']     = $_CONF['path'] . 'public_html/';
$_CONF['path_log']		= $_CONF['path'] . 'logs/';
$_CONF['path_language']	= $_CONF['path'] . 'language/';
$_CONF['rdf_file']		= $_CONF['path_html'] . 'backend/geeklog.rdf';

// +---------------------------------------------------------------------------+
// | SITE SETTINGS                                                             |
// |                                                                           |
// | These settings help define your Geeklog site.                             |
// +---------------------------------------------------------------------------+

$_CONF['site_name']     = 'Geeklog Site';
$_CONF['site_slogan']   = 'Another Nifty GeekLog Site';
$_CONF['site_mail']     = 'admin@example.com';
$_CONF['site_url']      = 'http://www.example.com';
$_CONF['layout']        = 'classic';
$_CONF['layout_url']    = $_CONF['site_url'] . '/layout/' . $_CONF['layout'];

// +---------------------------------------------------------------------------+
// | LOCALE SETTINGS                                                           |
// +---------------------------------------------------------------------------+

$_CONF['language']      = 'english';
$_CONF['locale']        = 'en-gb';
$_CONF['date']          = '%A, %B %d %Y @ %I:%M %p %Z';
$_CONF['daytime']		= '%m/%d %I:%M%p';
$_CONF['shortdate']		= '%x';

// +---------------------------------------------------------------------------+
// | SESSION SETTINGS                                                          | 
// |                                                                           |
// | cookie_ip will store md5(remoteip + randomnum) as the session ID in the   |
// | cookie. This is more secure but will more than likely require dialed up   |
// | users to login each and every time.  If ipbasedsessid is turned off       |
// | (which it is by default) it will just store a random number as the        |
// | session ID in the cookie.                                                 | 
// |                                                                           |
// | default_perm_cookie_timeout is how long you want the permanent cookie     |
// | to persist for.  This can be overridden by the user in their user prefs   |
// | if they want.  If you don't want to allow permanent cookies set the       |
// | value to an empty string ''.                                              |
// |                                                                           |
// | session_cookie_time is how long you want the session cookie to persist    |
// | for.  Only really useful in scenarios where you don't want to allow       |
// | permanent cookies                                                         |
// +---------------------------------------------------------------------------+

$_CONF['cookie_ip']                     = 1;
$_CONF['default_perm_cookie_timeout']   = 3600 * 9;
$_CONF['session_cookie_timeout']        = 7200;
$_CONF['cookie_session']                = 'gl_session';
$_CONF['cookie_name']                   = 'geeklog';
$_CONF['cookie_path']                   = '/';


// +---------------------------------------------------------------------------+
// | PLUGIN SETTINGS                                                           |
// |                                                                           |
// | You can have only one of the following two lines uncommented. The         |
// | first one is for *nix users and assumes you are using tar.                |
// | The second entry is for windows users and this is configured to work with |
// | FilZip.  You can get FilZip from http://www.filzip.com.  Make sure        |
// | you add the FilZip directory to your path OR fully qualify the path       |
// | here. Regardless of OS, make sure you leave a trailing space at the end.  |
// +---------------------------------------------------------------------------+

$_CONF['unzipcommand']      = '/bin/tar -C ' . $_CONF['path'] . 'plugins/ -xzf ';
// $_CONF['unzipcommand']    = 'filzip.exe -e -r ';

// +---------------------------------------------------------------------------+
// | Command needed to remove a directory recursively and quietly              |
// | First one is typical for *nix boxes and the second is for                 |
// | windows machines.                                                         |
// +---------------------------------------------------------------------------+

$_CONF['rmcommand'] 		= '/bin/rm -Rf ';
// $_CONF['rmcommand'] 		= 'rmdir /S /Q ';

// +---------------------------------------------------------------------------+
// | This is really redundant but I am including this as a reminder that those |
// | people writing Geeklog Plug-ins that are OS dependent should check either |
// | the $_CONF variable below or PHP_OS directly.  If you are writing an      |
// | addon that is OS specific your addon should check the system is using the |
// | right OS.  If not, be sure to show a friendly message that says their GL  |
// | distro isn't running the right OS. Do not modify this value               |
// +---------------------------------------------------------------------------+

$_CONF['ostype'] 		= PHP_OS;

// +---------------------------------------------------------------------------+
// | MISCELLANEOUS SETTINGS                                                    |
// |                                                                           |
// | These are other various Geeklog settings.  The defaults should work OK    |
// | for most situations.                                                      |
// +---------------------------------------------------------------------------+

// Submission Settings

$_CONF['loginrequired'] = 0; 
$_CONF['speedlimit']    = 300; // in seconds

// Topic Settings

// Topics can be assigned a sort number so that you can control what order they
// appear in the 'Sections' block on the homepage.  If you prefer you can also
// have this sort alphabetically by changing the value to 'alpha' (default is
// by 'sortnum'

$_CONF['sortmethod'] = 'sortnum';

// Show the number of stories in a topic in Section Block
$_CONF['showstorycount'] = 1;

// Show the number of story submissions for a topic in Section Block
$_CONF["showsubmissioncount"] = 1;

// Show any new articles, comments and links
$_CONF['whatsnewbox'] = 1;

// Let users get stories emailed to them
// Requires cron and the use of php as a shell script
$_CONF['emailstories']  = 1;

// Following times are in seconds
$_CONF['newstoriesinterval']    = 86400;
$_CONF['newcommentsinterval']   = 172800;
$_CONF['newlinksinterval']      = 1209600;

// Calendar Settings
$_CONF['personalcalendars']     = 0;
$_CONF['showupcomingevents']    = 1;

// Story Settings
$_CONF['pagetitle']         = '';
$_CONF['backend']           = 1;
$_CONF['limitnews']         = 10;
$_CONF['minnews']           = 1;		// minimum number of stories per page
$_CONF['olderstuff']        = 1;
$_CONF['olderstufforder']	= 2;
$_CONF['contributedbyline']	= 1;		// If 1, show contributed by line
$_CONF['article_align']		= 'left'; 	// Options are left or right.
	
// Comment Settings
$_CONF['speedlimit2']       = 60;
$_CONF['loginrequired2']    = 0;
$_CONF['comment_limit']     = 100;        // Default Number of Comments under Story
$_CONF['comment_mode']      = 'threaded'; // Default Comment Mode; from 'threaded','nestde','nocomments',and 'flat'

// Poll Settings
$_CONF['maxanswers'] 		= '10';
$_CONF['pollcookietime'] 	= '86400';
$_CONF['polladdresstime'] 	= '604800';
$_CONF['pollorder'] 		= 1;

// Parameters for checking words and HTML tags

$_CONF['allowablehtml'] = '<p>,<b>,<i>,<a>,<em>,<br>,<tt>,<hr>,<li>,<ol>,<div>,<ul>';
$_CONF['parsemode']     = 1;

// Define a few useful things for GL
define('LB',"\n");
define('VERSION', '1.3');

?>
