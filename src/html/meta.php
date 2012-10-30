<?php
	/*
	$Header: /var/lib/cvsd/var/lib/cvsd/Pontoon/src/html/meta.php,v 1.2 2012-10-30 17:01:40 timb Exp $

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

	require_once("libs/misc.lib");
	set_error_handler("ErrorHandler", E_ALL);
	require_once("classes/metapage.class");
	$page = new MetaPage();
	exit(0);
?>
