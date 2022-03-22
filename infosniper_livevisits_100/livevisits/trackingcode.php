<?php
 //----------------------------------------------
 // Internal Webserver Path to this Script
 // Do not forget to add a "/" at the end
 $infosniper_internal_path = $_SERVER [ "DOCUMENT_ROOT" ]."/livevisits/";

 // Define constant for security include purposes
 define ( "infosniper_livevisits" , "yes" );

 // Include the Tracking Function
 include ( $infosniper_internal_path."infosniper_livevisits_track.php" );
 //----------------------------------------------
?>