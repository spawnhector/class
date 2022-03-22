<?php
//-----------------------------------------------------------
 /*
 * This code is part of BBClone ( http://www.bbclone.de )
 * Copyright (C) 2001-2007, the BBClone Team
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Some Parts of the original code have been modified for the use in
 * the Infosniper LiveVisitors Script
 * Copyright (C) 2008 by Infosniper.net
 */
//-----------------------------------------------------------

//-----------------------------------------------------------
if ( !defined ( "infosniper_livevisits" ) ) { exit; }
//-----------------------------------------------------------

//-----------------------------------------------------------
function infosniper_livevisits_userdata ( $connect )
 {
  //-----------------------------------------------------------
  // define constants for security include purposes
  define ( "infosniper_livevisits" , "yes" );

  $bonus_counter = 0;

  foreach ( array ( "robot" , "browser" , "os" , "bonus" ) as $i )
   {
    //-----------------------------------------------------------
    require ( $GLOBALS [ "infosniper_internal_path" ]."lib/".$i.".php" );
    reset   ( $$i );
    $bonus_counter = 0;
    //-----------------------------------------------------------
    while ( list ( ${$i."_name"} , ${$i."_elem"} ) = each ( $$i ) )
     {
      //-----------------------------------------------------------
      reset ( ${$i."_elem"} [ "rule" ] );
      while ( list ( $pattern , $note ) = each ( ${$i."_elem"} [ "rule" ] ) )
       {
        //-----------------------------------------------------------
        //if (!eregi($pattern, $connect['agent'], $regs)) continue;
	      if ( !preg_match ( '~'.$pattern.'~i' , $connect [ "agent" ] , $regs ) ) continue;

        if ( $i == 'bonus' ) { $connect [ $i.'_'.$bonus_counter ] = ${$i."_name"}; }
        else { $connect [ $i ] = ${$i."_name"}; }

        if ( preg_match ( ":\\\\[\d]{1}:" , $note ) )
         {
          //-----------------------------------------------------------
          $str = preg_replace ( ":\\\\([\d]{1}):" , "\$regs[\\1]" , $note);
          eval( "\$str = \"$str\";" );
          $connect [ $i."_note".(($i == 'bonus') ? '_'.$bonus_counter : '' ) ] = $str;
          //-----------------------------------------------------------
         }
        //-----------------------------------------------------------
        if ( $i != "bonus" ) break 2;
        $bonus_counter++;
       //-----------------------------------------------------------
      }
     //-----------------------------------------------------------
    }
    if ( !empty ( $connect [ "robot" ] ) ) break;
   //-----------------------------------------------------------
  }
  return $connect;
  //-----------------------------------------------------------
 }
//-----------------------------------------------------------
?>