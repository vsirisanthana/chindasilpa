<?php
/*
 * Plogger - A web based photo gallery
 * Copyright (C) 2005 Mike Johnson
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
?>
<?php require("gallery.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php the_gallery_head(); ?>
<title>~ *KAD KLANG WIANG* ~</title>
<link href="thaiis.css" rel="stylesheet" type="text/css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<div id="main">
  <div id="header">
  <SCRIPT LANGUAGE="Javascript"><!--

// ***********************************************
// AUTHOR: WWW.CGISCRIPT.NET, LLC
// URL: http://www.cgiscript.net
// Use the script, just leave this message intact.
// Download your FREE CGI/Perl Scripts today!
// ( http://www.cgiscript.net/scripts.htm )
// ***********************************************

function image() {
};

image = new image();
number = 0;

// imageArray
image[number++] = "<img src='images/template_02.jpg' border='0'>"
image[number++] = "<img src='images/header3_02.jpg' border='0'>"
image[number++] = "<img src='images/header2_02.jpg' border='0'>"
// keep adding items here...

increment = Math.floor(Math.random() * number);

document.write(image[increment]);

//--></SCRIPT>
  <div id="buttlayer">
    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','429','height','94','title','Menu','src','menu_gal5','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','wmode','transparent','movie','menu_gal5' ); //end AC code
    </script>
    <noscript>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="429" height="94" title="Menu">
      <param name="movie" value="menu_gal5.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="transparent" />
      <embed src="menu_gal5.swf" width="429" height="94" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>
    </object>
    </noscript>
  </div>
  </div>
  <div id="precontent"></div>
  <div id="contenter">
    <div id="main_contenter">
      <?php the_gallery(); ?>
    </div>
  </div