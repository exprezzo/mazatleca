<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mazatleca Framework</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/web/naturalist/css/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="themes/base/jquery.ui.all.css" />
<script src="/web/naturalist/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/web/naturalist/js/cufon.js"></script>
<script type="text/javascript" src="/web/naturalist/js/English_italic_500.font.js"></script>
<script type="text/javascript">
	Cufon.replace(".unselected");
	//Cufon.replace('.unselected', {textShadow: '#37241d 1px 1px 1px', color: '-linear-gradient(#FFFFFF, #99CCEE, #99CCFF)'});	
   Cufon.replace(".selected");
	Cufon.replace("H1");
	//Cufon.replace('.selected', {textShadow: '#37241d 1px 1px 1px', color: '-linear-gradient(#c1a681, #5e472f, #5e472f)'});	
//Cufon.replace('h1', {textShadow: '#37241d 1px 1px 1px', color: '-linear-gradient(#c1a681, #5e472f, #5e472f)'});	
</script>
<!--=========================================================================================
								ext js 3.4
 =========================================================================================-->

<link rel="stylesheet" type="text/css" href="http://localhost/ext-3.4.0/resources/css/ext-all.css"/>
<!--

<link rel="stylesheet" type="text/css" href="js/ext-3.4.0/resources/css/xtheme-access.css"/>
-->
<link rel="stylesheet" type="text/css" href="http://localhost/ext-3.4.0/resources/css/xtheme-gray.css"/>
<script type="text/javascript" src="http://localhost/ext-3.4.0/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="http://localhost/ext-3.4.0/ext-all-debug.js"></script>




<!--script  src="web/naturalist/js/cufon-yui.js" type="text/javascript"></script>
<script type="text/javascript" src="web/naturalist/js/slidePager.js"></script>
<script type="text/javascript" src="web/naturalist/js/jquery.js"></script>
<script type="text/javascript" src="web/naturalist/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="web/naturalist/js/jScrollPane.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="themes/base/jquery.ui.all.css" />
<script src="web/naturalist/js/ui/jquery.ui.core.js" type="text/javascript"></script>
<script src="web/naturalist/js/ui/jquery.ui.widget.js" type="text/javascript"></script>
<script src="web/naturalist/js/ui/jquery.ui.mouse.js" type="text/javascript"></script>
<script src="web/naturalist/js/ui/jquery.ui.draggable.js" type="text/javascript"></script>
<script src="web/naturalist/js/ui/jquery.ui.position.js" type="text/javascript"></script>
<script src="web/naturalist/js/ui/jquery.ui.resizable.js" type="text/javascript"></script>
<script src="web/naturalist/js/ui/jquery.ui.dialog.js" type="text/javascript"></script>
<script src="web/naturalist/js/ui/jquery.effects.core.js" type="text/javascript"></script>
<script type="text/javascript" src="web/naturalist/js/jquery_header.js"></script>
<script type="text/javascript"> $(function(){ $("#faded").faded({ speed: 500, autoplay: 8000 }); });	</script-->
</head>
<body >

<div class="main">
<div class="mid">
    <h1 class="left" style="margin-left:20px; padding-top: 20px;"><a href="#">Mazatleca Framework</a></h1>    
<div class="clear"></div>

<div class="header">
  <div class="inner-wrap">
		<?php $this->renderSeccion('menu'); ?>		
  </div>
</div>
<div class="clear"></div>


<!--  /////////////////////////////////////  content  /////////////////////////////////////////// -->


<div id="content">
	<!-- script begin -->
		  <div id="faded" >
				<ul class="show">
					  <li ><img alt="" src="images/slide_4.png" /></li>
					  <li ><img alt="" src="images/slide_2.png" /></li>
					  <li ><img alt="" src="images/slide_3.png" /></li>
					  <li ><img alt="" src="images/slide_1.png" /></li>
					  <li ><img alt="" src="images/slide_5.png" /></li>
				</ul>							
		  </div>
		  
	<!-- script end -->          
  <div class="inner-wrap"> <a href="#" class="prev"></a> <a href="#" class="next"></a>
		<div class="conteiner">
			
			  <div class="extra-wrap">			 					
				 <!--=========================================================================================================
				  PAGES  				  
				  =========================================================================================================-->				
				  <?php   $this->renderSeccion('contenido'); ?>
			  </div>
		</div>
  </div>
</div>




 <!-- bottom begin -->
    <div id="bottom_bot">
        <div id="bottom">
        <div id="b_col1">
              <h1>Useful Resources</h1>
                <div style="height:10px"></div>
                    <ul class="spis_bot">
                        <li><a href="#">Lorem ipsum dolor sit amet </a></li>
                        <li><a href="#">Maecenas in magna quis augue</a></li>
                        <li><a href="#">Ut a mauris nec eros consect</a></li>
                        <li><a href="#">Nam luctus felis at mauris co </a></li>
                        <li><a href="#">Aliquam sagittis ligula sit amet </a></li>
                        <li><a href="#">Quisque sit amet est id urna</a></li>
                    </ul>
                </div>
                <div id="b_col2">
                    <h1>Contact Information</h1>
                    <div style="height:20px"></div>
                    <div style="padding-left:10px">
                        <div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us1.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">1234 Some Street, Brooklyn, NY 11201</b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
                        <div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us2.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">Phone:  1(234) 567 8910<br />
                                        Fax: 1(234) 567 8910
                                    </b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
                        <div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us3.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">E-mail: companyname@yahoo.com</b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
                    </div>
            </div>
    
            <div id="b_col3">
            	<h1>Share with Others</h1>
              	<div style="height:15px"></div>
                    <ul>
                        <li><img src="images/fu_i1.png" class=" fu_i" alt="" /><a href="#">Subscribe to Blog</a></li>
                        <li><img src="images/fu_i2.png" class=" fu_i" alt="" /><a href="#">Be a fan on Facebook</a></li>
                        <li><img src="images/fu_i3.png" class=" fu_i" alt="" /><a href="#">RSS Feed</a></li>
                        <li><img src="images/fu_i4.png" class=" fu_i" alt="" /><a href="#">Follow us on Twitter</a></li>
                    </ul>  
                        
                </div>
          	<div style="clear: both; height:20px;"></div>
        </div>
    </div>
<!-- bottom end --> 

<div class="footer">
  
  <p>Copyright  2012. <!-- Do not remove -->Designed by <a href="http://www.metamorphozis.com/" title="Website Templates">Website Templates</a><!-- end --></p>
		        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
  
</div>


</div> 

<script type="text/javascript"> 
/*
Cufon.now();

$(function(){
	$('#content .pages').slidePager({
		pagernav:'div.header div.nav ul li',
		last:7,
		easing:'easeInOutExpo',
		borders:40
	})
});
 jQuery(".scroll-pane").jScrollPane(); */
</script>
</div>
</body>
</html>
