<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','429','height','94','title','Menu','src','menu5','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','wmode','transparent','movie','menu5' ); //end AC code
    </script>
    <noscript>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="429" height="94" title="Menu">
      <param name="movie" value="menu5.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="transparent" />
      <embed src="menu5.swf" width="429" height="94" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>
    </object>
    </noscript>
    </div>
  </div>
  <div id="precontent"></div>
  <div id="contenter">
    <div id="main_contenter">
<form method=POST action="contact.php">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td valign="top"> <b><font color="#CACF63"><font color="#CACF63"> 
                          </font></font></b> <p><b><font color="#CACF63"><font size="2"> 
                            <?function check_email($_)
{ 
$_= !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$", $_);

return $_; 
}

if ($name=='') { echo "<b><font color=\"#CACF63\"><font size=\"5\" face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#CC0000\">Error</font><font size=\"2\"></font></font></b> <br>Please fill in <font color=\"#CC0000\">Name box.</font>
<br><br><a href=\"javascript:history.go(-1);\"><img src=\"images/back.gif\" width=\"63\" height=\"23\" border=\"0\"></a>"; }

else if ($email=='') { echo "<b><font color=\"#CACF63\"><font size=\"5\" face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#CC0000\">Error</font><font size=\"2\"></font></font></b> <br>Please fill in <font color=\"#CC0000\">E-mail box.</font>
<br><br><a href=\"javascript:history.go(-1);\"><img src=\"images/back.gif\" width=\"63\" height=\"23\" border=\"0\"></a>"; }

else if (check_email($email)) { echo "<b><font color=\"#CACF63\"><font size=\"5\" face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#CC0000\">Error</font><font size=\"2\"></font></font></b> <br>Please fill in <font color=\"#CC0000\">Email Error.</font>
<br><br><a href=\"javascript:history.go(-1);\"><img src=\"images/back.gif\" width=\"63\" height=\"23\" border=\"0\"></a>"; }

else if ($subject=='') { echo "<b><font color=\"#CACF63\"><font size=\"5\" face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#CC0000\">Error</font><font size=\"2\"></font></font></b> <br>Please fill in <font color=\"#CC0000\">Subject box.</font>
<br><br><a href=\"javascript:history.go(-1);\"><img src=\"images/back.gif\" width=\"63\" height=\"23\" border=\"0\"></a>"; }

else if ($message=='') { echo "<b><font color=\"#CACF63\"><font size=\"5\" face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#CC0000\">Error</font><font size=\"2\"></font></font></b> <br>Please fill in <font color=\"#CC0000\">Message box.</font>
<br><br><a href=\"javascript:history.go(-1);\"><img src=\"images/back.gif\" width=\"63\" height=\"23\" border=\"0\"></a>"; }
else {
			 $msg="
Name= $name  
Email= $email\n
Subject= $subject
Message= $message
			";
			if (mail("contact@thekad.info","$subject","$msg","From: $email")) {
			 echo "<b><font size=\"5\" face=\"Verdana, Arial, Helvetica, sans-serif\" color=\"#CACF63\">Complete</font><font size=\"2\" color=\"#CACF63\"><br>Your Email has been sent, thank you..</font></b>
<br><br><a href=\"contact.php\"><img src=\"images/back.gif\" width=\"63\" height=\"23\" border=\"0\"></a>";

			 } else {
			 echo "Error";
			 }
	} // end if name		 ?>
                            </font></font></b> <br>
                          <table width="100%" border="0" cellspacing="4" cellpadding="0">
                            <tr valign="top"> 
                              <td width="36%" align="right">Name:<b></b></td>
                              <td width="64%"> <b><font color="#CACF63"> <? echo $name; ?> 
                                </font></b></td>
                            </tr>
                            <tr valign="top"> 
                              <td align="right">E-Mail:<b></b></td>
                              <td> <b><font color="#CACF63"> <? echo $email; ?> 
                                </font></b></td>
                            </tr>
                            <tr valign="top"> 
                              <td align="right">Subject:<b></b></td>
                              <td> <b><font color="#CACF63"> <? echo $subject; ?> 
                                </font></b></td>
                            </tr>
                            <tr valign="top"> 
                              <td align="right">Message:<b></b></td>
                              <td> <b><font color="#CACF63"> <? echo $message; ?> 
                                </font></b></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                    <p>&nbsp;</p>
      </form>
    </div>
  </div>
  <div id="footer"><a class="linky" href="http://www.chindasilpa.co.th/"><img src="images/chinda2.gif" alt="CHINDASILPA" width="170" height="55" /></a><br />
  copyright 2007 www.thekad.info Allrights reserved* </div>
</div>
</body>
</html>
