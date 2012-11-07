<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="T7TzfyYgBToa4ZP4HAlcLxwbMYHo9iDXuEiill4G_HI" />
<title>Airport Business Park</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jqFancyTransitions.1.8.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }

  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }

  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>

</head>

<body>
<div id="container">
	<div id="site_left">
   	  <div id="banner_content">
       <script type="text/JavaScript">
		$(document).ready(function(){
			$('#slideshowHolderContent').jqFancyTransitions({ effect: 'curtain',width: 735, height: 265,strips: 20,stripDelay: 50,position: 'alternate',direction: 'fountainAlternate' });
		});
		</script>
   	   <div id='slideshowHolderContent'> <img src='img/procon_p1.jpg'  /> <img src='img/procon_p2.jpg'  /> </div>
   	  </div>
   	  <!--End banner_home-->
        
        <div id="content">
			<div class="lang"><a href="project_concept_th.php"><img src='img/flag_th.jpg' border="0" alt="Thai" /></a> <img src='img/flag_en.jpg' border="0"/></div>
         	<div class="clear"></div>
           <div class="textcontent">
            <!-- content block -->
            	<div id="mcs_container">  
                	<div class="customScrollBox">
                    	<div class="Boxcontainer">
                        	<div class="Boxcontent">
                           
                            <div class="concept">
                				<p>In 1996 a family-owned business, Chindasilpa Co., Ltd., has started a unique office-for-rent business to Chiang Mai city - an office building in the park called Airport Business Park (ABP). We aim to give companies a professional working environment as well as warm services. We also offer Business Center, smaller office units which are ready for small entrepreneurs or new establishments to move in.</p>
                                <p>In recent years, Chiang Mai has been the business destination for many more multinational organizations. We have realized the potential and the lack of professional office rental space in this region. Therefore, we built two new buildings in the same green area. These new buildings have become the exclusive, unique in design work place and home to international firms and businesses.</p>
                            </div>
                            
                            </div>
                        </div>
                        <div class="dragger_container">
                        	<div class="dragger"></div>
                        </div>
                    </div> 
                    <a href="#" class="scrollUpBtn"></a> <a href="#" class="scrollDownBtn"></a>
                </div> 
                
          </div><!--End textcontent-->
        </div><!--End content-->
</div><!--End site_left-->
    <!-- content to show if javascript is disabled  mCustomScrollbars -->
<noscript>
	<style type="text/css">
		#mcs_container .customScrollBox{overflow:auto;}
		#mcs_container .dragger_container{display:none;}
	</style>
</noscript>
<script>
$(window).load(function() {
	mCustomScrollbars();
});

function mCustomScrollbars(){
	/* 
	malihu custom scrollbar function parameters: 
	1) scroll type (values: "vertical" or "horizontal")
	2) scroll easing amount (0 for no easing) 
	3) scroll easing type 
	4) extra bottom scrolling space for vertical scroll type only (minimum value: 1)
	5) scrollbar height/width adjustment (values: "auto" or "fixed")
	6) mouse-wheel support (values: "yes" or "no")
	7) scrolling via buttons support (values: "yes" or "no")
	8) buttons scrolling speed (values: 1-20, 1 being the slowest)
	*/
	$("#mcs_container").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 
}

/* function to fix the -10000 pixel limit of jquery.animate */
$.fx.prototype.cur = function(){
    if ( this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null) ) {
      return this.elem[ this.prop ];
    }
    var r = parseFloat( jQuery.css( this.elem, this.prop ) );
    return typeof r == 'undefined' ? 0 : r;
}

