<?php include("connection.php");?>
<!DOCTYPE html>
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style="overflow-y: hidden;">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Designerz Hub</title>
	
	<link href="layout/css/bootstrap.css" rel="stylesheet">
<link href="layout/css/style.css" rel="stylesheet">	
<link href="layout/css/animations.css" rel="stylesheet">
<link href="layout/css/custom-animations.css" rel="stylesheet">	
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css">	

<link href="layout/css/css" rel="stylesheet" type="text/css">
<link href="layout/css/css(1)" rel="stylesheet" type="text/css">
	<link href="layout/css/font-awesome.css" rel="stylesheet">
<style type="text/css"></style></head>
<body data-spy="scroll" data-target=".navbar" class="desktop">	
	<!-- PRELOADER -->
	<div id="preloader" style="display: none;">
		<div id="status" style="display: none;">&nbsp;</div>
	</div>
	<!-- HOME -->
	<div id="home">
		<!-- HOME SLIDER -->
		<div class="home-slider main-section gray-bg">
			<div class="text-center">
				<a class="navbar-brand smooth" href="#home">
				<div class="title page-title text-center">
					<h1 class="dark-text">Interior Design</h1>
					<span class="underline green"></span>
				</div>
			</div>
			<div class="caroufred green" style="height: 376px;">
				<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1366px; height: 376px; margin: 0px; overflow: hidden;">
                <ul class="gallery uppercase" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 8196px; height: 385px; max-height: 376px;">
<?php 
$slider=mysqli_query($connection,"select slider_pic_id, slider_pic, slider_pic_title from main_slider")or die ("query 1 incorrect.....");

while(list($slider_pic_id,$slider_pic,$slider_pic_title)=mysqli_fetch_array($slider))
{
echo" <li style='width: 683px;'>
	<img src='images/main_slider/$slider_pic' alt='img'> 
  <div class='home-overlay colored-text text-center' style='top: 295px;'>
		<h4><span>$slider_pic_title</span></h4>
		</div></li> ";
}
?>
           </ul></div>
				<div class="carousel_pagination-outer">
					<div id="caroufred_home_slide_pager" class="carousel_pagination left" style="display: table;">
					<a href="#"><span>1</span></a><a href="#" class="selected"><span>2</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>5</span></a></div>
				</div>
			</div>
		</div>	
		<!-- END OF home slider -->
		<!-- NAVIGATION -->
		<div class="sticky-wrapper"><div id="navigate" class="my-sticky-element col-xs-12 col-sm-12 col-md-12 col-lg-12">		
			<nav class="navbar main-menu gray-bg" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<i class=" icon-angle-down"></i>
					</button>						
				</div>								               
				<div class="navbar-collapse navbar-ex1-collapse uppercase in">
					<ul class="nav navbar-nav text-center">
						<li class="active">	                   			
							<a href="#home" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Home</span>
							</a>
						</li>
						<li class="">
							<a href="#aboutus">
							<i class="fa fa-circle" ></i> 	                   				
								<span>About</span>
							</a>
						</li>
													                  			
						<li class="">
							<a href="#projects" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Products</span>
							</a>						
						</li>							
						<li class="">
			<a href="#contact" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Contact</span>
							</a>
						</li>
						
					</ul>
				</div>			
			</nav>
			<div class="menu_bottom bot_angle_right" style="border-right-width: 1366px;"></div>
		</div></div> 
		<!-- END OF navigation -->
	</div>
	<!-- END OF home -->		
	<!-- PAGES WRAPPER -->
	<div id="page-wrapper">		
		<!-- ABOUT US -->
		<div id="aboutus" class="main-section not-home">
			<!-- WHY US -->
			<div class="container">				
				<div class="title page-title text-center">
					<h1 class="dark-text">Why Us</h1>
					<span class="underline green"></span>
				</div>					
			</div>
			<div class="container text-center pad-bot about-description">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animated-scale-up custom-animation-scale-up">
					<p>we pride ourselves in surpassing the focus of design by delivering luxurious and innovative homes that directly correlate to our client’s needs.
					</p>
				</div>
			</div>
			<div class="container pad-bot highlighted">	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-left custom-animation-slide-left">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Innovative</span><span>Design</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-top custom-animation-slide-top">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Unique</span><span>Style</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights  animated-slide-bottom custom-animation-slide-bottom">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Personal</span><span>Attention</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-right custom-animation-slide-right">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Exceptional</span><span>Service</span></h6>
				</div>					
			</div>
			<!-- TESTIMONIALS -->
			<div class="testimonials">
				<div class="about_bottom bot_angle_left" style="border-right-width: 1366px;"></div>
				<div class="container page-title  pad-bot"> 
					<div class="animated-fade colored-text col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 custom-animation-fade">
						<div class="caroufred-text">
							<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 730px; height: 216px; margin: 0px 0px 18px; overflow: hidden;">
                            <ul class="testimonials" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 5110px; height: 216px;">
								
