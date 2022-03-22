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
 function infosniper_livevisits_dbquery ( $query , $switch )
  {
   //--------------------------
   $db_entries      = array ();
   $db_connection   = 0;
   $db_counter      = 0;
   $db_number_rows  = 0;
   $db_query_result = 0;
   $db_temp         = 0;
   $db_temp_counter = 0;
   $db_error        = 0;

   $db_host         = $GLOBALS [ "infosniper_db_host"     ];
   $db_name         = $GLOBALS [ "infosniper_db_name"     ];
   $db_user         = $GLOBALS [ "infosniper_db_user"     ];
   $db_password     = $GLOBALS [ "infosniper_db_password" ];
   //--------------------------
   $db_connection = mysql_pconnect ( $db_host , $db_user , $db_password );
   //--------------------------
   if ( !$db_connection ) { $db_error = mysql_error(); die ( $db_error ); }
   //--------------------------
   if ( !mysql_select_db ( $db_name , $db_connection ) ) { $db_error = mysql_error(); die ( $db_error ); }
   //--------------------------
   $query_result = mysql_query ( $query , $db_connection );
   //--------------------------
   if ( !$query_result ) { $db_error = mysql_error(); die ( $db_error ); }
   //--------------------------
   if  ( $switch == 1 )
    {
     $db_number_rows = mysql_num_rows ( $query_result );
     while ( $db_temp = mysql_fetch_row ( $query_result ) )
      {
       for ( $db_temp_counter = 0 ; $db_temp_counter <= count ( $db_temp ) ; $db_temp_counter++ )
        {
         $db_entries [ $db_counter ] [ $db_temp_counter ] = $db_temp[ $db_temp_counter ];
        }
       $db_counter++;
      }
    }
   //--------------------------
   mysql_close( $db_connection );
   return $db_entries;
  }
 //----------------------------------------------
?>