/* function to load new content dynamically */
function LoadNewContent(id,file){
	$("#"+id+" .customScrollBox .Boxcontent").load(file,function(){
		mCustomScrollbars();
	});
}
</script>

    <div id="site_right">
    	<div id="menu">
        	<div class="nav">
            	<li><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','menu01','img/menu/b1_down.png',1)" onMouseOver="MM_nbGroup('over','menu01','img/menu/b1_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu01" src="img/menu/b1_none.png" alt="" onload="" border="0" /></a></li>
       	  	  <li><a href="gallery.php" target="_top" onclick="MM_nbGroup('down','group1','menu02','img/menu/b2_down.png',1)" onmouseover="MM_nbGroup('over','menu02','img/menu/b2_over.png','',1)" onmouseout="MM_nbGroup('out')"><img name="menu02" src="img/menu/b2_none.png" alt="" onload="" border="0" /></a></li>
           	  <li><a href="project_concept.php" target="_top" onClick="MM_nbGroup('down','group1','menu03','img/menu/b3_down.png',1)" onMouseOver="MM_nbGroup('over','menu03','img/menu/b3_down.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu03" src="img/menu/b3_down.png" alt="" onload="" border="0" /></a></li>
           	  <li><a href="project_detail.php" target="_top" onClick="MM_nbGroup('down','group1','menu04','img/menu/b4_down.png',1)" onMouseOver="MM_nbGroup('over','menu04','img/menu/b4_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu04" src="img/menu/b4_none.png" alt="" onload="" border="0"></a></li>
             	<li><a href="facilities.php" target="_top" onClick="MM_nbGroup('down','group1','menu05','img/menu/b5_down.png',1)" onMouseOver="MM_nbGroup('over','menu05','img/menu/b5_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu05" src="img/menu/b5_none.png" alt="" onload="" border="0"></a></li>
              	<li><a href="floor_plan.php" target="_top" onClick="MM_nbGroup('down','group1','menu06','img/menu/b6_down.png',1)" onMouseOver="MM_nbGroup('over','menu06','img/menu/b6_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu06" src="img/menu/b6_none.png" alt="" onload="" border="0"></a></li>
              	<li><a href="services.php" target="_top" onClick="MM_nbGroup('down','group1','menu07','img/menu/b7_down.png',1)" onMouseOver="MM_nbGroup('over','menu07','img/menu/b7_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu07" src="img/menu/b7_none.png" alt="" onload="" border="0"></a></li>
              	<li><a href="location.php" target="_top" onClick="MM_nbGroup('down','group1','menu08','img/menu/b8_down.png',1)" onMouseOver="MM_nbGroup('over','menu08','img/menu/b8_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu08" src="img/menu/b8_none.png" alt="" onload="" border="0"></a></li>
				<li><a href="download.php" target="_top" onClick="MM_nbGroup('down','group1','menu09','img/menu/b9_down.png',1)" onMouseOver="MM_nbGroup('over','menu09','img/menu/b9_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu09" src="img/menu/b9_none.png" alt="" onload="" border="0"></a></li>
                <li><a href="faq.php" target="_top" onClick="MM_nbGroup('down','group1','menu10','img/menu/b10_down.png',1)" onMouseOver="MM_nbGroup('over','menu10','img/menu/b10_over.png','',1)" onMouseOut="MM_nbGroup('out')"><img name="menu10" src="img/menu/b10_none.png" alt="" onload="" border="0"></a></li>
          </div>
      </div><!--End menu-->
        <div id="address">
        	<span>AIRPORT BUSINESS PARK</span><br />
            90,92/1 Mahidol Rd. Haiya Chiangmai 50100<br />
            Tel:053.203.355, 053.904.788 Fax:053.203.460<br /><br />
            <span>Head Office-CHINDASILPA CO., LTD.</span><br />
             14/9 Soi7, Lumphun Rd. Chiangmai 50000<br />
            Tel:053.802.777 Fax:053.140.352<br />
            <span style="color:FCAE10">mail : </span><a href="mailto:contact@abp-businesscentre.com" target="_blank">contact@abp-businesscentre.com</a>
        </div>
    </div><!--End site_right-->
    
    <div class="clear"></div>
    <div id="footer">&copy; <?php echo date("Y");?> Airport Business Park. All Right Reserved.</div>
</div><!--End container-->
</body>
</html>
