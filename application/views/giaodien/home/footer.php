<!-- footer -->
	
	<p class="copyright">© 2018 Bettering. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	<!-- //footer -->



	<!-- Required Scripts -->
	<!-- Common Js -->
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery-2.2.3.min.js"></script>
	<!--// Common Js -->
	<!--search-bar-agileits-->
	<script src="<?php echo base_url() ?>public/js/main.js"></script>
	<!--//search-bar-agileits-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/easing.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- Banner Responsive slider -->
	<script src="<?php echo base_url() ?>public/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsive slider -->

	<!-- flexSlider -->
	<script defer="" src="<?php echo base_url() ?>public/js/jquery.flexslider.js"></script>
	
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->

	<!-- stats -->
	<script src="<?php echo base_url() ?>public/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>public/js/jquery.countup.js"></script>
	<script>
		$('.counter-agileits-w3layouts').countUp();
	</script>
	<!-- //stats -->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" id="toTop" style="display: none;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->

 <script src="<?php echo base_url() ?>public/js/bootstrap.js"></script>


	<!--// Required Scripts -->


<a href="#" id="toTop">To Top</a></body></html>