<?php 
$result=mysqli_query($connection,"select client_id,client_pic, client_name, client_details from clients")or die ("query 1 incorrect.....");

while(list($client_id,$client_pic,$client_name,$client_details)=mysqli_fetch_array($result))
{
echo"	<li style='width: 730px;'>
		<p class='testimonials-img'>
		<img src='images/customers/$client_pic' alt='' style='width:120px; height:120px'></p>
		<p class='testimonials-quote text-center italic-text'>
		<cite>— $client_name</cite>
		<cite> $client_details</cite>
		</p></li>";
}
?>
        </ul></div>
		<div id="caroufred_testimonials_pager" class="carousel_pagination left" style="display: table;">
<a href="#"><span>1</span></a><a href="#"><span>2</span></a><a href="#" class="selected"><span>3</span></a></div>
						</div>	
					</div>											
				</div>
				<div class="team_top top_angle_left" style="border-left-width: 1366px;"></div>
			</div>	
			<!-- STAFF -->
			<div class="team blue-bg green">
				<div class="container">					
					<div class="title page-title text-center">
						<h1 class="light-text">Our Team</h1>
						<span class="underline white"></span>
					</div>													
				</div>
				<div class="container pad-bot">
					<div class="team-members">
						<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-slide-left custom-animation-slide-left">
							<div class="block-inner">
								<div class="team-img">
									<img src="images/team1.jpg" alt="team">
									<div class="overlay-img text-center">
										
									</div>
								</div>
							</div>
							<div class="names text-center">								
								<span class="uppercase name">Project Manager | Interior Designer</span>
								<h5 class="text-center colored-text uppercase">Gauri khan</h5>
								
							</div>							
						</div>
<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-scale-up custom-animation-scale-up">
     <div class="block-inner">
     <div class="team-img">
     <img src="images/team1.jpg" alt="team">
     <div class="overlay-img text-center">
     <div class="contact-icons">
     
										</div>
									</div>
								</div>
							</div>	
							<div class="names text-center">
								<span class="uppercase name">Interior Designer</span>
								<h5 class="text-center colored-text uppercase">Rajeev sethi</h5>	
								
							</div>							
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-slide-right custom-animation-slide-right">
							<div class="block-inner">
								<div class="team-img">
			<img src="images/team1.jpg" alt="team">
			<div class="overlay-img text-center">
			<div class="contact-icons">
			</div>
			</div></div>
			</div>	
	<div class="names text-center">
	<span class="uppercase name">CAD Operator</span>
<h5 class="text-center colored-text uppercase">David Harper</h5>			
						
				</div></div>
				</div></div>
                
<div class="team_bottom top_angle_right" style="border-left-width: 1366px;">
</div></div>	
</div>
		<!-- END OF about us -->		
					<!-- PROJECT LIST -->
				<div class="project-list">
					<div class="project_top bot_angle_right" style="border-right-width: 1366px;"></div>	
					<div class="white">					
						<div class="title page-title text-center colored-text">
							<h1 class="light-text">Project List</h1>
							<span class="underline white"></span>
						</div>									
					</div>
					<div class="caroufred green pad-bot animated-fade custom-animation-fade">
						<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1365px; height: 147px; margin: 0px 0px 18px; overflow: hidden;">
                        <ul class="project-list-gallery" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 6825px; height: 154px; max-height: 147px;">               					
							
<?php 
$project=mysqli_query($connection,"select project_id, project_name, project_pic, project_details from projects")or die ("query 1 incorrect.....");

