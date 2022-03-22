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
 // Infosniper_IPQuery Function
 function infosniper_livevisits_xmlquery ( $queryKey , $queryLanguage )
  {
   //----------------------------------------------
   // Determine the users ip address
    $ip_address = $_SERVER [ "REMOTE_ADDR"          ];
   #$ip_address = $_SERVER [ "HTTP_X_FORWARDED_FOR" ];
   #$ip_address = $_SERVER [ "HTTP_CLIENT_IP"       ];
   #$ip_address = getenv   ( "HTTP_X_FORWARDED_FOR" );
   #$ip_address = getenv   ( "HTTP_CLIENT_IP"       );
   #$ip_address = getenv   ( "REMOTE_ADDR"          );
   //----------------------------------------------
   // Query URL
   $queryUrl = "http://www.infosniper.net/xml.php?ip_address=".$ip_address;

   // Create Query with Personal Query Key
   if ( $queryKey != "" ) { $queryUrl = $queryUrl."&k=".$queryKey; }

   // Set Language Parameter
   if ( $queryLanguage == "1" ) { $queryLanguage = "&lang=1"; }
   elseif ( $queryLanguage == "2" ) { $queryLanguage = "&lang=2"; }
   else { $queryLanguage = "&lang=1"; }

   // Create complete Query URL
   $queryUrl = $queryUrl.$queryLanguage;

   // Run Query
   $xmlString = file_get_contents ( $queryUrl );
   $xml = new SimpleXMLElement ( $xmlString );
   //----------------------------------------------
   // Create Result Array
   $results = array ();

   // Fill Result Array
   $results [ "ipaddress"   ] = mysql_escape_string ( $xml->result[0]->ipaddress                 );
   $results [ "hostname"    ] = mysql_escape_string ( $xml->result[0]->hostname                  );
   $results [ "provider"    ] = mysql_escape_string ( htmlentities ( $xml->result[0]->provider ) );
   $results [ "country"     ] = mysql_escape_string ( htmlentities ( $xml->result[0]->country  ) );
   $results [ "countrycode" ] = mysql_escape_string ( $xml->result[0]->countrycode               );
   $results [ "state"       ] = mysql_escape_string ( htmlentities ( $xml->result[0]->state    ) );
   $results [ "city"        ] = mysql_escape_string ( ( $xml->result[0]->city     ) );
   $results [ "areacode"    ] = mysql_escape_string ( $xml->result[0]->areacode                  );
   $results [ "postalcode"  ] = mysql_escape_string ( $xml->result[0]->postalcode                );
   $results [ "dmacode"     ] = mysql_escape_string ( $xml->result[0]->dmacode                   );
   $results [ "latitude"    ] = mysql_escape_string ( $xml->result[0]->latitude                  );
   $results [ "longitude"   ] = mysql_escape_string ( $xml->result[0]->longitude                 );

   // Return XML Results
   return $results;
   //----------------------------------------------
  }
 //----------------------------------------------
?>