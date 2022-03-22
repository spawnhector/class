<?php
 //----------------------------------------------
 // Infosniper Live Visits
 // Description:     Live Tracking of Website Visitors
 // Script-Version:  1.0.0
 // Release Date:    2008/10/26
 // This file is part of Infosniper Livevisits.
 // Official web site and latest version: http://www.infosniper.net
 // Copyright © 2008 by Infosniper.net - All Rights Reserved.
 //----------------------------------------------
 // This program is free software; you can redistribute it and/or modify it under the
 // terms of the GNU General Public License as published by the Free Software
 // Foundation; either version 2 of the License, or (at your option) any later version.
 //
 // This program is distributed in the hope that it will be useful, but WITHOUT ANY
 // WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 // PARTICULAR PURPOSE. See the GNU General Public License for more details.
 //
 // You should have received a copy of the GNU General Public License along with this
 // program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth
 // Floor, Boston, MA 02110, USA
 //----------------------------------------------

 //----------------------------------------------
 if ( !defined ( "infosniper_livevisits" ) ) { exit; }
 //----------------------------------------------

 //----------------------------------------------
 // Database Settings
 $infosniper_db_host     = "localhost";
 $infosniper_db_name     = "";
 $infosniper_db_user     = "";
 $infosniper_db_password = "";

 // Access Password
 $infosniper_password = "";

 // Personal Query Key - Please enter your personal query key here
 $infosniper_queryKey = "";
 // Only 50 queries per day are free
 // If you want to use more queries, please visit http://www.infosniper.net for further information.

 // Query Result Language - Please choose the language of the query results
 // 1 - english (default if not set)
 // 2 - german
 $infosniper_queryLanguage = "";

 // Exception Domains - Please enter all tracked domains
 // All Domains edited here are used to be excluded within the Referer Stats
 // Please enter all values without "http://www."
 $infosniper_exception_domains = array ( "domain.com" );
 //----------------------------------------------
?>