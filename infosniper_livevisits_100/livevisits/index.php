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
 // Internal Webserver Path to this Script
 $infosniper_internal_path = $_SERVER [ "DOCUMENT_ROOT" ]."/livevisits/";
 // Do not forget to add a "/" at the end

 // no output of any errors
 error_reporting(0);

 // start session
 @session_start();

 // define constants for security include purposes
 define ( "infosniper_livevisits" , "yes" );
 //----------------------------------------------
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Live Tracking of Website Visitors</title>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
 <meta http-equiv="expires" content="0" />
 <meta name="description" content="Free Google Geolocate IP Address and Domain Lookup Service with Whois Map, Country Map, Region Map ,City Map and free XML Interface to query Whois Geolocate information." />
 <meta name="keywords" content="Live Tracking of Website Visitors,Google Geolocate IP Address Lookup Map Locate Targeting,IP Whois,Provider Database,XML IP Address Locate,XML free IP Whois,IP Geo Track,IP2Country,IP2City,City IP Address Map,Whois Geo Targeting,Visitor IP Geo Map,Domain Whois Locate,geolocate ip city" />
 <meta name="language" content="en" />
 <meta name="content-Language" content="en" />
 <meta name="robots" content="all" />
 <meta name="programmed" content="Reimar Hoven" />
 <meta name="copyright" content="Copyright Reimar Hoven 2008" />

<?php
 //----------------------------------------------
 // Interval Start
 if ( $_GET [ "from_time" ] )
  {
   //----------------------------------------------
   $pattern = "/^[a-zA-Z]/";
   if ( preg_match ( $pattern , $_GET [ "from_time" ] ) ) { $from_time = ""; }
   else { $from_time = $_GET [ "from_time" ]; $from_time_interval = mktime  ( 0 , 0 , 0 , substr ( $_GET [ "from_time" ] , 3 , 2 ) , substr ( $_GET [ "from_time" ] , 0 , 2 )  , substr ( $_GET [ "from_time" ] , 6 , 4 ) ); }
   //----------------------------------------------
  }
 else { $from_time = ""; $from_time_interval = 0;	}
 //----------------------------------------------
 // Interval Stop
 if ( $_GET [ "until_time" ] )
  {
   //----------------------------------------------
   $pattern = "/^[a-zA-Z]/";
   if ( preg_match ( $pattern , $_GET [ "until_time" ] ) ) { $until_time = ""; }
   else { $until_time = $_GET [ "until_time" ]; $until_time_interval = mktime  ( 23 , 59 , 59 , substr ( $_GET [ "until_time" ] , 3 , 2 ) , substr ( $_GET [ "until_time" ] , 0 , 2 )  , substr ( $_GET [ "until_time" ] , 6 , 4 ) ); }
   //----------------------------------------------
  }
 else { $until_time = "";	$until_time_interval = 0;	}
 //----------------------------------------------
 // Show All/Visitors/Robots
 if ( $until_time == "" )
  {
   //----------------------------------------------
   if ( $_GET [ "show" ] == "" )
    {
     //----------------------------------------------
     if ( $_GET [ "what" ] )
      {
       //----------------------------------------------
       if ( $_GET [ "what" ] == "All"       ) { echo '<meta http-equiv="refresh" content="25; URL='.$_SERVER [ "PHP_SELF" ].'" />'; }
       if ( $_GET [ "what" ] == "Visitors"  ) { echo '<meta http-equiv="refresh" content="25; URL='.$_SERVER [ "PHP_SELF" ].'?what=Visitors" />'; }
       if ( $_GET [ "what" ] == "Robots"    ) { echo '<meta http-equiv="refresh" content="25; URL='.$_SERVER [ "PHP_SELF" ].'?what=Robots" />'; }
       //----------------------------------------------
   	  }
     else { echo '<meta http-equiv="refresh" content="25; URL='.$_SERVER [ "PHP_SELF" ].'" />'; }
     //----------------------------------------------
    }
  //----------------------------------------------
  }
 //----------------------------------------------
?>

 <style type="text/css"> @import url("layout/calendar/skins/aqua/theme.css");</style>
 <script type="text/javascript" src="layout/calendar/calendar.js"></script>
 <script type="text/javascript" src="layout/calendar/calendar-setup.js"></script>
 <script type="text/javascript" src="layout/calendar/lang/calendar-en.js"></script>

 <link href="layout/infosniper-livevisits-layout.css" rel="stylesheet" type="text/css" />
 <link href="layout/infosniper-livevisits-color.css"  rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>

<?php
//----------------------------------------------
 if ( $_GET [ "show" ] == "logout" )
  {
   //----------------------------------------------
   @session_destroy();
   echo '
   <div id="login">
    <table width="100%" cellspacing="0" cellpadding="0">
     <tr>
      <td class="content-header">
       <center>Logout successful. Click <a class="stats" href="'.$_SERVER [ "PHP_SELF" ].'">here</a> to login again.</center>
      </td>
     </tr>
    </table>
   </div>
   </body></html>
   ';
   exit;
   //----------------------------------------------
  }
//----------------------------------------------
?>

<script type="text/javascript">
 <!--
	function toggleDetail (detailid)
	 {
	  var detaildiv = detailid;
	  var obj = document.getElementById(detaildiv);
	  if (obj.style.display == "none" || obj.style.display == '')
	     obj.style.display = "block";
	  else
	   obj.style.display = "none";
	 }
  function openmap5 (url)
   {
    var what = window.open(url, "IP on Map", "width=410,height=410,statusbar=no,scrollbars=no,resizable=no,menubar=no");
    what.focus();
   }

  var win=null;

  function openmap (whereurl)
   {
  	myleft=(screen.width)?(screen.width-470)/2:100;mytop=(screen.height)?(screen.height-320)/2:100;
  	settings="width=410,height=410,top=" + mytop + ",left=" + myleft + ",scrollbars=no,location=no,directories=no,status=yes,menubar=no,toolbar=no,resizable=no,dependent=yes";
  	win=window.open(whereurl,"IP on Map",settings);
  	win.focus();
   }
 //-->
