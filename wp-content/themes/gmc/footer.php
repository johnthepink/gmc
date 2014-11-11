	<div id="footer-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 menu">
					<h3>Overview</h3>
					<ul>
	      				<li>
	          				<a href="features.html">Features</a>
	        			</li>
	        			<li>
	        				<a href="services.html">Services</a>
	        			</li>
	        			<li>
	          				<a href="pricing.html">Pricing</a>
	        			</li>
	        			<li>
	          				<a href="support.html">Support</a>
	        			</li>
	        			<li>
	          				<a href="blog.html">Blog</a>
	        			</li>
	        			<li>
	          				<a href="blog.html">Coming soon</a>
	        			</li>
	      			</ul>
				</div>
				<div class="col-sm-3 menu">
					<h3>Menu</h3>
					<ul>
	      				<li>
	          				<a href="features.html">About us</a>
	        			</li>
	        			<li>
	        				<a href="services.html">Contact us</a>
	        			</li>
	        			<li>
	          				<a href="aboutus.html">Jobs</a>
	          				<a href="aboutus.html" class="hiring">
	          					We're hiring!
	          				</a>
	        			</li>
	        			<li>
	          				<a href="support.html">Portfolio</a>
	        			</li>
	        			<li>
	          				<a href="blog.html">Status</a>
	        			</li>
	      			</ul>
				</div>
				<div class="col-sm-2 menu">
					<h3>Social</h3>
					<ul>
	      				<li>
	          				<a href="features.html">Youtube</a>
	        			</li>
	        			<li>
	        				<a href="services.html">Facebook</a>
	        			</li>
	        			<li>
	          				<a href="pricing.html">Twitter</a>
	        			</li>
	      			</ul>
				</div>
				<div class="col-sm-4 newsletter">
					<div class="signup clearfix">
						<p>
							Sign up for the newsletter and we'll inform you of updates, offers and more.
						</p>
						<form>
							<input type="text" name="email" class="form-control" placeholder="Your email address" />
							<input type="submit" value="Sign up" />
						</form>
					</div>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/social/social-tw.png" alt="twitter" />
					</a>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/social/social-dbl.png" alt="dribbble" />
					</a>
				</div>
			</div>
			<div class="row credits">
				<div class="col-md-12">
					Copyright © 2014. React
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		jQuery(function () {
			var $navDots = $("#hero nav a")
			var $next = $(".slide-nav.next");
			var $prev = $(".slide-nav.prev");
			var $slides = $("#hero .slides .slide");
			var actualIndex = 0;
			var swiping = false;
			var interval;

			$navDots.click(function (e) {
				e.preventDefault();
				if (swiping) { return; }
				swiping = true;

				actualIndex = $navDots.index(this);
				updateSlides(actualIndex);
			});

			$next.click(function (e) {
				e.preventDefault();
				if (swiping) { return; }
				swiping = true;

				clearInterval(interval);
				interval = null;

				actualIndex++;
				if (actualIndex >= $slides.length) {
					actualIndex = 0;
				}

				updateSlides(actualIndex);
			});

			$prev.click(function (e) {
				e.preventDefault();
				if (swiping) { return; }
				swiping = true;

				clearInterval(interval);
				interval = null;

				actualIndex--;
				if (actualIndex < 0) {
					actualIndex = $slides.length - 1;
				}

				updateSlides(actualIndex);
			});

			function updateSlides(index) {
				// update nav dots
				$navDots.removeClass("active");
				$navDots.eq(index).addClass("active");

				// update slides
				var $activeSlide = $("#hero .slide.active");
				var $nextSlide = $slides.eq(index);

				$activeSlide.fadeOut();
				$nextSlide.addClass("next").fadeIn();
				
				setTimeout(function () {
					$slides.removeClass("next").removeClass("active");
					$nextSlide.addClass("active");
					$activeSlide.removeAttr('style');
					swiping = false;
				}, 1000);
			}


			interval = setInterval(function () {
				if (swiping) { return; }
				swiping = true;

				actualIndex++;
				if (actualIndex >= $slides.length) {
					actualIndex = 0;
				}

				updateSlides(actualIndex);
			}, 5000);

			// demo player
			var $videoModal = $(".video-modal");
			$("#demo-player").click(function () {
				$videoModal.toggleClass("active");
				clearInterval(interval);
				interval = null;
			});
			$videoModal.click(function () {
				$videoModal.removeClass("active");
				setTimeout(function () {
					$videoModal.find(".wrap").html('<iframe src="http://player.vimeo.com/video/22439234" width="620" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
				}, 1000);
			})
			$videoModal.find(".wrap").click(function (e) {
				e.stopPropagation();
			});
		});
	</script>

	<?php wp_footer(); ?>

	<!-- analytics -->
	<script>
	(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
	(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
	l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
	ga('send', 'pageview');
	</script>
</body>
</html>
