<?php

###############################################################################
# lang.php
# This is the german language file for the Geeklog Static Page Plug-in!
#
# Copyright (C) 2001 Tony Bibbs
# tony@tonybibbs.com
#
# German tranlation by Dirk Haun <dirk@haun-online.de>
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

###############################################################################
# Array Format: 
# $LANGXX[YY]:	$LANG - variable name
#		  	XX - file id number
#			YY - phrase id number
###############################################################################


$LANG_STATIC= array(
    newpage => "Neue Seite",
    adminhome => "Admin Home",
    staticpages => "Statische Seiten",
    staticpageeditor => "Editor f�r Statische Seiten",
    writtenby => "Autor",
    date => "Letztes Update",
    title => "Titel",
    content => "Inhalt",
    hits => "Treffer",
    staticpagelist => "Liste der Statischen Seiten",
    usealtheader => "Alt. Header verwenden",
    url => "URL",
    edit => "�ndern",
    lastupdated => "Letztes Update",
    pageformat => "Seitenformat",
    leftrightblocks => "Bl�cke links &amp; rechts",
    blankpage => "Leere Seite",
    noblocks => "Keine Bl�cke",
    leftblocks => "Bl�cke links",
    addtomenu => 'Ins Men� aufnehmen',
    label => 'Label',
    nopages => 'Es sind keine statischen Seiten vorhanden.',
    save => 'Speichern',
    preview => 'Vorschau',
    delete => 'L�schen',
    cancel => 'Abbruch',
    access_denied => 'Zugriff verweigert',
    access_denied_msg => 'Du hast unerlaubter Weise versucht, auf eine der Admin-Seiten f�r Statische Seiten zuzugreifen. Hinweis: Alle derartigen Versuche werden protokolliert',
    all_html_allowed => 'Alle HTML-Tags sind erlaubt',
    results => 'Gefundene Statische Seiten',
    author => 'Autor',
    no_title_or_content => 'Bitte mindestens die Felder <b>Titel</b> und <b>Inhalt</b> ausf�llen.',
    no_such_page_logged_in => 'Sorry '.$_USER['username'].'..',
    no_such_page_anon => 'Please log in..',
    no_page_access_msg => "This could be because you're not logged in, or not a member of {$_CONF["site_name"]}. Please <a href=\"{$_CONF['site_url']}/users.php?mode=new\"> become a member</a> of {$_CONF["site_name"]} to receive full membership access.",
    php_msg => 'PHP: ',
    php_warn => 'Hinweis: Wenn dieser Schalter aktiviert ist, wird in der Seite enthaltener PHP-Code ausgef�hrt. <em>Bitte mit Bedacht verwenden!</em>',
    exit_msg => 'Hinweistext: ',
    exit_info => 'Art des Hinweistextes, wenn kein Zugriff auf die Seite erlaubt ist: Aktiviert = "Anmeldung erforderlich", nicht aktiviert = "Zugriff verweigert".',
    deny_msg => 'Zugriff auf diese Seite ist nicht m�glich. Die Seite wurde entweder umbenannt oder gel�scht oder Du hast nicht die n�tigen Zugriffsrechte.',
    stats_headline => 'Top Ten der Statische Seiten',
    stats_page_title => 'Titel',
    stats_hits => 'Angezeigt',
    stats_no_hits => 'Es gibt keine Statischen Seiten oder sie wurden von niemandem gelesen.'
);

?>
