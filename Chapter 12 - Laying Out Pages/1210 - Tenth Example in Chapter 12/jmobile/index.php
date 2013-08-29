<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Photography</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<link rel="stylesheet" href="css/photoswipe.css" />
	<link rel="stylesheet" href="css/jquery-mobile.css" />
	
	<script type="text/javascript" src="js/klass.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/code.photoswipe.jquery-3.0.4.min.js"></script>
	
	
	
	<script type="text/javascript">

			
			(function(window, $, PhotoSwipe){
				
				$(document).ready(function(){
					
					$('div.gallery-page')
						.live('pageshow', function(e){
							
							var 
								currentPage = $(e.target),
								options = {},
								photoSwipeInstance = $("ul.gallery a", e.target).photoSwipe(options,  currentPage.attr('id'));
								
							return true;
							
						})
						
						.live('pagehide', function(e){
							
							var 
								currentPage = $(e.target),
								photoSwipeInstance = PhotoSwipe.getInstance(currentPage.attr('id'));
	
							if (typeof photoSwipeInstance != "undefined" && photoSwipeInstance != null) {
								PhotoSwipe.detatch(photoSwipeInstance);
							}
							
							return true;
							
						});
					
				});
			
			}(window, window.jQuery, window.Code.PhotoSwipe));
			
		</script>
</head> 
<body> 


	<div data-role="page" id="intro">
	
		<div data-role="header">
			<h1>My Photography</h1>
		</div><!-- /header -->
		
		<ul data-role="listview">
			<li><a href="#About">About</a></li>
			<li><a href="#Gallery">Portfolio</a></li>
			<li><a href="#Hire" data-rel="dialog" data-transition="pop">Hire Me</a></li>	
		</ul>
		
		<div data-role="content" >	
			<h2>Welcome</h2>
			
			<p>Feel free to peruse my work, and don't hesitate to contact me fore hire. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>	
		</div><!-- /content -->
		
		<div data-role="footer">
		  <h4>&copy; 2012</h4>
		</div>
</div><!-- /page -->

	<div data-role="page" id="About" data-add-back-btn="true">
	
		<div data-role="header">
			<h1>About Me</h1>

		</div><!-- /header -->
		
		<div data-role="content" >	
			
			<p>I have been a professional photographer for five years. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
			
			<p>Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>	
		</div><!-- /content -->
		
		<div data-role="footer">
		  <h4>&copy; 2012</h4>
		</div>
</div><!-- /page -->

	<div data-role="page" id="Gallery" data-add-back-btn="true" class="gallery-page">
	
		<div data-role="header">
			<h1>Portfolio</h1>
		</div><!-- /header -->
		
		<div data-role="content" >	
			
			<ul class="gallery">
				<li><a href="gallery/image1.jpg"><img src="gallery/image1_t.jpg" border="0" /></a></li>
				<li><a href="gallery/image2.jpg"><img src="gallery/image2_t.jpg" border="0" /></a></li>
				<li><a href="gallery/image3.jpg"><img src="gallery/image3_t.jpg" border="0" /></a></li>
				
				<li><a href="gallery/image2.jpg"><img src="gallery/image2_t.jpg" border="0" /></a></li>
				<li><a href="gallery/image3.jpg"><img src="gallery/image3_t.jpg" border="0" /></a></li>
				<li><a href="gallery/image1.jpg"><img src="gallery/image1_t.jpg" border="0" /></a></li>
				
				<li><a href="gallery/image3.jpg"><img src="gallery/image3_t.jpg" border="0" /></a></li>
				<li><a href="gallery/image1.jpg"><img src="gallery/image1_t.jpg" border="0" /></a></li>
				<li><a href="gallery/image2.jpg"><img src="gallery/image2_t.jpg" border="0" /></a></li>		
			</ul>		
		</div><!-- /content -->
			
			<div data-role="footer">
			  <h4>&copy; 2012</h4>
			</div>
</div><!-- /page -->

	<div data-role="page" id="Hire">
	
		<div data-role="header">
			<h1>Hire Me</h1>
		</div><!-- /header -->
		
		
		<div data-role="content" >	
		
		<p>Contact me for a quote!</p>
			<form action="index.php" method="post">
			
				         <label for="email" class="ui-hidden-accessible">Email Address</label>
				         <input type="text" name="email" id="email" value="" data-mini="true" placeholder="Email Address" />
							
						
						<label for="textarea" class="ui-hidden-accessible">Message</label>
						<textarea cols="40" rows="8" name="message" id="message" data-mini="true" placeholder="Message"></textarea>
										
						
					<button type="submit" data-mini="true">Submit</button>
				    			
			</form>
		</div><!-- /content -->
</div><!-- /page -->

</body>
</html>
