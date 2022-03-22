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

$os = array(
  "aix"=> array(
    "icon"=> "aix",
    "title" => "AIX",
    "rule" => array(
      "-aix([0-9.]{1,10})" => "\\1",
      "[ ;\(]aix" => ""
    )
  ),
  "amiga" => array(
    "icon" => "amiga",
    "title" => "AmigaOS",
    "rule" => array(
      "Amiga[ ]?OS[ /]([0-9.V]{1,10})" => "\\1",
      "amiga" => ""
    )
  ),
  "atari" => array(
    "icon" => "other",
    "title" => "Atari",
    "rule" => array(
      "atari[ /]([0-9.b]{1,10})" => "\\1"
    )
  ),
  "atheos" => array(
    "icon" => "atheos",
    "title" => "AtheOS",
    "rule" => array(
      "atheos" => ""
    )
  ),
  "beos" => array(
    "icon" => "be",
    "title" => "BeOS",
    "rule" => array(
      "beos[ a-z]*([0-9.]{1,10})" => "\\1",
      "beos" => ""
    )
  ),
  "bluecoat" => array(
    "icon" => "bluecoat",
    "title" => "Bluecoat DRTR",
    "rule" => array(
      "bluecoat drtr" => "\\1"
    )
  ),
  "cerberian" => array(
    "icon" => "bluecoat",
    "title" => "Cerberian DRTR",
    "rule" => array(
      "Cerberian Drtrs Version[ /\-]([0-9.]{1,10})" => "\\1"
    )
  ),
  "c64" => array(
    "icon" => "c64",
    "title" => "Commodore 64",
    "rule" => array(
      "Commodore[ ]?64" => ""
    )
  ),
  "darwin" => array(
    "icon" => "darwin",
    "title" => "Darwin",
    "rule" => array(
      "Darwin[ ]?([0-9.]{1,10})" => "\\1",
      "Darwin" => ""
    )
  ),
  "digital" => array(
    "icon" => "digital",
    "title" => "Digital",
    "rule" => array(
      "OSF[0-9][ ]?V(4[0-9.]{1,10})" => "\\1"
    )
  ),
  "dreamcast" => array(
    "icon" => "dreamcast",
    "title" => "SEGA Dreamcast",
    "rule" => array(
      "\(SonicPassport\)" => "",
      "\(Dream(Passport|Key)[ /]([0-9.]{1,10})\)" => "",
      "\(Dream(Passport|Key)[ /]([0-9.]{1,10}); ([A-Z.a-z/]{1,50})\)" => "",
      "\(Planetweb[ /]([0-9.a-z]{1,10})" => ""
    ),
    "uri" => "http://css.vis.ne.jp/dp-agent.shtml"
  ),
  "embedix" => array(
    "icon" => "question",
    "title" => "Embedix",
    "rule" => array(
     "Embedix" => ""
    )
  ),
  "fedora" => array(
    "icon" => "fedora",
    "title" => "fedora",
    "rule" => array(
     "fedora" => ""
    )
  ),
  "fenix" => array(
    "icon" => "question",
    "title" => "Fenix",
    "rule" => array(
     "Fenix" => ""
    )
  ),
  "freebsd" => array(
    "icon" => "freebsd",
    "title" => "FreeBSD",
    "rule" => array(
     "free[ \-]?bsd[ /]([a-z0-9._]{1,10})" => "\\1",
     "free[ \-]?bsd" => ""
    )
  ),
  "gentoo" => array(
    "icon" => "gentoo",
    "title" => "Gentoo Linux",
    "rule" => array(
      "gentoo" => ""
    ),
    "uri" => "http://www.gentoo.org/"
  ),
  "hiptop" => array(
    "icon" => "question",
    "title" => "hiptop",
    "rule" => array(
      "Danger hiptop ([0-9.]{1,10})" => "\\1"
    )
  ),
  "hpux" => array(
    "icon" => "hp",
    "title" => "HPUX",
    "rule" => array(
      "hp[ \-]?ux[ /]([a-z0-9._]{1,10})" => "\\1"
    )
  ),
  "irix" => array(
    "icon" => "irix",
    "title" => "IRIX",
    "rule" => array(
      "irix[0-9]*[ /]([0-9.]{1,10})" => "\\1",
      "irix" => ""
    )
  ),
  "ipod" => array(
    "icon" => "macosx",
    "title" => "MacOSX iPod Touch",
    "rule" => array(
      "iPod" => "\\1"
    ),
    "uri" => "http://www.apple.com/itunes/"
  ),
  "iphone" => array(
    "icon" => "macosx",
    "title" => "MacOSX iPhone",
    "rule" => array(
      "iPhone" => "\\1"
    ),
    "uri" => "http://www.apple.com/iphone/"
  ),
  "macosx" => array(
    "icon" => "macosx",
    "title" => "MacOS X",
    "rule" => array(
      "Mac[ _]?OS[ _]?X[ /]([0-9.]{1,10})" => "\\1",
      "Mac[ _]?OS[ _]?X" => "",
      "Mac 10.([0-9.]{1,10})" => "\\1"
    ),
    "uri" => "http://www.apple.com/macosx/"
  ),
  "macppc" => array(
    "icon" => "macppc",
    "title" => "MacOS PPC",
    "rule" => array(
      "Mac(_Power|intosh.+P)PC" => ""
    )
  ),
  "morphos" => array(
    "icon" => "morphos",
    "title" => "MorphOS",
    "rule" => array(
      "MorphOS[ /]([0-9.]{1,10})" => "\\1",
      "MorphOS" => ""
    )
  ),
  "netbsd" => array(
    "icon" => "netbsd",
    "title" => "NetBSD",
    "rule" => array(
      "net[ \-]?bsd[ /]([a-z0-9._]{1,10})" => "\\1",
      "net[ \-]?bsd" => ""
    )
  ),
  "nintendods" => array(
    "icon" => "ds",
    "title" => "Nintento DS",
    "rule" => array(
      "Nintendo DS v([0-9.]{1,10})" => ""
    )
  ),
  "openbsd" => array(
    "icon" => "openbsd",
    "title" => "OpenBSD",
    "rule" => array(
      "open[ \-]?bsd[ /]([a-z0-9._]{1,10})" => "\\1",
      "open[ \-]?bsd" => ""
    )
  ),
  "openvms" => array(
    "icon" => "openvms",
    "title" => "OpenVMS",
    "rule" => array(
      "Open[ \-]?VMS[ /]([a-z0-9._]{1,10})" => "\\1",
      "Open[ \-]?VMS" => ""
    )
  ),
  "palm" => array(
    "icon" => "palm",
    "title" => "PalmOS",
    "rule" => array(
      "Palm[ \-]?(Source|OS)[ /]?([0-9.]{1,10})" => "\\2",
      "Palm[ \-]?(Source|OS)" => ""
    )
  ),
  "pclinux" => array(
    "icon" => "pclinux",
    "title" => "PCLinuxOS",
    "rule" => array(
      "PCLinuxOS[ /]?([0-9.]{1,10})" => "\\1"
    ),
    "uri" => "http://www.pclinuxos.com/"
  ),
  "photon" => array(
    "icon" => "qnx",
    "title" => "QNX Photon",
    "rule" => array(
      "photon" => ""
    )
  ),
  "psp" => array(
    "icon" => "playstation",
    "title" => "PlayStation Portable",
    "rule" => array(
      "PlayStation Portable.* ([0-9._]{1,10})" => "\\1",
      "PlayStation Portable" => ""
    )
  ),
  "playstation" => array(
    "icon" => "playstation",
    "title" => "PlayStation",
    "rule" => array(
      "PlayStation" => "",
      "PS2" => ""
    )
  ),
  "reactos" => array(
    "icon" => "reactos",
    "title" => "ReactOS",
    "rule" => array(
      "ReactOS[ /]?([0-9.]{1,10})" => "\\1",
      "ReactOS" => ""
    )
  ),
  "risc" => array(
    "icon" => "risc",
    "title" => "RiscOS",
    "rule" => array(
      "risc[ \-]?os[ /]?([0-9.]{1,10})" => "\\1",
      "risc[ \-]?os" => ""
    )
  ),
  "suse" => array(
    "icon" => "suse",
    "title" => "SuSE",
    "rule" => array(
      "suse" => ""
    ),
    "uri" => ""
  ),
  "sun" => array(
    "icon" => "sun",
    "title" => "SunOS",
    "rule" => array(
      "sun[ \-]?os[ /]?([0-9.]{1,10})" => "\\1",
      "sun[ \-]?os" => "",
      "^SUNPlex[ /]?([0-9.]{1,10})" => "\\1"
    ),
    "uri" => ""
  ),
  "symbian" => array(
    "icon"  => "symbian",
    "title" => "Symbian OS",
    "rule"  => array(
      "symbian[ \-]?os[ /]?([0-9.]{1,10})" => "\\1",
      "symbian" => ""
    )
  ),
  "tru64" => array(
    "icon" => "tru64",
    "title" => "Tru64",
    "rule" => array(
      "OSF[0-9][ ]?V(5[0-9.]{1,10})" => "\\1"
    )
  ),
  "ubuntu" => array(
    "icon" => "ubuntu",
    "title" => "Ubuntu Linux",
    "rule" => array(
      "ubuntu" => ""
    ),
    "uri" => "http://www.ubuntu.com/"
  ),
  "unixware" => array(
    "icon" => "sco",
    "title" => "UnixWare",
    "rule" => array(
      "unixware[ /]?([0-9.]{1,10})" => "\\1",
      "unixware" => ""
    )
  ),
  "wii" => array(
    "icon" => "wii",
    "title" => "Wii",
    "rule" => array(
      "^Nintendo Wii" => "",
      " wii" => ""
    ),
    "uri" => "http://www.wii.com/"
  ),
  "windowsxp64" => array(
    "icon" => "windowsxp",
    "title" => "Windows XP (64-bit)",
    "rule" => array(
      "wi(n|ndows)[ \-]?(2003|nt[ /]?5\.2).*(WOW64|Win64)" => ""
    ),
    "uri" => "http://www.microsoft.com/windowsxp/64bit/"
  ),
  "windows2003" => array(
    "icon" => "windowsxp",
    "title" => "Windows 2003",
    "rule" => array(
      "wi(n|ndows)[ \-]?(2003|nt[ /]?5\.2)" => ""
    ),
    "uri" => "http://www.microsoft.com/windowsserver2003/"
  ),
  "windows2k" => array(
    "icon" => "windows",
    "title" => "Windows 2000",
    "rule" => array(
      "wi(n|ndows)[ \-]?(2000|nt[ /]?5\.0)" => ""
    ),
    "uri" => "http://www.microsoft.com/windows2000/"
  ),
  "windows31" => array(
    "icon" => "windows31",
    "title" => "Windows 3.1",
    "rule" => array(
      "wi(n|ndows)[ \-]?3\.[1]+" => "",
      "Win16" => ""
    ),
    "uri" => ""
  ),
  "windows95" => array(
    "icon" => "windows",
    "title" => "Windows 95",
    "rule" => array(
      "wi(n|ndows)[ \-]?95" => ""
    ),
    "uri" => "http://www.microsoft.com/windows95/"
  ),
  "windowsce" => array(
    "icon" => "windows",
    "title" => "Windows CE",
    "rule" => array(
      "wi(n|ndows)[ \-]?ce" => "",
      "wi(n|ndows)[ /.;]*mobile" => "",
      "(Microsoft|Windows) Pocket" => ""
    ),
    "uri" => "http://www.microsoft.com/windows/embedded/"
  ),
  "windowsme" => array(
    "icon" => "windows",
    "title" => "Windows ME",
    "rule" => array(
      "win 9x 4\.90" => "",
      "wi(n|ndows)[ \-]?me" => ""
    ),
    "uri" => "http://www.microsoft.com/windowsme/"
  ),
  "windowsvista" => array(
    "icon" => "windowsvista",
    "title" => "Windows Vista",
    "rule" => array(
      "Windows Vista" => "",
      "wi(n|ndows)[ \-]?nt[ /]?6\.0" => ""
    ),
    "uri" => "http://www.microsoft.com/windowsvista/"
  ),
  "windowsmc" => array(
    "icon" => "windowsxp",
    "title" => "Windows Media Center",
    "rule" => array(
      "Media Center PC[ /]([0-9.]{1,10})" => "\\1"
    ),
    "uri" => "http://www.microsoft.com/windowsxp/mediacenter/"
  ),
  "windowsxp" => array(
    "icon" => "windowsxp",
    "title" => "Windows XP",
    "rule" => array(
      "Windows XP" => "",
      "wi(n|ndows)[ \-]?nt[ /]?5\.1" => ""
    ),
    "uri" => "http://www.microsoft.com/windowsxp/"
  ),
  "zenwalk" => array(
    "icon" => "zenwalk",
    "title" => "Zenwalk",
    "rule" => array(
      "Zenwalk GNU Linux" => ""
    ),
    "uri" => "http://www.zenwalk.org/"
  ),
// The following ones are catch ups, they got to stay here.
  "debian" => array(
    "icon" => "debian",
    "title" => "Debian Linux",
    "rule" => array(
      "debian" => ""
    ),
    "uri" => "http://www.debian.org/"
  ),
  "bsd" => array(
    "icon" => "bsd",
    "title" => "BSD",
    "rule" => array(
      "bsd" => ""
    )
  ),
  "linux" => array(
    "icon" => "linux",
    "title" => "Linux",
    "rule" => array(
      "linux[ /\-]([a-z0-9._]{1,10})" => "\\1",
      "linux" => ""
    ),
    "uri" => "http://www.kernel.org/"
  ),
  "os2" => array(
    "icon" => "os2",
    "title" => "OS/2 Warp",
    "rule" => array(
      "warp[ /]?([0-9.]{1,10})" => "\\1",
      "os[ /]?2" => ""
    )
  ),
  "mac" => array(
    "icon" => "mac",
    "title" => "MacOS",
    "rule" => array(
      "mac[^hk]" => ""
    ),
    "uri" => ""
  ),
  "windowsnt" => array(
    "icon" => "windows",
    "title" => "Windows NT",
    "rule" => array(
      "wi(n|ndows)[ \-]?nt[ /]?([0-4][0-9.]{1,10})" => "\\2",
      "wi(n|ndows)[ \-][ /]?([0-4][0-9.]{1,10})" => "\\2",
      "wi(n|ndows)[ \-]?nt" => ""
    ),
    "uri" => "http://www.microsoft.com/windowsnt/"
  ),
  "windows98" => array(
    "icon" => "windows",
    "title" => "Windows 98",
    "rule" => array(
      "wi(n|ndows)[ \-]?98" => ""
    ),
    "uri" => "http://www.microsoft.com/windows98/"
  ),
  "windows" => array(
    "icon" => "windows",
    "title" => "Windows",
    "rule" => array(
      "wi(n|n32|n64|ndows)" => "",
      "Microsoft" => "" //FIXME: might be a bit insane ...
    )
  ),
  "java" => array(
    "icon" => "java",
    "title" => "Java Platform Micro Edition",
    "rule" => array(
      "J2ME/MIDP" => ""
    ),
    "uri" => "http://java.sun.com/"
  ),
// catch up mobiles
  "mobile" => array(
    "icon" => "mobile",
    "title" => "Mobile",
    "rule" => array(
      "LG[ /]([0-9A-Z]{1,10})" => "", // LG mobiles
      "MOT[ /\-]([0-9A-Z]{1,10})" => "", // Motorola mobiles
      "SonyEricsson([0-9A-Z]{1,10})" => "", // Sony Ericsson mobiles
      "SIE([0-9A-Z]{1,10})" => "", // Siemens BenQ mobiles
      "Nokia([0-9A-Z]{1,10})" => "", // Nokia mobiles
      "KDDI-([0-9A-Z]{1,10})" => "", // Samsung mobiles
      "Blackberry([0-9A-Z]{1,10})" => "", // Samsung mobiles
      "^[A-Z]([0-9]{1,3}) " => "",
      "Configuration[ /]CLDC([0-9.]{1,10})" => "\\1",
      "MIDP" => "",
      "UP\.(Browser|Link)" => "",
      "ibisBrowser" => ""
   )
  ),
// things we don't know by now
  "other" => array(
    "icon" => "question",
    "title" => "other",
    "rule" => array(
      ".*" => ""
    )
  )
);
//-----------------------------------------------------------
?>