while(list($project_id,$project_name,$project_pic,$project_details)=mysqli_fetch_array($project))
{
echo"<li class='project-list-item' style='width: 273px;'>
	<a href='#' class='project-popover' data-content='$project_details' data-original-title='$project_name'><img src='images/projects/$project_pic' alt='img' style='width:100%;'></a>
	</li>";
}
?></ul></div>
						<div id="caroufred_project_list_gallery" class="carousel_pagination left" style="display: table;"><a href="#" class="selected"><span>1</span></a><a href="#"><span>2</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>5</span></a><a href="#"><span>6</span></a><a href="#"><span>7</span></a><a href="#"><span>8</span></a><a href="#"><span>9</span></a><a href="#"><span>10</span></a></div>		
					</div>
					<div class="project_bottom top_angle_right" style="border-left-width: 1366px;"></div>
				</div>	
					
		<div class="project_top bot_angle_right" style="border-right-width: 1366px;"></div>		
		<!-- PROJECTS -->
		<div id="projects" class="main-section not-home">
			<div class="pad-bot">
				<div class="container">								
					<div class="title page-title text-center">
						<h1 class="dark-text">Products</h1>
						<span class="underline green"></span>
					</div>				
				</div>	
				<div class="green animated-fade custom-animation-fade">
					<div class="portfolioFilter text-center uppercase">
						<span>Filter:</span>
	<a href="#" data-filter="*" class="current">All</a>
	<a href="#" data-filter=".kitchen">Kitchen &amp; Bath</a>
	<a href="#" data-filter=".livingrooms">Living Rooms</a>
	<a href="#" data-filter=".beedrooms">Bedrooms</a>
	<a href="#" data-filter=".offices">Offices</a>
	<a href="#" data-filter=".outdoors">Outdoors</a>
					</div>
<div id="container" class="portfolioContainer text-center isotope" style="position: relative; overflow: hidden; height: 662px;">  
<div class="kitchen isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">        
<div class="isotope-img" style="max-height: 187px;">
<img src="images/project_images/pro_3.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/project_images/pro_3.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Kitchen &amp; Bath</p>
					
								<p>Kitchen and bath design is a specialized service within the residential interior decorating and design professions. </p>									
							</div>
						</div>
						<div class="offices isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(341px, 0px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/project_images/pro_12.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/project_images/pro_12.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Offices</p>
							
								<p>Office design goes beyond color and decoration, impacting everything from productivity to employee mood. Office design makes up all the components and elements of a workspace that are both decorative and functional. </p>									
							</div>
						</div>
						<div class="livingrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(682px, 0px, 0px);">    
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/project_images/pro_5.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/project_images/pro_5.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Living Rooms</p>
								
								<p>The place where we all gather, laugh and play is undoubtedly the living room. The focal point of a home, its place between kitchen and bedroom acts as a natural centre, drawing guests from morning wake-ups to after-work nights in. </p>									
							</div>
						</div>
						<div class="kitchen isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1023px, 0px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/project_images/pro_1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/project_images/pro_1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Kitchen &amp; Bath</p>
								
								<p>Kitchen and bath design is a specialized service within the residential interior decorating and design professions. </p>									
							</div>
						</div>
						<div class="beedrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 331px, 0px);">        
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/project_images/pro_7.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/project_images/pro_7.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Bedrooms</p>
								
								<p>Wrap your tired eyes around this massive gallery of refreshing modern bedroom ideas and gorgeous bedroom accessories that are sure to wake you up. </p>									
							</div>
						</div>
						<div class="outdoors isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(341px, 331px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/project_images/pro_9.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/project_images/pro_9.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Outdoors</p>
								
								<p>We’ve all dreamed of a modern log cabin from time to time. This paned wooden exterior runs its grooves smooth on the roof and perpendicular in its body, as it opens up its windows to a forest of pine. </p>									
							</div>
						</div>
						<div class="livingrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(682px, 331px, 0px);">                
							<div class="isotope-img" style="max-height: 187px;">
								<img src="images/project_images/pro_10.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/project_images/pro_10.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Living Rooms</p>
				
								<p>The place where we all gather, laugh and play is undoubtedly the living room. The focal point of a home, its place between kitchen and bedroom acts as a natural centre, drawing guests from morning wake-ups to after-work nights in. </p>									
							</div>
						</div>
						<div class="beedrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1023px, 331px, 0px);">                
							<div class="isotope-img" style="max-height: 150px;">
								<img src="images/project_images/pro_11.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/project_images/pro_11.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
							</div>
							<div class="isotope-description">
								<p class="product-type uppercase">Bedrooms</p>
							
								<p>Colour your way to a restful night’s sleep. A vision of blue greets us in bedroom number two. Blue is a serene and soothing colour, and could help promote relaxation and sleep. </p>									
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="portfolio_bottom bot_angle_left blue-bg" style="border-right-width: 1366px;"></div>
		</div>		
		<!-- END OF projects -->		
		<!-- CONTACT -->
		<div id="contact" class="main-section not-home green">	
			<div class="contact pad-bot blue-bg">
				<div class="container">
					<div class="title page-title text-center">
						<h1 class="light-text">Contact</h1>
						<span class="underline white"></span>
					</div>	
				</div>																
				<div class="container">
					<!-- ADDRESSES AND SOCIALS -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 smxs-margin animated-slide-top custom-animation-slide-top">																				
						<h6 class="uppercase colored-text">Developed by</h6>
						<p class="address">
							SOWMYASHREE M
							
							
							
							
							<br>
							E-mail: <a href="mailto:swmshree123@gmail.com">swmshree123@gmail.com</a>
						</p>
						

					</div>
					<!-- CONTACT FORM -->
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 animated-fade custom-animation-fade">
						<form method="post" class="contact">
						<div class="col-xs-12 line"><hr></div>