</script>

    <?php
     //----------------------------------------------
     // include config file
     include ( $infosniper_internal_path."config/infosniper_livevisits_config.php" );

     // get the credits
     $infosniper_query_credits = file_get_contents ( "http://www.infosniper.net/location-based-service-account-livevisits.php?key=".$infosniper_queryKey );
     if ( $infosniper_query_credits == "nothing" ) { echo "wrong API key"; exit; }
		//----------------------------------------------
		if ( $_POST [ "pass" ] == $infosniper_password )
		 {
		 	//----------------------------------------------
		 	$_SESSION [ "inside" ] = "yes";
		 	//----------------------------------------------
		 }
		//----------------------------------------------
		 if ( !$_SESSION [ "inside" ] )
		  {
		   //----------------------------------------------
		   @session_start();
		   echo '
		   <div id="login">
		    <table width="100%" cellspacing="0" cellpadding="0">
		     <tr>
		      <td class="content-header">
		       <center>
		        <form name="login" action="'.$_SERVER [ "PHP_SELF" ].'" method="post">
		         Password&nbsp;&nbsp;<input type="password" size="10" name="pass">&nbsp;<input type="submit" value="Login">
		     	  </form>
		       </center>
		      </td>
		     </tr>
		    </table>
		   </div>
		   </body></html>
		   ';
		   exit;
	     //----------------------------------------------
			}
		 //----------------------------------------------

     // include database query function
     include ( $infosniper_internal_path."func/infosniper_livevisits_dbquery.php"  );

     // include xml query function
     include ( $infosniper_internal_path."func/infosniper_livevisits_xmlquery.php" );
     //----------------------------------------------
     // Create DB Tables if not exist
     $infosniper_query = "CREATE TABLE IF NOT EXISTS infosniper_livevisits_main ( id bigint(20) NOT NULL auto_increment, timestamp varchar(15) collate utf8_unicode_ci NOT NULL, ipaddress varchar(20) collate utf8_unicode_ci NOT NULL, robot bigint(20) default NULL, browser bigint(20) default NULL, os bigint(20) default NULL, sitename bigint(20) default NULL, referer bigint(20) default NULL, PRIMARY KEY (id), KEY ipaddress (ipaddress), KEY timestamp (timestamp) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "CREATE TABLE IF NOT EXISTS infosniper_livevisits_robot ( id bigint(5) unsigned NOT NULL auto_increment, name varchar(50) collate utf8_unicode_ci default NULL, version varchar(15) collate utf8_unicode_ci default NULL, title varchar(50) collate utf8_unicode_ci default NULL, uri varchar(100) collate utf8_unicode_ci default NULL, icon varchar(50) collate utf8_unicode_ci default NULL, PRIMARY KEY  (id), KEY name (name), KEY version (version) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "CREATE TABLE IF NOT EXISTS infosniper_livevisits_os ( id bigint(5) unsigned NOT NULL auto_increment, name varchar(50) collate utf8_unicode_ci default NULL, version varchar(15) collate utf8_unicode_ci default NULL, title varchar(50) collate utf8_unicode_ci default NULL, uri varchar(100) collate utf8_unicode_ci default NULL, icon varchar(50) collate utf8_unicode_ci default NULL, PRIMARY KEY  (id), KEY name (name), KEY version (version) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "CREATE TABLE IF NOT EXISTS infosniper_livevisits_browser ( id bigint(5) unsigned NOT NULL auto_increment, name varchar(50) collate utf8_unicode_ci default NULL, version varchar(15) collate utf8_unicode_ci default NULL, title varchar(50) collate utf8_unicode_ci default NULL, uri varchar(100) collate utf8_unicode_ci default NULL, icon varchar(50) collate utf8_unicode_ci default NULL, PRIMARY KEY  (id), KEY name (name), KEY version (version) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "CREATE TABLE IF NOT EXISTS infosniper_livevisits_sitename ( id bigint(5) unsigned NOT NULL auto_increment, name varchar(250) collate utf8_unicode_ci default NULL, PRIMARY KEY  (id), KEY name (name) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "CREATE TABLE IF NOT EXISTS infosniper_livevisits_referer ( id bigint(5) unsigned NOT NULL auto_increment, name varchar(250) collate utf8_unicode_ci default NULL, PRIMARY KEY  (id), KEY name (name) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "CREATE TABLE IF NOT EXISTS infosniper_livevisits_ip ( ipaddress varchar(20) collate utf8_unicode_ci NOT NULL, hostname varchar(150) collate utf8_unicode_ci NOT NULL, provider varchar(150) collate utf8_unicode_ci NOT NULL, country varchar(100) collate utf8_unicode_ci NOT NULL, countrycode varchar(5) collate utf8_unicode_ci NOT NULL, state varchar(100) collate utf8_unicode_ci NOT NULL, city varchar(100) collate utf8_unicode_ci NOT NULL, areacode varchar(10) collate utf8_unicode_ci NOT NULL, postalcode varchar(10) collate utf8_unicode_ci NOT NULL, dmacode varchar(10) collate utf8_unicode_ci NOT NULL, latitude varchar(20) collate utf8_unicode_ci NOT NULL, longitude varchar(20) collate utf8_unicode_ci NOT NULL, PRIMARY KEY (ipaddress) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );
     //----------------------------------------------
     // Optimize All Tables
     $infosniper_query = "OPTIMIZE TABLE infosniper_livevisits_main";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "OPTIMIZE TABLE infosniper_livevisits_robot";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "OPTIMIZE TABLE infosniper_livevisits_os";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "OPTIMIZE TABLE infosniper_livevisits_browser";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "OPTIMIZE TABLE infosniper_livevisits_sitename";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "OPTIMIZE TABLE infosniper_livevisits_referer";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );

     $infosniper_query = "OPTIMIZE TABLE infosniper_livevisits_ip";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );
     //----------------------------------------------

     //----------------------------------------------
     // Show All/Visitors/Robots
     if ( $_GET [ "show" ] )
      {
       //----------------------------------------------
       if ( $_GET [ "show" ] == "robots"   ) { $infosniper_show_what = "Robots";   $infosniper_show_what_selected_robots   = " selected=\"selected\""; }
       if ( $_GET [ "show" ] == "browsers" ) { $infosniper_show_what = "Visitors"; $infosniper_show_what_selected_visitors = " selected=\"selected\""; }
       if ( $_GET [ "show" ] == "os"       ) { $infosniper_show_what = "Visitors"; $infosniper_show_what_selected_visitors = " selected=\"selected\""; }
       //----------------------------------------------
     	}
     else { $infosniper_show_what = "All"; $infosniper_show_what_selected_all = " selected=\"selected\""; }
     //----------------------------------------------

     //----------------------------------------------
     // Show All/Visitors/Robots
     if ( $_GET [ "what" ] )
      {
       //----------------------------------------------
       if ( $_GET [ "what" ] == "All"       ) { $infosniper_show_what = "All";      $infosniper_show_what_selected_all      = " selected=\"selected\""; }
       if ( $_GET [ "what" ] == "Visitors"  ) { $infosniper_show_what = "Visitors"; $infosniper_show_what_selected_visitors = " selected=\"selected\""; }
       if ( $_GET [ "what" ] == "Robots"    ) { $infosniper_show_what = "Robots";   $infosniper_show_what_selected_robots   = " selected=\"selected\""; }
       //----------------------------------------------
     	}
     else { $infosniper_show_what = "Visitors"; $infosniper_show_what_selected_visitors = " selected=\"selected\""; }
     //----------------------------------------------

     //----------------------------------------------
     // Hits Total
     if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main WHERE browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main WHERE robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main WHERE infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       $infosniper_results_hits_total = $temp_query [ 0 ] [ 0 ];
       unset ( $temp_query );
       //----------------------------------------------
      }
     else
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main WHERE browser > 0" , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main WHERE robot > 0"   , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main" , 1 ); }
       $infosniper_results_hits_total = $temp_query [ 0 ] [ 0 ];
       unset ( $temp_query );
       //----------------------------------------------
      }
     //----------------------------------------------
     // Hits Total Different
     if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       $infosniper_results_hits_total_distinct = count ( $temp_query );
       unset ( $temp_query );
       //----------------------------------------------
      }
     else
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE browser > 0" , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE robot > 0"   , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main" , 1 ); }
       $infosniper_results_hits_total_distinct = count ( $temp_query );
       unset ( $temp_query );
       //----------------------------------------------
      }
     //----------------------------------------------
     // Log Duration
     if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT ( MAX(timestamp) - MIN(timestamp) ) FROM infosniper_livevisits_main WHERE browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT ( MAX(timestamp) - MIN(timestamp) ) FROM infosniper_livevisits_main WHERE robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT ( MAX(timestamp) - MIN(timestamp) ) FROM infosniper_livevisits_main WHERE infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       $infosniper_results_duration = round ( ( ( $temp_query [ 0 ] [ 0 ] ) / 3600 ) / 24 )." days";
       unset ( $temp_query );
       //----------------------------------------------
      }
     else
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT ( MAX(timestamp) - MIN(timestamp) ) FROM infosniper_livevisits_main WHERE browser > 0" , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT ( MAX(timestamp) - MIN(timestamp) ) FROM infosniper_livevisits_main WHERE robot > 0"   , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT ( MAX(timestamp) - MIN(timestamp) ) FROM infosniper_livevisits_main" , 1 ); }
       $infosniper_results_duration = round ( ( ( $temp_query [ 0 ] [ 0 ] ) / 3600 ) / 24 )." days";
       unset ( $temp_query );
       //----------------------------------------------
      }
     //----------------------------------------------
     // First Log Entry
     if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT MIN(timestamp) FROM infosniper_livevisits_main WHERE browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT MIN(timestamp) FROM infosniper_livevisits_main WHERE robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT MIN(timestamp) FROM infosniper_livevisits_main WHERE infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       $infosniper_timestamp_start     = mktime ( 0 , 0 , 0 , date ( "m" , $temp_query [ 0 ] [ 0 ] ) , date ( "d" , $temp_query [ 0 ] [ 0 ] ) , date ( "Y" , $temp_query [ 0 ] [ 0 ] ) );
       $infosniper_results_first_entry = date ( "Y/m/d  h:i:s a" , $temp_query [ 0 ] [ 0 ] );
       unset ( $temp_query );
       //----------------------------------------------
      }
     else
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT MIN(timestamp) FROM infosniper_livevisits_main WHERE browser > 0" , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT MIN(timestamp) FROM infosniper_livevisits_main WHERE robot > 0"   , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT MIN(timestamp) FROM infosniper_livevisits_main" , 1 ); }
       $infosniper_timestamp_start     = mktime ( 0 , 0 , 0 , date ( "m" , $temp_query [ 0 ] [ 0 ] ) , date ( "d" , $temp_query [ 0 ] [ 0 ] ) , date ( "Y" , $temp_query [ 0 ] [ 0 ] ) );
       $infosniper_results_first_entry = date ( "Y/m/d  h:i:s a" , $temp_query [ 0 ] [ 0 ] );
       unset ( $temp_query );
       //----------------------------------------------
      }
     //----------------------------------------------

     //----------------------------------------------
     // Show number of entries
     if ( $_GET [ "number" ] )
      {
       //----------------------------------------------
       if ( $_GET [ "number" ] == "25"   ) { $infosniper_number_entries = "Limit 0,25";   $infosniper_number_entries_selected25   = " selected=\"selected\""; }
       if ( $_GET [ "number" ] == "50"   ) { $infosniper_number_entries = "Limit 0,50";   $infosniper_number_entries_selected50   = " selected=\"selected\""; }
       if ( $_GET [ "number" ] == "100"  ) { $infosniper_number_entries = "Limit 0,100";  $infosniper_number_entries_selected100  = " selected=\"selected\""; }
       if ( $_GET [ "number" ] == "200"  ) { $infosniper_number_entries = "Limit 0,200";  $infosniper_number_entries_selected200  = " selected=\"selected\""; }
       if ( $_GET [ "number" ] == "500"  ) { $infosniper_number_entries = "Limit 0,500";  $infosniper_number_entries_selected500  = " selected=\"selected\""; }
       if ( $_GET [ "number" ] == "1000" ) { $infosniper_number_entries = "Limit 0,1000"; $infosniper_number_entries_selected1000 = " selected=\"selected\""; }
       if ( $_GET [ "number" ] == "2000" ) { $infosniper_number_entries = "Limit 0,2000"; $infosniper_number_entries_selected2000 = " selected=\"selected\""; }
       //----------------------------------------------
     	}
     else { $infosniper_number_entries = "Limit 0,28"; $infosniper_number_entries_selected25 = " selected=\"selected\""; }
     //----------------------------------------------

     //----------------------------------------------
     // Last Log Entry
     if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT MAX(timestamp) FROM infosniper_livevisits_main WHERE browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT MAX(timestamp) FROM infosniper_livevisits_main WHERE robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT MAX(timestamp) FROM infosniper_livevisits_main WHERE infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval , 1 ); }
       $infosniper_timestamp_stop     = mktime (  23 ,  59 ,  59 , date ( "m" , $temp_query [ 0 ] [ 0 ] ) , date ( "d" , $temp_query [ 0 ] [ 0 ] ) , date ( "Y" , $temp_query [ 0 ] [ 0 ] ) );
       $infosniper_results_last_entry = date ( "Y/m/d  h:i:s a" , $temp_query [ 0 ] [ 0 ] );
       unset ( $temp_query );
       //----------------------------------------------
      }
     else
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT MAX(timestamp) FROM infosniper_livevisits_main WHERE browser > 0" , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT MAX(timestamp) FROM infosniper_livevisits_main WHERE robot > 0"   , 1 ); }
       else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT MAX(timestamp) FROM infosniper_livevisits_main" , 1 ); }
       $infosniper_timestamp_stop     = mktime (  23 ,  59 ,  59 , date ( "m" , $temp_query [ 0 ] [ 0 ] ) , date ( "d" , $temp_query [ 0 ] [ 0 ] ) , date ( "Y" , $temp_query [ 0 ] [ 0 ] ) );
       $infosniper_results_last_entry = date ( "Y/m/d  h:i:s a" , $temp_query [ 0 ] [ 0 ] );
       unset ( $temp_query );
       //----------------------------------------------
      }
     //----------------------------------------------

     //----------------------------------------------
     if ( $_GET [ "show" ] == "visits" )
      {
       //----------------------------------------------
       $show_value = "visits";
       $show_title = "Visits per Day";
       $infosniper_day_stats_start = array ();
       $infosniper_day_stats_stop  = array ();
       $infosniper_day_stats       = array ();
       for ( $z = $infosniper_timestamp_start ; $z <= ( $infosniper_timestamp_stop + 86400 ); $z+=86400 )
        {
         //----------------------------------------------
         $infosniper_day_stats_start [] = mktime ( 0 , 0 , 0 , date ( "m" , $z ) , date ( "d" , $z ) , date ( "Y" , $z ) );
         //----------------------------------------------
       	}
       foreach ( $infosniper_day_stats_start as $value )
        {
         //----------------------------------------------
         $infosniper_day_stats_stop [] = $value + 86399;
         //----------------------------------------------
       	}
       for ( $temp_counter = 0 ; $temp_counter < count ( $infosniper_day_stats_start ) ; $temp_counter++ )
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE timestamp BETWEEN ".$infosniper_day_stats_start [ $temp_counter ]." AND ".$infosniper_day_stats_stop [ $temp_counter ]." AND browser > 0" , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE timestamp BETWEEN ".$infosniper_day_stats_start [ $temp_counter ]." AND ".$infosniper_day_stats_stop [ $temp_counter ]." AND robot > 0"   , 1 ); }
         else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE timestamp BETWEEN ".$infosniper_day_stats_start [ $temp_counter ]." AND ".$infosniper_day_stats_stop [ $temp_counter ] , 1 ); }
         $infosniper_day_stats [ date ( "Y/m/d" , $infosniper_day_stats_start [ $temp_counter ] ) ] = count ( $temp_query );
         unset ( $temp_query );
         //----------------------------------------------
        }
       unset ( $temp_counter );
       //----------------------------------------------
      }
     //----------------------------------------------

     //----------------------------------------------
     if ( $_GET [ "show" ] == "visithits" )
      {
       //----------------------------------------------
       $show_value = "visithits";
       $show_title = "Hits per Day";
       $infosniper_day_stats_start = array ();
       $infosniper_day_stats_stop  = array ();
       $infosniper_day_stats       = array ();
       for ( $z = $infosniper_timestamp_start ; $z <= ( $infosniper_timestamp_stop + 86400 ); $z+=86400 )
        {
         //----------------------------------------------
         $infosniper_day_stats_start [] = mktime ( 0 , 0 , 0 , date ( "m" , $z ) , date ( "d" , $z ) , date ( "Y" , $z ) );
         //----------------------------------------------
       	}
       foreach ( $infosniper_day_stats_start as $value )
        {
         //----------------------------------------------
         $infosniper_day_stats_stop [] = $value + 86399;
         //----------------------------------------------
       	}
       for ( $temp_counter = 0 ; $temp_counter < count ( $infosniper_day_stats_start ) ; $temp_counter++ )
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT count(*) FROM infosniper_livevisits_main WHERE timestamp BETWEEN ".$infosniper_day_stats_start [ $temp_counter ]." AND ".$infosniper_day_stats_stop [ $temp_counter ]." AND browser > 0" , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT count(*) FROM infosniper_livevisits_main WHERE timestamp BETWEEN ".$infosniper_day_stats_start [ $temp_counter ]." AND ".$infosniper_day_stats_stop [ $temp_counter ]." AND robot > 0"   , 1 ); }
         else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT count(*) FROM infosniper_livevisits_main WHERE timestamp BETWEEN ".$infosniper_day_stats_start [ $temp_counter ]." AND ".$infosniper_day_stats_stop [ $temp_counter ] , 1 ); }
         $infosniper_day_stats [ date ( "Y/m/d" , $infosniper_day_stats_start [ $temp_counter ] ) ] = $temp_query [ 0 ] [ 0 ];
         unset ( $temp_query );
         //----------------------------------------------
        }
       unset ( $temp_counter );
       //----------------------------------------------
      }
     //----------------------------------------------

     //----------------------------------------------
     if ( $_GET [ "show" ] == "countries" )
      {
       //----------------------------------------------
       if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_countries = infosniper_livevisits_dbquery ( "SELECT countrycode,country,count(*) as anzahl FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY countrycode order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_countries = infosniper_livevisits_dbquery ( "SELECT countrycode,country,count(*) as anzahl FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY countrycode order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_countries = infosniper_livevisits_dbquery ( "SELECT countrycode,country,count(*) as anzahl FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY countrycode order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "countries";
         $show_title = "Countries (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       else
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_countries = infosniper_livevisits_dbquery ( "SELECT countrycode,country,count(*) as anzahl FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND browser > 0 GROUP BY countrycode order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_countries = infosniper_livevisits_dbquery ( "SELECT countrycode,country,count(*) as anzahl FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND robot > 0 GROUP BY countrycode order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_countries = infosniper_livevisits_dbquery ( "SELECT countrycode,country,count(*) as anzahl FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress GROUP BY countrycode order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "countries";
         $show_title = "Countries (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       //----------------------------------------------
      }
     //----------------------------------------------
     if ( $_GET [ "show" ] == "states" )
      {
       //----------------------------------------------
       if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_states = infosniper_livevisits_dbquery ( "SELECT state,count(*) as anzahl,countrycode,country FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY state order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_states = infosniper_livevisits_dbquery ( "SELECT state,count(*) as anzahl,countrycode,country FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY state order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_states = infosniper_livevisits_dbquery ( "SELECT state,count(*) as anzahl,countrycode,country FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY state order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "states";
         $show_title = "States (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       else
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_states = infosniper_livevisits_dbquery ( "SELECT state,count(*) as anzahl,countrycode,country FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.browser > 0 GROUP BY state order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_states = infosniper_livevisits_dbquery ( "SELECT state,count(*) as anzahl,countrycode,country FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.robot > 0 GROUP BY state order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_states = infosniper_livevisits_dbquery ( "SELECT state,count(*) as anzahl,countrycode,country FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress GROUP BY state order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "states";
         $show_title = "States (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       //----------------------------------------------
      }
     //----------------------------------------------
     if ( $_GET [ "show" ] == "cities" )
      {
       //----------------------------------------------
       if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_cities = infosniper_livevisits_dbquery ( "SELECT city,count(*) as anzahl,countrycode,country,state FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY city order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_cities = infosniper_livevisits_dbquery ( "SELECT city,count(*) as anzahl,countrycode,country,state FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY city order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_cities = infosniper_livevisits_dbquery ( "SELECT city,count(*) as anzahl,countrycode,country,state FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY city order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "cities";
         $show_title = "Cities (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       else
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_cities = infosniper_livevisits_dbquery ( "SELECT city,count(*) as anzahl,countrycode,country,state FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.browser > 0 GROUP BY city order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_cities = infosniper_livevisits_dbquery ( "SELECT city,count(*) as anzahl,countrycode,country,state FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.robot > 0 GROUP BY city order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_cities = infosniper_livevisits_dbquery ( "SELECT city,count(*) as anzahl,countrycode,country,state FROM infosniper_livevisits_ip,infosniper_livevisits_main WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress GROUP BY city order by anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "cities";
         $show_title = "Cities (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       //----------------------------------------------
      }
     //----------------------------------------------
     if ( $_GET [ "show" ] == "sitenames" )
      {
       //----------------------------------------------
       if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_sitenames = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_sitename.name,count(infosniper_livevisits_main.sitename) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_sitename WHERE infosniper_livevisits_main.sitename = infosniper_livevisits_sitename.id AND infosniper_livevisits_main.browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_sitename.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_sitenames = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_sitename.name,count(infosniper_livevisits_main.sitename) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_sitename WHERE infosniper_livevisits_main.sitename = infosniper_livevisits_sitename.id AND infosniper_livevisits_main.robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_sitename.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_sitenames = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_sitename.name,count(infosniper_livevisits_main.sitename) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_sitename WHERE infosniper_livevisits_main.sitename = infosniper_livevisits_sitename.id AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_sitename.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "sitenames";
         $show_title = "Sitenames (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       else
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_sitenames = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_sitename.name,count(infosniper_livevisits_main.sitename) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_sitename WHERE infosniper_livevisits_main.sitename = infosniper_livevisits_sitename.id AND infosniper_livevisits_main.browser > 0 GROUP BY infosniper_livevisits_sitename.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_sitenames = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_sitename.name,count(infosniper_livevisits_main.sitename) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_sitename WHERE infosniper_livevisits_main.sitename = infosniper_livevisits_sitename.id AND infosniper_livevisits_main.robot > 0 GROUP BY infosniper_livevisits_sitename.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_sitenames = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_sitename.name,count(infosniper_livevisits_main.sitename) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_sitename WHERE infosniper_livevisits_main.sitename = infosniper_livevisits_sitename.id GROUP BY infosniper_livevisits_sitename.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "sitenames";
         $show_title = "Sitenames (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       //----------------------------------------------
      }
     //----------------------------------------------
     if ( $_GET [ "show" ] == "referers" )
      {
       //----------------------------------------------
       if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_referers = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_referer.name,count(infosniper_livevisits_main.referer) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_referer WHERE infosniper_livevisits_main.referer = infosniper_livevisits_referer.id AND infosniper_livevisits_main.browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_referer.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_referers = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_referer.name,count(infosniper_livevisits_main.referer) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_referer WHERE infosniper_livevisits_main.referer = infosniper_livevisits_referer.id AND infosniper_livevisits_main.robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_referer.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_referers = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_referer.name,count(infosniper_livevisits_main.referer) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_referer WHERE infosniper_livevisits_main.referer = infosniper_livevisits_referer.id AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_referer.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "referers";
         $show_title = "Referers (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       else
        {
         //----------------------------------------------
         if     ( $infosniper_show_what == "Visitors" ) { $infosniper_results_referers = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_referer.name,count(infosniper_livevisits_main.referer) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_referer WHERE infosniper_livevisits_main.referer = infosniper_livevisits_referer.id AND infosniper_livevisits_main.browser > 0 GROUP BY infosniper_livevisits_referer.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_results_referers = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_referer.name,count(infosniper_livevisits_main.referer) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_referer WHERE infosniper_livevisits_main.referer = infosniper_livevisits_referer.id AND infosniper_livevisits_main.robot > 0 GROUP BY infosniper_livevisits_referer.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         else   { $infosniper_results_referers = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_referer.name,count(infosniper_livevisits_main.referer) as anzahl FROM infosniper_livevisits_main,infosniper_livevisits_referer WHERE infosniper_livevisits_main.referer = infosniper_livevisits_referer.id GROUP BY infosniper_livevisits_referer.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 ); }
         $show_value = "referers";
         $show_title = "Referers (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       //----------------------------------------------
      }
     //----------------------------------------------
     if ( $_GET [ "show" ] == "robots" )
      {
       //----------------------------------------------
       if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
        {
         //----------------------------------------------
         $infosniper_results_robots = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_robot.title,count(infosniper_livevisits_main.robot) as anzahl,infosniper_livevisits_robot.icon,infosniper_livevisits_robot.version,infosniper_livevisits_robot.uri FROM infosniper_livevisits_main,infosniper_livevisits_robot WHERE infosniper_livevisits_main.robot = infosniper_livevisits_robot.id AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_robot.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 );
         $show_value = "robots";
         $show_title = "Robots (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       else
        {
         //----------------------------------------------
         $infosniper_results_robots = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_robot.title,count(infosniper_livevisits_main.robot) as anzahl,infosniper_livevisits_robot.icon,infosniper_livevisits_robot.version,infosniper_livevisits_robot.uri FROM infosniper_livevisits_main,infosniper_livevisits_robot WHERE infosniper_livevisits_main.robot = infosniper_livevisits_robot.id GROUP BY infosniper_livevisits_robot.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 );
         $show_value = "robots";
         $show_title = "Robots (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       //----------------------------------------------
      }
     //----------------------------------------------
     if ( $_GET [ "show" ] == "browsers" )
      {
       //----------------------------------------------
       if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
        {
         //----------------------------------------------
         $infosniper_results_browsers = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_browser.title,count(infosniper_livevisits_main.browser) as anzahl,infosniper_livevisits_browser.icon,infosniper_livevisits_browser.version,infosniper_livevisits_browser.uri FROM infosniper_livevisits_main,infosniper_livevisits_browser WHERE infosniper_livevisits_main.browser = infosniper_livevisits_browser.id AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_browser.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 );
         $show_value = "browsers";
         $show_title = "Browsers (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       else
        {
         //----------------------------------------------
         $infosniper_results_browsers = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_browser.title,count(infosniper_livevisits_main.browser) as anzahl,infosniper_livevisits_browser.icon,infosniper_livevisits_browser.version,infosniper_livevisits_browser.uri FROM infosniper_livevisits_main,infosniper_livevisits_browser WHERE infosniper_livevisits_main.browser = infosniper_livevisits_browser.id GROUP BY infosniper_livevisits_browser.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 );
         $show_value = "browsers";
         $show_title = "Browsers (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       //----------------------------------------------
      }
     //----------------------------------------------
     if ( $_GET [ "show" ] == "os" )
      {
       //----------------------------------------------
       if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
        {
         //----------------------------------------------
         $infosniper_results_os = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_os.title,count(infosniper_livevisits_main.os) as anzahl,infosniper_livevisits_os.icon,infosniper_livevisits_os.version,infosniper_livevisits_os.uri FROM infosniper_livevisits_main,infosniper_livevisits_os WHERE infosniper_livevisits_main.browser = infosniper_livevisits_os.id AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." GROUP BY infosniper_livevisits_os.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 );
         $show_value = "os";
         $show_title = "Operating Systems (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       else
        {
         //----------------------------------------------
         $infosniper_results_os = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_os.title,count(infosniper_livevisits_main.os) as anzahl,infosniper_livevisits_os.icon,infosniper_livevisits_os.version,infosniper_livevisits_os.uri FROM infosniper_livevisits_main,infosniper_livevisits_os WHERE infosniper_livevisits_main.browser = infosniper_livevisits_os.id GROUP BY infosniper_livevisits_os.name ORDER BY anzahl DESC ".$infosniper_number_entries , 1 );
         $show_value = "os";
         $show_title = "Operating Systems (Hits)";
         unset ( $temp_query );
         //----------------------------------------------
        }
       //----------------------------------------------
      }
     //----------------------------------------------
    ?>

  <div id="content">

   <table width="100%" cellspacing="0" cellpadding="0">
    <tr>
     <td class="content-header">
     	<img src="images/documentinfo.png" width="12" height="12" alt="Show Entries" title="Show Entries" />&nbsp;Show Entries&nbsp;
     	<form name="number" action="<?php echo $_SERVER [ "PHP_SELF" ]; ?>" method="get">
     		<input type="hidden" name="show" value="<?php echo $show_value; ?>" />
     		<select name="number" size="1" onchange="document.number.submit();">
     			<option<?php echo $infosniper_number_entries_selected25; ?>>25</option>
     			<option<?php echo $infosniper_number_entries_selected50; ?>>50</option>
     			<option<?php echo $infosniper_number_entries_selected100; ?>>100</option>
     			<option<?php echo $infosniper_number_entries_selected200; ?>>200</option>
     			<option<?php echo $infosniper_number_entries_selected500; ?>>500</option>
     			<option<?php echo $infosniper_number_entries_selected1000; ?>>1000</option>
     			<option<?php echo $infosniper_number_entries_selected2000; ?>>2000</option>
     		</select>&nbsp;&nbsp;
     		<img src="images/documentinfo.png" width="12" height="12" alt="Show Visitors/Robots" title="Show Visitors/Robots" />&nbsp;Show&nbsp;
     		<select name="what" size="1" onchange="document.number.submit();">
     			<option<?php echo $infosniper_show_what_selected_all; ?>>All</option>
     			<option<?php echo $infosniper_show_what_selected_visitors; ?>>Visitors</option>
     			<option<?php echo $infosniper_show_what_selected_robots; ?>>Robots</option>
     		</select>&nbsp;&nbsp;
     		<img src="images/documentinfo.png" width="12" height="12" alt="Select Date Interval" title="Select Date Interval" />&nbsp;Select Date Interval&nbsp;
        <input type="text" size="10" name="from_time" value="<?php echo $from_time; ?>" id="f_date_a">&nbsp;
        <input type="text" size="10" name="until_time" value="<?php echo $until_time; ?>" id="f_calcdate" onchange="document.number.submit();">
     	</form>&nbsp;&nbsp;
     	<img src="images/documentinfo.png" width="12" height="12" alt="Clear Settings" title="Clear Settings" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]; ?>">Use Default Settings</a>&nbsp;&nbsp;
     	<img src="images/logout.png" width="16" height="16" alt="Logout" title="Logout" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ].'?show=logout'; ?>">Logout</a>&nbsp;&nbsp;
     	<img src="images/documentinfo.png" width="12" height="12" alt="Infosniper Geolocation Service" title="Infosniper Geolocation Service" />
     	<a class="stats" href="http://www.infosniper.net" target="_blank">Infosniper.net</a>
     </td>
    </tr>
   </table>

	<script type="text/javascript">
	 <!--
	    Calendar.setup({
	        inputField     :    "f_date_a",     // id of the input field
	        ifFormat       :    "%d-%m-%Y"     // format of the input field
	    });
	    Calendar.setup({
	        inputField     :    "f_calcdate",   // id of the input field
	        ifFormat       :    "%d-%m-%Y"     // format of the input field
	    });
	  //-->
	</script>

   <table width="100%" cellspacing="0" cellpadding="0">
    <tr>
     <td class="content-header">
      <img src="images/reload.png" alt="Reload" title="Reload" height="16" width="16" />&nbsp;
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?number=".$_GET [ "number" ]."&amp;show=".$_GET [ "show" ]."&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Reload</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Live Visits" title="Live Visits" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">LiveVisits</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Visits Stats" title="Visits Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=visits&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Visits</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Hits Stats" title="Hits Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=visithits&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Hits</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Countries Stats" title="Countries Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=countries&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Countries</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="States Stats" title="States Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=states&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">States</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Cities Stats" title="Cities Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=cities&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Cities</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Sitenames Stats" title="Sitenames Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=sitenames&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Sitenames</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Referers Stats" title="Referers Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=referers&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Referers</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Robots Stats" title="Robots Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=robots&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Robots</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Browser Stats" title="Browser Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=browsers&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">Browsers</a>&nbsp;&nbsp;&nbsp;

     	<img src="images/chart_bar.png" width="16" height="16" alt="Operating Systems Stats" title="Operating System Stats" />
     	<a class="stats" href="<?php echo $_SERVER [ "PHP_SELF" ]."?show=os&amp;what=".$infosniper_show_what."&amp;from_time=".$from_time."&amp;until_time=".$until_time; ?>">OS</a>&nbsp;&nbsp;&nbsp;

     </td>
    </tr>
   </table>

 <?php

			  if ( $_GET [ "show" ] )
			   {
			   	//----------------------------------------------
			   	echo '<div class="countries">';
			   	echo "<h1>".$show_title."</h1>";
			    echo '
			     <table width="100%" cellspacing="0" cellpadding="0">
			      <tr>
			       <td>
			        <table>
			    ';
			    //----------------------------------------------
			   }

         //----------------------------------------------
         if ( $_GET [ "show" ] == "countries" )
          {
           //----------------------------------------------
           if ( count ( $infosniper_results_countries ) > 0 )
            {
         	   //----------------------------------------------
         	   for ( $y = 0 ; $y <= count ( $infosniper_results_countries ) - 1 ; $y++ ) { $total += $infosniper_results_countries [ $y ] [ 2 ]; }
         	   //----------------------------------------------
             for ( $y = 0 ; $y <= count ( $infosniper_results_countries ) - 1 ; $y++ )
         	    {
         	     //----------------------------------------------
               echo "<tr><td><img src=\"images-country-flags/".$infosniper_results_countries [ $y ] [ 0 ]."\" width=\"20\" height=\"13\" alt=\"".$infosniper_results_countries [ $y ] [ 1 ]."\" title=\"".$infosniper_results_countries [ $y ] [ 1 ]."\" /></td><td>".$infosniper_results_countries [ $y ] [ 1 ]."</td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $infosniper_results_countries [ $y ] [ 2 ] / $total ) * 100 * 5 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$infosniper_results_countries [ $y ] [ 2 ]."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $infosniper_results_countries [ $y ] [ 2 ] / $total ) * 100 , 2 )."%</td></tr>";
         	     //----------------------------------------------
         	    }
             //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_results_countries )."/".$total."</h2></td></tr>";
             //----------------------------------------------
            }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "states" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_results_states ) > 0 )
	          {
	         	 //----------------------------------------------
	         	 for ( $y = 0 ; $y <= count ( $infosniper_results_states ) - 1 ; $y++ ) { $total += $infosniper_results_states [ $y ] [ 1 ]; }
	         	 //----------------------------------------------
	           for ( $y = 0 ; $y <= count ( $infosniper_results_states ) - 1 ; $y++ )
	         	  {
	         	   //----------------------------------------------
	             echo "<tr><td><img src=\"images-country-flags/".$infosniper_results_states [ $y ] [ 2 ].".png\" width=\"20\" height=\"13\" alt=\"".$infosniper_results_states [ $y ] [ 3 ]."\" title=\"".$infosniper_results_states [ $y ] [ 3 ]."\" /></td><td>".$infosniper_results_states [ $y ] [ 0 ]."</td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $infosniper_results_states [ $y ] [ 1 ] / $total ) * 100 * 5 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$infosniper_results_states [ $y ] [ 1 ]."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $infosniper_results_states [ $y ] [ 1 ] / $total ) * 100 , 2 )."%</td></tr>";
	         	   //----------------------------------------------
	         	  }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_results_states )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "cities" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_results_cities ) > 0 )
	          {
	         	 //----------------------------------------------
	         	 for ( $y = 0 ; $y <= count ( $infosniper_results_cities ) - 1 ; $y++ ) { $total += $infosniper_results_cities [ $y ] [ 1 ]; }
	         	 //----------------------------------------------
	           for ( $y = 0 ; $y <= count ( $infosniper_results_cities ) - 1 ; $y++ )
	         	  {
	         	   //----------------------------------------------
	             echo "<tr><td><img src=\"images-country-flags/".$infosniper_results_cities [ $y ] [ 2 ].".png\" width=\"20\" height=\"13\" alt=\"".$infosniper_results_cities [ $y ] [ 3 ]."\" title=\"".$infosniper_results_cities [ $y ] [ 3 ]."\" /></td><td>".$infosniper_results_cities [ $y ] [ 0 ]." <i>(".$infosniper_results_cities [ $y ] [ 4 ].")</i></td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $infosniper_results_cities [ $y ] [ 1 ] / $total ) * 100 * 5 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$infosniper_results_cities [ $y ] [ 1 ]."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $infosniper_results_cities [ $y ] [ 1 ] / $total ) * 100 , 2 )."%</td></tr>";
	         	   //----------------------------------------------
	         	  }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_results_cities )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "sitenames" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_results_sitenames ) > 0 )
	          {
	         	 //----------------------------------------------
	         	 for ( $y = 0 ; $y <= count ( $infosniper_results_sitenames ) - 1 ; $y++ ) { $total += $infosniper_results_sitenames [ $y ] [ 1 ]; }
	         	 //----------------------------------------------
	           for ( $y = 0 ; $y <= count ( $infosniper_results_sitenames ) - 1 ; $y++ )
	         	  {
	         	   //----------------------------------------------
	             echo "<tr><td>".$infosniper_results_sitenames [ $y ] [ 0 ]."</td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $infosniper_results_sitenames [ $y ] [ 1 ] / $total ) * 100 * 3 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$infosniper_results_sitenames [ $y ] [ 1 ]."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $infosniper_results_sitenames [ $y ] [ 1 ] / $total ) * 100 , 2 )."%</td></tr>";
	         	   //----------------------------------------------
	         	  }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_results_sitenames )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "referers" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_results_referers ) > 0 )
	          {
	           //----------------------------------------------
	           $temp_referers = array ();
             for ( $y = 0 ; $y <= count ( $infosniper_results_referers ) - 1 ; $y++ )
              {
               //----------------------------------------------
               foreach ( $infosniper_exception_domains as $value )
                {
                 //----------------------------------------------
                 if ( ( strpos ( $infosniper_results_referers [ $y ] [ 0 ] , $value ) > 0 ) && ( strpos ( $infosniper_results_referers [ $y ] [ 0 ] , $value ) < 20 ) )
                  {}
                 else {	if ( $infosniper_results_referers [ $y ] [ 0 ] != "" ) { $temp_referers [ $infosniper_results_referers [ $y ] [ 0 ] ] = $infosniper_results_referers [ $y ] [ 1 ]; } }
                 //----------------------------------------------
                }
               //----------------------------------------------
              }
             //----------------------------------------------
             foreach ( $temp_referers as $key => $value ) { $total += $value; }
	         	 //----------------------------------------------
	         	 foreach ( $temp_referers as $key => $value )
	         	  {
	         	   //----------------------------------------------
               $infosniper_results_referers_cut = substr ( $key , 0 , 80 );
               echo "<tr><td><a href=\"".$key."\" target=\"_blank\">".$infosniper_results_referers_cut."</a></td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $value / $total ) * 100 * 5 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$value."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $value / $total ) * 100 , 2 )."%</td></tr>";
	         	   //----------------------------------------------
	         	  }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $temp_referers )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "robots" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_results_robots ) > 0 )
	          {
	         	 //----------------------------------------------
	         	 for ( $y = 0 ; $y <= count ( $infosniper_results_robots ) - 1 ; $y++ ) { $total += $infosniper_results_robots [ $y ] [ 1 ]; }
	         	 //----------------------------------------------
	           for ( $y = 0 ; $y <= count ( $infosniper_results_robots ) - 1 ; $y++ )
	         	  {
	         	   //----------------------------------------------
	         	   if ( $infosniper_results_robots [ $y ] [ 0 ] == "" ) { $infosniper_results_robots [ $y ] [ 0 ] = "n/a"; }
	         	   $infosniper_results_robots [ $y ] [ 0 ] = substr ( $infosniper_results_robots [ $y ] [ 0 ] , 0 , 100 );
	         	   if ( $infosniper_results_robots [ $y ] [ 4 ] == "" ) { $infosniper_results_robots [ $y ] [ 4 ] = "javascript:void();"; }
	             echo "<tr><td><img src=\"images-pattern/".$infosniper_results_robots [ $y ] [ 2 ]."\" width=\"14\" height=\"14\" alt=\"".$infosniper_results_robots [ $y ] [ 0 ]." ".$infosniper_results_robots [ $y ] [ 3 ]."\" title=\"".$infosniper_results_robots [ $y ] [ 0 ]." ".$infosniper_results_robots [ $y ] [ 3 ]."\" /></td><td><a href=\"".$infosniper_results_robots [ $y ] [ 4 ]."\" target=\"_blank\">".$infosniper_results_robots [ $y ] [ 0 ]." ".$infosniper_results_robots [ $y ] [ 3 ]."</a></td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $infosniper_results_robots [ $y ] [ 1 ] / $total ) * 100 * 6 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$infosniper_results_robots [ $y ] [ 1 ]."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $infosniper_results_robots [ $y ] [ 1 ] / $total ) * 100 , 2 )."%</td></tr>";
	         	   //----------------------------------------------
	         	  }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_results_robots )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "browsers" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_results_browsers ) > 0 )
	          {
	         	 //----------------------------------------------
	         	 for ( $y = 0 ; $y <= count ( $infosniper_results_browsers ) - 1 ; $y++ ) { $total += $infosniper_results_browsers [ $y ] [ 1 ]; }
	         	 //----------------------------------------------
	           for ( $y = 0 ; $y <= count ( $infosniper_results_browsers ) - 1 ; $y++ )
	         	  {
	         	   //----------------------------------------------
	         	   if ( $infosniper_results_browsers [ $y ] [ 0 ] == "" ) { $infosniper_results_browsers [ $y ] [ 0 ] = "n/a"; }
	         	   $infosniper_results_browsers [ $y ] [ 0 ] = substr ( $infosniper_results_browsers [ $y ] [ 0 ] , 0 , 100 );
	         	   if ( $infosniper_results_browsers [ $y ] [ 4 ] == "" ) { $infosniper_results_browsers [ $y ] [ 4 ] = "javascript:void();"; }
	             echo "<tr><td><img src=\"images-pattern/".$infosniper_results_browsers [ $y ] [ 2 ]."\" width=\"14\" height=\"14\" alt=\"".$infosniper_results_browsers [ $y ] [ 0 ]." ".$infosniper_results_browsers [ $y ] [ 3 ]."\" title=\"".$infosniper_results_browsers [ $y ] [ 0 ]." ".$infosniper_results_browsers [ $y ] [ 3 ]."\" /></td><td><a href=\"".$infosniper_results_browsers [ $y ] [ 4 ]."\" target=\"_blank\">".$infosniper_results_browsers [ $y ] [ 0 ]." ".$infosniper_results_browsers [ $y ] [ 3 ]."</a></td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $infosniper_results_browsers [ $y ] [ 1 ] / $total ) * 100 * 6 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$infosniper_results_browsers [ $y ] [ 1 ]."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $infosniper_results_browsers [ $y ] [ 1 ] / $total ) * 100 , 2 )."%</td></tr>";
	         	   //----------------------------------------------
	         	  }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_results_browsers )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "os" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_results_os ) > 0 )
	          {
	         	 //----------------------------------------------
	         	 for ( $y = 0 ; $y <= count ( $infosniper_results_os ) - 1 ; $y++ ) { $total += $infosniper_results_os [ $y ] [ 1 ]; }
	         	 //----------------------------------------------
	           for ( $y = 0 ; $y <= count ( $infosniper_results_os ) - 1 ; $y++ )
	         	  {
	         	   //----------------------------------------------
	         	   if ( $infosniper_results_os [ $y ] [ 0 ] == "" ) { $infosniper_results_os [ $y ] [ 0 ] = "n/a"; }
	         	   $infosniper_results_os [ $y ] [ 0 ] = substr ( $infosniper_results_os [ $y ] [ 0 ] , 0 , 100 );
	         	   if ( $infosniper_results_os [ $y ] [ 4 ] == "" ) { $infosniper_results_os [ $y ] [ 4 ] = "javascript:void();"; }
	             echo "<tr><td><img src=\"images-pattern/".$infosniper_results_os [ $y ] [ 2 ]."\" width=\"14\" height=\"14\" alt=\"".$infosniper_results_os [ $y ] [ 0 ]." ".$infosniper_results_os [ $y ] [ 3 ]."\" title=\"".$infosniper_results_os [ $y ] [ 0 ]." ".$infosniper_results_os [ $y ] [ 3 ]."\" /></td><td><a href=\"".$infosniper_results_os [ $y ] [ 4 ]."\" target=\"_blank\">".$infosniper_results_os [ $y ] [ 0 ]." ".$infosniper_results_os [ $y ] [ 3 ]."</td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $infosniper_results_os [ $y ] [ 1 ] / $total ) * 100 * 6 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$infosniper_results_os [ $y ] [ 1 ]."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $infosniper_results_os [ $y ] [ 1 ] / $total ) * 100 , 2 )."%</td></tr>";
	         	   //----------------------------------------------
	         	  }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_results_os )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "visits" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_day_stats ) > 0 )
	          {
	         	 //----------------------------------------------
	         	 $total = array_sum ( $infosniper_day_stats );
	         	 //----------------------------------------------
	           foreach ( $infosniper_day_stats as $key => $value )
	            {
	             //----------------------------------------------
	             echo "<tr><td>".$key."</td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $value / $total ) * 100 * 6 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$value."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $value / $total ) * 100 , 2 )."%</td></tr>";
	             //----------------------------------------------
	            }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_day_stats )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------
         if ( $_GET [ "show" ] == "visithits" )
          {
           //----------------------------------------------
	         if ( count ( $infosniper_day_stats ) > 0 )
	          {
	         	 //----------------------------------------------
	         	 $total = array_sum ( $infosniper_day_stats );
	         	 //----------------------------------------------
	           foreach ( $infosniper_day_stats as $key => $value )
	            {
	             //----------------------------------------------
	             echo "<tr><td>".$key."</td><td width=\"20\">&nbsp;</td><td class=\"statsbar\"><img src=\"images/bar.png\" alt=\"\" title=\"\" width=\"".(int) round ( ( $value / $total ) * 100 * 6 )."\" height=\"10\" /></td><td width=\"20\">&nbsp;</td><td class=\"stats\">".$value."</td><td width=\"20\">&nbsp;</td><td class=\"stats\">".(float) round ( ( $value / $total ) * 100 , 2 )."%</td></tr>";
	             //----------------------------------------------
	            }
	           //----------------------------------------------
             echo "</table>";
             echo "<table><tr><td><h2>Total ".count ( $infosniper_day_stats )."/".$total."</h2></td></tr>";
             //----------------------------------------------
	          }
           //----------------------------------------------
          }
         //----------------------------------------------

		  //----------------------------------------------
		  if ( $_GET [ "show" ] )
		   {
		   	//----------------------------------------------
		   	unset ( $total );
		    echo '
		      </table>
		      </td>
		     </tr>
		    </table>
		    <br />
		   </div>
		    <table width="100%" cellspacing="0" cellpadding="0">
		     <tr>
		      <td class="content-header">
		       <img src="images/documentinfo.png" width="12" height="12" alt="Total Hits" title="Total Hits" />
		       Total Hits:'.$infosniper_results_hits_total.'
		       &nbsp;
		       <img src="images/documentinfo.png" width="12" height="12" alt="Total IPs" title="Total IPs" />
		       Total IPs:'.$infosniper_results_hits_total_distinct.'
		       &nbsp;
		       <img src="images/documentinfo.png" width="12" height="12" alt="Log Duration" title="Log Duration" />
		       Log Duration:'.$infosniper_results_duration.'
		       &nbsp;
		       <img src="images/documentinfo.png" width="12" height="12" alt="Log Start" title="Log Start" />
		       Log Start:'.$infosniper_results_first_entry.'
		       &nbsp;
		       <img src="images/documentinfo.png" width="12" height="12" alt="Log End" title="Log End" />
		       Log End:'.$infosniper_results_last_entry.'
           &nbsp;
     	     <img src="images/documentinfo.png" width="12" height="12" alt="Infosniper Query Credits left" title="Infosniper Query Credits left" />
     	     Credits:'.$infosniper_query_credits.'
		      </td>
		     </tr>
		    </table>

		      </div>
		     </body>
		    </html>
		    ';
		    exit;
		   	//----------------------------------------------
		   }
		  //----------------------------------------------
   ?>

   <div id="scroller">
   <table width="100%" cellspacing="0" cellpadding="0">

    <?php
     //----------------------------------------------
     // Show Visitors
     $infosniper_day_results = array ();

     if ( ( $from_time_interval != 0 ) && ( $until_time_interval != 0 ) )
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $infosniper_result = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_main.ipaddress,infosniper_livevisits_main.timestamp,infosniper_livevisits_ip.city,infosniper_livevisits_main.robot,infosniper_livevisits_main.browser,infosniper_livevisits_main.os,infosniper_livevisits_main.sitename,infosniper_livevisits_main.referer,infosniper_livevisits_ip.countrycode,infosniper_livevisits_ip.country,infosniper_livevisits_ip.hostname,infosniper_livevisits_ip.provider,infosniper_livevisits_ip.state,infosniper_livevisits_ip.areacode,infosniper_livevisits_ip.postalcode,infosniper_livevisits_ip.dmacode,infosniper_livevisits_ip.latitude,infosniper_livevisits_ip.longitude FROM infosniper_livevisits_main,infosniper_livevisits_ip WHERE infosniper_livevisits_main.browser > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." AND infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress ORDER BY infosniper_livevisits_main.id DESC ".$infosniper_number_entries , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_result = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_main.ipaddress,infosniper_livevisits_main.timestamp,infosniper_livevisits_ip.city,infosniper_livevisits_main.robot,infosniper_livevisits_main.browser,infosniper_livevisits_main.os,infosniper_livevisits_main.sitename,infosniper_livevisits_main.referer,infosniper_livevisits_ip.countrycode,infosniper_livevisits_ip.country,infosniper_livevisits_ip.hostname,infosniper_livevisits_ip.provider,infosniper_livevisits_ip.state,infosniper_livevisits_ip.areacode,infosniper_livevisits_ip.postalcode,infosniper_livevisits_ip.dmacode,infosniper_livevisits_ip.latitude,infosniper_livevisits_ip.longitude FROM infosniper_livevisits_main,infosniper_livevisits_ip WHERE infosniper_livevisits_main.robot > 0 AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." AND infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress ORDER BY infosniper_livevisits_main.id DESC ".$infosniper_number_entries , 1 ); }
       else   { $infosniper_result = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_main.ipaddress,infosniper_livevisits_main.timestamp,infosniper_livevisits_ip.city,infosniper_livevisits_main.robot,infosniper_livevisits_main.browser,infosniper_livevisits_main.os,infosniper_livevisits_main.sitename,infosniper_livevisits_main.referer,infosniper_livevisits_ip.countrycode,infosniper_livevisits_ip.country,infosniper_livevisits_ip.hostname,infosniper_livevisits_ip.provider,infosniper_livevisits_ip.state,infosniper_livevisits_ip.areacode,infosniper_livevisits_ip.postalcode,infosniper_livevisits_ip.dmacode,infosniper_livevisits_ip.latitude,infosniper_livevisits_ip.longitude FROM infosniper_livevisits_main,infosniper_livevisits_ip WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress AND infosniper_livevisits_main.timestamp BETWEEN ".$from_time_interval." AND ".$until_time_interval." ORDER BY infosniper_livevisits_main.id DESC ".$infosniper_number_entries , 1 ); }
       //----------------------------------------------
      }
     else
      {
       //----------------------------------------------
       if     ( $infosniper_show_what == "Visitors" ) { $infosniper_result = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_main.ipaddress,infosniper_livevisits_main.timestamp,infosniper_livevisits_ip.city,infosniper_livevisits_main.robot,infosniper_livevisits_main.browser,infosniper_livevisits_main.os,infosniper_livevisits_main.sitename,infosniper_livevisits_main.referer,infosniper_livevisits_ip.countrycode,infosniper_livevisits_ip.country,infosniper_livevisits_ip.hostname,infosniper_livevisits_ip.provider,infosniper_livevisits_ip.state,infosniper_livevisits_ip.areacode,infosniper_livevisits_ip.postalcode,infosniper_livevisits_ip.dmacode,infosniper_livevisits_ip.latitude,infosniper_livevisits_ip.longitude FROM infosniper_livevisits_main,infosniper_livevisits_ip WHERE infosniper_livevisits_main.browser > 0 AND infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress ORDER BY infosniper_livevisits_main.id DESC ".$infosniper_number_entries , 1 ); }
       elseif ( $infosniper_show_what == "Robots"   ) { $infosniper_result = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_main.ipaddress,infosniper_livevisits_main.timestamp,infosniper_livevisits_ip.city,infosniper_livevisits_main.robot,infosniper_livevisits_main.browser,infosniper_livevisits_main.os,infosniper_livevisits_main.sitename,infosniper_livevisits_main.referer,infosniper_livevisits_ip.countrycode,infosniper_livevisits_ip.country,infosniper_livevisits_ip.hostname,infosniper_livevisits_ip.provider,infosniper_livevisits_ip.state,infosniper_livevisits_ip.areacode,infosniper_livevisits_ip.postalcode,infosniper_livevisits_ip.dmacode,infosniper_livevisits_ip.latitude,infosniper_livevisits_ip.longitude FROM infosniper_livevisits_main,infosniper_livevisits_ip WHERE infosniper_livevisits_main.robot > 0 AND infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress ORDER BY infosniper_livevisits_main.id DESC ".$infosniper_number_entries , 1 ); }
       else   { $infosniper_result = infosniper_livevisits_dbquery ( "SELECT infosniper_livevisits_main.ipaddress,infosniper_livevisits_main.timestamp,infosniper_livevisits_ip.city,infosniper_livevisits_main.robot,infosniper_livevisits_main.browser,infosniper_livevisits_main.os,infosniper_livevisits_main.sitename,infosniper_livevisits_main.referer,infosniper_livevisits_ip.countrycode,infosniper_livevisits_ip.country,infosniper_livevisits_ip.hostname,infosniper_livevisits_ip.provider,infosniper_livevisits_ip.state,infosniper_livevisits_ip.areacode,infosniper_livevisits_ip.postalcode,infosniper_livevisits_ip.dmacode,infosniper_livevisits_ip.latitude,infosniper_livevisits_ip.longitude FROM infosniper_livevisits_main,infosniper_livevisits_ip WHERE infosniper_livevisits_ip.ipaddress=infosniper_livevisits_main.ipaddress ORDER BY infosniper_livevisits_main.id DESC ".$infosniper_number_entries , 1 ); }
       //----------------------------------------------
      }

     if ( count ( $infosniper_result ) > 0 )
      {
       //---------------------------------------
       $counter = 1;
       //---------------------------------------
       for ( $x = 0 ; $x <= count ( $infosniper_result ) - 1 ; $x++ )
        {
         //---------------------------------------
         $temp_query     = infosniper_livevisits_dbquery ( "SELECT name FROM infosniper_livevisits_sitename WHERE id=".$infosniper_result [ $x ] [ 6 ] , 1 );
         $sitename       = $temp_query [ 0 ] [ 0 ];
         $sitename_short = substr ( $sitename , 0 , 30 );
         unset ( $temp_query );
         //---------------------------------------
         $temp_query    = infosniper_livevisits_dbquery ( "SELECT name FROM infosniper_livevisits_referer WHERE id=".$infosniper_result [ $x ] [ 7 ] , 1 );
         $referer       = $temp_query [ 0 ] [ 0 ];
         $referer_short = substr ( $referer , 0 , 55 );
         unset ( $temp_query );
         //---------------------------------------
         if ( $infosniper_result [ $x ] [ 3 ] > 0 )
          {
           //---------------------------------------
           $temp_query = infosniper_livevisits_dbquery ( "SELECT version,title,uri,icon FROM infosniper_livevisits_robot WHERE id=".$infosniper_result [ $x ] [ 3 ] , 1 );

           if ( $temp_query [ 0 ] [ 2 ] == "" ) { $temp_query_link = "javascript:void();"; } else { $temp_query_link = $temp_query [ 0 ] [ 2 ]; }

           $userdata   = "<img src=\"images-pattern/blank.png\" width=\"14\" height=\"14\" alt=\"\" title=\"\" />&nbsp;<a href=\"".$temp_query_link."\" target=\"_blank\"><img src=\"images-pattern/".$temp_query [ 0 ] [ 3 ]."\" alt=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" title=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" /></a>";
           $detaildata = "<tr><td class=\"detail-td1\">Robot</td><td class=\"detail-td2\"><img src=\"images-pattern/".$temp_query [ 0 ] [ 3 ]."\" alt=\"".$temp_query [ 0 ] [ 1 ]."\" title=\"".$temp_query [ 0 ] [ 1 ]."\" />&nbsp;&nbsp;<a href=\"".$temp_query_link."\" target=\"_blank\">".$temp_query [ 0 ] [ 1 ]." ".$temp_query [ 0 ] [ 0 ]."</a></td></tr>";
           unset ( $temp_query );
           //---------------------------------------
          }
         else
          {
           //---------------------------------------
           $temp_query     = infosniper_livevisits_dbquery ( "SELECT name,version,title,uri,icon FROM infosniper_livevisits_browser WHERE id=".$infosniper_result [ $x ] [ 4 ] , 1 );
           $browser        = "<a href=\"".$temp_query [ 0 ] [ 3 ]."\" target=\"_blank\"><img src=\"images-pattern/".$temp_query [ 0 ] [ 4 ]."\" alt=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" title=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" /></a>";
           $detail_browser = "<tr><td class=\"detail-td1\">Browser</td><td class=\"detail-td2\"><img src=\"images-pattern/".$temp_query [ 0 ] [ 4 ]."\" alt=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" title=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" />&nbsp;&nbsp;<a href=\"".$temp_query [ 0 ] [ 3 ]."\" target=\"_blank\">".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."</a></td></tr>";
           #unset ( $temp_query );

           $temp_query     = infosniper_livevisits_dbquery ( "SELECT name,version,title,uri,icon FROM infosniper_livevisits_os WHERE id=".$infosniper_result [ $x ] [ 5 ] , 1 );
           $os             = "<a href=\"".$temp_query [ 0 ] [ 3 ]."\" target=\"_blank\"><img src=\"images-pattern/".$temp_query [ 0 ] [ 4 ]."\" alt=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" title=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" /></a>";
           $detail_os      = "<tr><td class=\"detail-td1\">OS</td><td class=\"detail-td2\"><img src=\"images-pattern/".$temp_query [ 0 ] [ 4 ]."\" alt=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" title=\"".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."\" />&nbsp;&nbsp;<a href=\"".$temp_query [ 0 ] [ 3 ]."\" target=\"_blank\">".$temp_query [ 0 ] [ 2 ]." ".$temp_query [ 0 ] [ 1 ]."</a></td></tr>";
           #unset ( $temp_query );

           $userdata   = $os."&nbsp;".$browser;
           $detaildata = $detail_browser.$detail_os;
           //---------------------------------------
          }
         //---------------------------------------
         $country = "<img src=\"images-country-flags/".$infosniper_result [ $x ] [ 8 ].".png\" alt=\"".$infosniper_result [ $x ] [ 9 ]."\" title=\"".$infosniper_result [ $x ] [ 9 ]."\" />&nbsp;";
          //---------------------------------------
         $scale = 360 / 200;
				 $worldmap_x = floor ( ( $infosniper_result [ $x ] [ 17 ] + 180 ) / $scale );
				 $worldmap_y = floor ( ( 180 - ( $infosniper_result [ $x ] [ 16 ] + 90 ) ) / $scale );
         //---------------------------------------
         if ( ( $counter % 2 ) == 0 ) { $back = "content-row21"; } else { $back = "content-row22";  }
         //---------------------------------------
         if ( !array_key_exists ( date ( "Y/m/d" , $infosniper_result [ $x ] [ 1 ] )  , $infosniper_day_results ) )
          {
           //---------------------------------------
           $infosniper_day_results [ date ( "Y/m/d" , $infosniper_result [ $x ] [ 1 ] ) ] = 1;

           $from_timestamp = mktime  (  0 ,  0 ,  0 , date ( "m" , $infosniper_result [ $x ] [ 1 ] ) , date ( "d" , $infosniper_result [ $x ] [ 1 ] ) , date ( "Y" , $infosniper_result [ $x ] [ 1 ] ) );
           $to_timestamp   = mktime  ( 23 , 59 , 59 , date ( "m" , $infosniper_result [ $x ] [ 1 ] ) , date ( "d" , $infosniper_result [ $x ] [ 1 ] ) , date ( "Y" , $infosniper_result [ $x ] [ 1 ] ) );

           if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main WHERE browser > 0 AND timestamp BETWEEN ".$from_timestamp." AND ".$to_timestamp , 1 ); }
           elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main WHERE robot > 0 AND timestamp BETWEEN ".$from_timestamp." AND ".$to_timestamp , 1 ); }
           else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT COUNT(*) FROM infosniper_livevisits_main WHERE timestamp BETWEEN ".$from_timestamp." AND ".$to_timestamp , 1 ); }
           $hits_per_day = $temp_query [ 0 ] [ 0 ];
           unset ( $temp_query );

           if     ( $infosniper_show_what == "Visitors" ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE browser > 0 AND timestamp BETWEEN ".$from_timestamp." AND ".$to_timestamp , 1 ); }
           elseif ( $infosniper_show_what == "Robots"   ) { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE robot > 0 AND timestamp BETWEEN ".$from_timestamp." AND ".$to_timestamp , 1 ); }
           else   { $temp_query = infosniper_livevisits_dbquery ( "SELECT DISTINCT ipaddress FROM infosniper_livevisits_main WHERE timestamp BETWEEN ".$from_timestamp." AND ".$to_timestamp , 1 ); }
           $ips_per_day = count ( $temp_query );
           unset ( $temp_query );

           $hits_per_day_percent = (float) round ( ( $hits_per_day / $infosniper_results_hits_total ) * 100 , 2 );
           $ips_per_day_percent  = (float) round ( ( $ips_per_day  / $infosniper_results_hits_total_distinct ) * 100 , 2 );

           echo '
           <tr class="content-day">
            <td class="content-day-td content-width1">'.date ( "Y/m/d" , $infosniper_result [ $x ] [ 1 ] ).'</td>
            <td class="content-day-td" colspan="4">Hits: '.$hits_per_day.'&nbsp;('.$hits_per_day_percent.'%)&nbsp;&nbsp;&nbsp;Visits: '.$ips_per_day.'&nbsp;('.$ips_per_day_percent.'%)</td>
           </tr>
           ';
           //---------------------------------------
          }
         //---------------------------------------
         echo '
          <tr class="'.$back.'" onclick="toggleDetail(\'detail'.$counter.'\');return false;">
           <td class="content-td2 content-width1"><i>'.date ( "Y/m/d" , $infosniper_result [ $x ] [ 1 ] ).'</i></td>
           <td class="content-td2 content-width2"><i>'.date ( "h:i:s a" , $infosniper_result [ $x ] [ 1 ] ).'</i></td>
           <td class="content-td2 content-width3">'.$userdata.'&nbsp;'.$country.'&nbsp;'.substr ( $infosniper_result [ $x ] [ 2 ] , 0 , 15 ).'&nbsp;<i>('.substr ( $infosniper_result [ $x ] [ 12 ] , 0 , 15 ).')</i></td>
           <td class="content-td2 content-width4">'.$sitename_short.'</td>
           <td class="content-td2">'.$referer_short.'</td>
          </tr>
          <tr>
           <td colspan="5">
            <div class="detail" id="detail'.$counter.'">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr>
                <td class="detail-td1">Sitename</td>
                <td class="detail-td2">'.$sitename.'</td>
               </tr>
               <tr>
                <td class="detail-td1">Referer</td>
                <td class="detail-td2"><a href="'.$referer.'" target="_blank">'.$referer.'</a></td>
               </tr>
               <tr>
                <td class="detail-td1">Worldmap</td>
                <td class="detail-td2"><div class="worldmap"><div style="position:absolute;top:'.$worldmap_y.'px;left:'.$worldmap_x.'px;"><img src="images/pin.jpg" width="5" height="5" alt="" /></div></div></td>
               </tr>
               <tr>
                <td class="detail-td1">Check</td>
                <td class="detail-td2"><img src="images/viewmag.png" width="12" height="12" alt="Show IP on Map" title="Show IP on Map" />&nbsp;<a href="javascript:openmap(\'http://www.infosniper.net/gadget-map.php?ip='.$infosniper_result [ $x ] [ 0 ].'\');">Show IP Location on Map</a>&nbsp;&nbsp;&nbsp;<img src="images/viewmag.png" width="12" height="12" alt="Check IP at Senderbase" title="Check IP at Senderbase" />&nbsp;<a href="http://www.senderbase.org/senderbase_queries/detailip?search_string='.$infosniper_result [ $x ] [ 0 ].'" target="_blank">Check IP at Senderbase</a>&nbsp;&nbsp;<img src="images/viewmag.png" width="12" height="12" alt="Check IP at Infosniper.net" title="Check IP at Infosniper.net" />&nbsp;<a href="http://www.infosniper.net/index.php?ip_address='.$infosniper_result [ $x ] [ 0 ].'" target="_blank">Check IP on Infosniper.net</a></td>
               </tr>
               <tr>
                <td class="detail-td1">IP Address</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 0 ].'</td>
               </tr>
               <tr>
                <td class="detail-td1">Hostname</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 10 ].'</td>
               </tr>
               <tr>
                <td class="detail-td1">Provider</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 11 ].'&nbsp;&nbsp;<img src="images/viewmag.png" width="12" height="12" alt="Google Search Provider" title="Google Search Provider" />&nbsp;<a href="http://www.google.com/search?hl=en&q='.$infosniper_result [ $x ] [ 11 ].'" target="_blank">Search for Provider at Google</a></td>
               </tr>
               <tr>
                <td class="detail-td1">Country</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 9 ].'&nbsp;&nbsp;'.$country.'</td>
               </tr>
               <tr>
                <td class="detail-td1">State</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 12 ].'</td>
               </tr>
               <tr>
                <td class="detail-td1">City</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 2 ].'</td>
               </tr>
               <tr>
                <td class="detail-td1">Latitude</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 16 ].'</td>
               </tr>
               <tr>
                <td class="detail-td1">Longitude</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 17 ].'</td>
               </tr>
               <tr>
                <td class="detail-td1">Areacode</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 13 ].'</td>
               </tr>
               <tr>
                <td class="detail-td1">Postalcode</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 14 ].'</td>
               </tr>
               <tr>
                <td class="detail-td1">DMA Code</td>
                <td class="detail-td2">'.$infosniper_result [ $x ] [ 15 ].'</td>
               </tr>
              '.$detaildata.'
              </table>
             </div>
           </td>
          </tr>
         ';
         $counter++;
        }
       //---------------------------------------
      }
     //----------------------------------------------
    ?>
   </table>
  </div>

   <table width="100%" cellspacing="0" cellpadding="0">
    <tr>
     <td class="content-header">
     	<img src="images/documentinfo.png" width="12" height="12" alt="Total Hits" title="Total Hits" />
     	Total Hits:<?php echo $infosniper_results_hits_total; ?>
     	&nbsp;
     	<img src="images/documentinfo.png" width="12" height="12" alt="Total IPs" title="Total IPs" />
     	Total IPs:<?php echo $infosniper_results_hits_total_distinct; ?>
     	&nbsp;
     	<img src="images/documentinfo.png" width="12" height="12" alt="Log Duration" title="Log Duration" />
     	Log Duration:<?php echo $infosniper_results_duration; ?>
     	&nbsp;
     	<img src="images/documentinfo.png" width="12" height="12" alt="Log Start" title="Log Start" />
     	Log Start:<?php echo $infosniper_results_first_entry; ?>
     	&nbsp;
     	<img src="images/documentinfo.png" width="12" height="12" alt="Log End" title="Log End" />
     	Log End:<?php echo $infosniper_results_last_entry; ?>
      &nbsp;
     	<img src="images/documentinfo.png" width="12" height="12" alt="Infosniper Query Credits left" title="Infosniper Query Credits left" />
     	Credits:<?php echo $infosniper_query_credits; ?>
     </td>
    </tr>
   </table>

 </div>
</body>
</html>