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

 //-----------------------------------------------------------
 if ( !defined ( "infosniper_livevisits" ) ) { exit; }
 //-----------------------------------------------------------

 //----------------------------------------------
 // Include Config File
 include ( $infosniper_internal_path."config/infosniper_livevisits_config.php" );

 // Include Database Query Function
 include ( $infosniper_internal_path."func/infosniper_livevisits_dbquery.php"  );

 // Include XML Query Function
 include ( $infosniper_internal_path."func/infosniper_livevisits_xmlquery.php" );

 // Include User Tracking Function
 include ( $infosniper_internal_path."func/infosniper_livevisits_userdata.php" );

 // Include Pattern Matching Function
 include ( $infosniper_internal_path."func/infosniper_livevisits_pattern.php"  );
 //----------------------------------------------

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

 //----------------------------------------------
 // Check for Existing Entry
 $infosniper_timestamp = time ();
 $infosniper_result = infosniper_livevisits_dbquery ( "SELECT timestamp FROM infosniper_livevisits_main WHERE timestamp='".$infosniper_timestamp."' AND ipaddress='".$_SERVER [ "REMOTE_ADDR" ]."'", 1 );
 if ( count ( $infosniper_result ) == 0 )
  {
   //----------------------------------------------
   // Get User Data
   $infosniper_userdata [ "agent" ] = $_SERVER [ "HTTP_USER_AGENT" ];
   $infosniper_userdata = infosniper_livevisits_userdata ( $infosniper_userdata );
   //----------------------------------------------
   // If Visitor is a Robot
   if ( array_key_exists ( "robot" , $infosniper_userdata ) )
    {
     //----------------------------------------------
     $infosniper_pattern_robot   = infosniper_livevisits_pattern_matching ( "1" , $infosniper_userdata [ "robot" ] , $infosniper_userdata [ "robot_note" ] );
     $infosniper_pattern_os      = "NULL";
     $infosniper_pattern_browser = "NULL";
     //----------------------------------------------
    }
   else // If its a real Visitor
    {
     //----------------------------------------------
     $infosniper_pattern_robot   = "NULL";
     $infosniper_pattern_os      = infosniper_livevisits_pattern_matching ( "2" , $infosniper_userdata [ "os"      ] , $infosniper_userdata [ "os_note"      ] );
     $infosniper_pattern_browser = infosniper_livevisits_pattern_matching ( "3" , $infosniper_userdata [ "browser" ] , $infosniper_userdata [ "browser_note" ] );
     //----------------------------------------------
    }
   //----------------------------------------------
   // Get Referer and Sitename
   $infosniper_pattern_sitename  = infosniper_livevisits_pattern_matching ( "4" , mysql_escape_string ( $_SERVER [ "PHP_SELF"     ] ) , 0 );
   $infosniper_pattern_referer   = infosniper_livevisits_pattern_matching ( "5" , mysql_escape_string ( $_SERVER [ "HTTP_REFERER" ] ) , 0 );
   //----------------------------------------------
   // Check for existing ip address
   $infosniper_query = "SELECT ipaddress FROM infosniper_livevisits_ip WHERE ipaddress='".$_SERVER [ "REMOTE_ADDR" ]."'";
   $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 1 );
   unset ( $infosniper_query );
   if ( count ( $infosniper_result ) != 0 ) // if entry is found
    {
     $infosniper_queryResults = array ( "ipaddress" => $_SERVER [ "REMOTE_ADDR" ] );
   	}
   else // if no entry is found
    {
     //----------------------------------------------
     // Run Query
     $infosniper_queryResults = infosniper_livevisits_xmlquery ( $infosniper_queryKey , $infosniper_queryLanguage );
     // Check for Quota Exceeded
     if ( $infosniper_queryResults [ "hostname" ] == "Quota exceeded" ) { exit;	}
     //----------------------------------------------
     // Insert New IP Address Location Data
     $infosniper_query = "INSERT INTO infosniper_livevisits_ip VALUES ( '".$infosniper_queryResults [ "ipaddress" ]."','".$infosniper_queryResults [ "hostname" ]."','".$infosniper_queryResults [ "provider" ]."','".$infosniper_queryResults [ "country" ]."','".$infosniper_queryResults [ "countrycode" ]."','".$infosniper_queryResults [ "state" ]."','".$infosniper_queryResults [ "city" ]."','".$infosniper_queryResults [ "areacode" ]."','".$infosniper_queryResults [ "postalcode" ]."','".$infosniper_queryResults [ "dmacode" ]."','".$infosniper_queryResults [ "latitude" ]."','".$infosniper_queryResults [ "longitude" ]."' )";
     $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
     unset ( $infosniper_query ); unset ( $infosniper_result );
     //----------------------------------------------
   	}
   //----------------------------------------------
   // Add visitor to table
   $infosniper_query = "INSERT INTO infosniper_livevisits_main VALUES ( NULL , '".$infosniper_timestamp."','".$infosniper_queryResults [ "ipaddress" ]."',".$infosniper_pattern_robot.",".$infosniper_pattern_browser.",".$infosniper_pattern_os.",".$infosniper_pattern_sitename.",".$infosniper_pattern_referer." )";
   $infosniper_result = infosniper_livevisits_dbquery ( $infosniper_query , 0 );
   unset ( $infosniper_query ); unset ( $infosniper_result );
   //----------------------------------------------
  }
 //----------------------------------------------
?>