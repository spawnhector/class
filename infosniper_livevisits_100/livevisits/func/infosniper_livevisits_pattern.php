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

//------------------------------------------------------------------
function pattern_matching_reverse ( $meta , $value ) // only for site_name_reverse
 {
  //------------------------------------------------------------------
  $pattern_file_name = "config/pattern_site_name.inc";
  //------------------------------------------------------------------
  $pattern_file = fopen ( $pattern_file_name , "r" );
   while ( !FEOF ( $pattern_file ) )
    {
     //------------------------------------------------------------------
     $pattern_file_entry = fgetcsv ( $pattern_file , 60000 , "|" );
     //------------------------------------------------------------------
     if ( $pattern_file_entry [ 0 ] == $value ) // if entry is found
      {
       //------------------------------------------------------------------
       $pattern = $pattern_file_entry [ 1 ]; // get the pattern name
       //------------------------------------------------------------------
      }
     //------------------------------------------------------------------
    }
  fclose ( $pattern_file );
  unset  ( $pattern_file );
  //------------------------------------------------------------------
  $pattern = $value; // if meta = site_name, the former value will be given back
  //------------------------------------------------------------------
  return $pattern; // return pattern name
 }
//------------------------------------------------------------------
function infosniper_livevisits_pattern_matching ( $meta , $name , $version )
 {
 	//------------------------------------------------------------------
  // include config file
  include ( $GLOBALS [ "infosniper_internal_path" ]."config/infosniper_livevisits_config.php" );
  //------------------------------------------------------------------
  //robot = 1
  //os = 2
  //browser = 3
  //sitename = 4
  //referer = 5
  if ( $meta == "1"  ) { $table = "infosniper_livevisits_robot";    $query = "SELECT id FROM ".$table." WHERE name='".$name."' AND version='".$version."'"; include ( $GLOBALS [ "infosniper_internal_path" ]."lib/robot.php"   ); }
  if ( $meta == "2"  ) { $table = "infosniper_livevisits_os";       $query = "SELECT id FROM ".$table." WHERE name='".$name."' AND version='".$version."'"; include ( $GLOBALS [ "infosniper_internal_path" ]."lib/os.php"      ); }
  if ( $meta == "3"  ) { $table = "infosniper_livevisits_browser";  $query = "SELECT id FROM ".$table." WHERE name='".$name."' AND version='".$version."'"; include ( $GLOBALS [ "infosniper_internal_path" ]."lib/browser.php" ); }
  if ( $meta == "4"  ) { $table = "infosniper_livevisits_sitename"; $query = "SELECT id FROM ".$table." WHERE name='".$name."'"; }
  if ( $meta == "5"  ) { $table = "infosniper_livevisits_referer";  $query = "SELECT id FROM ".$table." WHERE name='".$name."'"; }
  //------------------------------------------------------------------
	$result = infosniper_livevisits_dbquery ( $query , 1 );
	//------------------------------------------------------------------
	if ( count ( $result ) != 0 ) // if entry is found
	 {
	 	//------------------------------------------------------------------
	 	$pattern = $result [ 0 ] [ 0 ];
	 	//------------------------------------------------------------------
	 }
	else // a new entry has to be saved
   {
    //------------------------------------------------------------------
    if ( $meta == "1"  )
     {
      //------------------------------------------------------------------
      $title = "'".mysql_escape_string ( $robot [ $name ] [ "title" ] )."'"; if ( $title == "''" ) { $title = "NULL"; }
      $uri   = "'".mysql_escape_string ( $robot [ $name ] [ "uri"   ] )."'"; if ( $uri   == "''" ) { $uri   = "NULL"; }
      $icon  = "'robot_".$robot [ $name ] [ "icon"  ].".png'"; if ( $icon  == "'robot_.png'" ) { $icon  = "NULL"; }

      $query  = "INSERT INTO ".$table." VALUES ( NULL , '".$name."' , '".$version."' , ".$title." , ".$uri." , ".$icon." )";
	    $result = infosniper_livevisits_dbquery ( $query , 0 );
	    unset ( $query ); unset ( $result );

	    $query  = "SELECT id FROM ".$table." WHERE name='".$name."' AND version='".$version."'";
	    $result = infosniper_livevisits_dbquery ( $query , 1 );
	    $pattern = $result [ 0 ] [ 0 ];
      //------------------------------------------------------------------
     }
    //------------------------------------------------------------------
    if ( $meta == "2"  )
     {
      //------------------------------------------------------------------
      $title = "'".mysql_escape_string ( $os [ $name ] [ "title" ] )."'"; if ( $title == "''" ) { $title = "NULL"; }
      $uri   = "'".mysql_escape_string ( $os [ $name ] [ "uri"   ] )."'"; if ( $uri   == "''" ) { $uri   = "NULL"; }
      $icon  = "'os_".$os [ $name ] [ "icon"  ].".png'"; if ( $icon  == "'os_.png'" ) { $icon  = "NULL"; }

      $query  = "INSERT INTO ".$table." VALUES ( NULL , '".$name."' , '".$version."' , ".$title." , ".$uri." , ".$icon." )";
	    $result = infosniper_livevisits_dbquery ( $query , 0 );
	    unset ( $query ); unset ( $result );

	    $query  = "SELECT id FROM ".$table." WHERE name='".$name."' AND version='".$version."'";
	    $result = infosniper_livevisits_dbquery ( $query , 1 );
	    $pattern = $result [ 0 ] [ 0 ];
      //------------------------------------------------------------------
     }
    //------------------------------------------------------------------
    if ( $meta == "3"  )
     {
      //------------------------------------------------------------------
      $title = "'".mysql_escape_string ( $browser [ $name ] [ "title" ] )."'"; if ( $title == "''" ) { $title = "NULL"; }
      $uri   = "'".mysql_escape_string ( $browser [ $name ] [ "uri"   ] )."'"; if ( $uri   == "''" ) { $uri   = "NULL"; }
      $icon  = "'browser_".$browser [ $name ] [ "icon"  ].".png'"; if ( $icon  == "'browser_.png'" ) { $icon  = "NULL"; }

      $query  = "INSERT INTO ".$table." VALUES ( NULL , '".$name."' , '".$version."' , ".$title." , ".$uri." , ".$icon." )";
	    $result = infosniper_livevisits_dbquery ( $query , 0 );
	    unset ( $query ); unset ( $result );

	    $query  = "SELECT id FROM ".$table." WHERE name='".$name."' AND version='".$version."'";
	    $result = infosniper_livevisits_dbquery ( $query , 1 );
	    $pattern = $result [ 0 ] [ 0 ];
      //------------------------------------------------------------------
     }
    //------------------------------------------------------------------
    if ( $meta == "4"  )
     {
      //------------------------------------------------------------------
      $query  = "INSERT INTO ".$table." VALUES ( NULL , '".$name."' )";
	    $result = infosniper_livevisits_dbquery ( $query , 0 );
	    unset ( $query ); unset ( $result );

	    $query  = "SELECT id FROM ".$table." WHERE name='".$name."'";
	    $result = infosniper_livevisits_dbquery ( $query , 1 );
	    $pattern = $result [ 0 ] [ 0 ];
      //------------------------------------------------------------------
     }
    //------------------------------------------------------------------
    if ( $meta == "5"  )
     {
      //------------------------------------------------------------------
      $query  = "INSERT INTO ".$table." VALUES ( NULL , '".$name."' )";
	    $result = infosniper_livevisits_dbquery ( $query , 0 );
	    unset ( $query ); unset ( $result );

	    $query  = "SELECT id FROM ".$table." WHERE name='".$name."'";
	    $result = infosniper_livevisits_dbquery ( $query , 1 );
	    $pattern = $result [ 0 ] [ 0 ];
      //------------------------------------------------------------------
     }
	  //------------------------------------------------------------------
   }
  //------------------------------------------------------------------
  return $pattern; // return pattern id
 }
//------------------------------------------------------------------
?>