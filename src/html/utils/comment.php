<?php
	/*
	$Revision$
	
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	
	(c) Tim Brown, 2007
	<mailto:timb@nth-dimension.org.uk>
	<http://www.nth-dimension.org.uk/> / <http://www.machine.org.uk/>
	*/

	require_once(dirname(__FILE__) . "/../libs/misc.lib");
	set_error_handler("ErrorHandler");
	require_once(dirname(__FILE__) . "/../classes/config.class");
	require_once(dirname(__FILE__) . "/../classes/blogdata.class");
	$appconfig = new Config();
	$mysqlhandle = mysql_pconnect($appconfig->mysqlhostname, $appconfig->mysqlusername, $appconfig->mysqlpassword);
	mysql_select_db($appconfig->mysqldatabase, $mysqlhandle);
	session_start();
	$blogdata = new BlogData($appconfig, $mysqlhandle);
	if (isset($_GET["blogid"]) && is_numeric($_GET["blogid"]) && isset($_POST["nonce"]) && isset($_SESSION["nonce"]) && ($_POST["nonce"] == $_SESSION["nonce"]) && isset($_POST["title"]) && isset($_POST["post"])) {
		$blogdata->Comment($_GET["blogid"], $_POST["nonce"], $_POST["title"], $_POST["post"]);
	} else {
		$blogdata->Comment();
	}
?>