<div class="container" >
<div class="col-md-5" style="float: none; margin: 0 auto;">
  <div class="form-area">
	<form method="post" action="">
	<br style="clear: both">
	  <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>

	  <div class="form-group">
		<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Name" required autofocus="">
	  </div>

	  <div class="form-group">
		<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
	  </div>     
      
      <div class="form-group">
		<input type="number" class="form-control" id="number" name="number" placeholder="Number" required>
	  </div>     


	  <div class="form-group">
	   <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7" required ></textarea>
	   <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
	  </div> 
								<input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>  
							
						</form>		
					</div>
				</div>																																					
			</div>
		</div>
		<!-- END OF contact -->		
		
		
	</div>
	<!-- END OF page wrapper -->
	<script src="layout/js/jquery-1.10.2.min.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/modernizr.custom.43083.js"></script>
	<!--enable responsive features in IE8-->
	<!--[if IE 8]>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="layout/js/custom.js"></script>
	<script src="layout/js/retina.js"></script>
	<script src="layout/js/jquery.nicescroll.min.js"></script>
	<script src="layout/js/jquery.easing.1.3.js"></script>	
	<script src="layout/js/waypoints.min.js"></script>
	<script src="layout/js/waypoints-sticky.js"></script>	
	<script type="text/javascript" src="layout/js/jquery.carouFredSel-6.2.1.js"></script>		
	<script src="layout/js/jquery.isotope.min.js"></script>		
	<script src="layout/js/jquery.magnific-popup.min.js"></script>
	<!-- Preloader -->
	<script type="text/javascript">
		//<![CDATA[
			$(window).load(function() { // makes sure the whole site is loaded
				$("#status").fadeOut(); // will first fade out the loading animation
				$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
			})
		//]]>
	</script> 	
	<!-- Contact Form -->  
	    
			   <?php
 
include("connection.php");
if(isset($_POST['submit']))
{
$firstName=$_POST['firstName'];
$email=$_POST['email'];
$number=$_POST['number'];
$messege=$_POST['messege'];

mysqli_query($connection,"insert into contact(firstName, email, number, messege) values ('$firstName','$email','$number','$messege')") 
			or die ("Query 1 is inncorrect........");
 
mysqli_close($connection);
}
?> 	
	   		

<div id="ascrail2000" class="nicescroll-rails" style="width: 7px; z-index: auto; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 78px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; background-color: rgb(0, 0, 0); background-clip: padding-box;"></div></div>
</body></html>