
<div class="row footer">
	<div class="col-lg-10 col-md-10 col-sm-11 col-centered">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<h3>Quick Links</h3>
				<ul>
					<li>
						<a href="<?php echo base_url(); ?>">
							<div>Home</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>services">
							<div>Services</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>folio">
							<div>Folio</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>contact">
							<div>Contact Us</div>
						</a>
					</li>
				</ul>

				<h3>Our Momentum</h3>
				<ul>
					<li>
						<a href="<?php echo base_url(); ?>news">
							<div>News</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>blog">
							<div>Blog</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>quote">
							<div>Get a Quote</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>career">
							<div>Careers</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<h3>Services</h3>
				<ul>
					<li>
						<a href="<?php echo base_url(); ?>services/web-development-service/">
							<div>Web Development</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>services/user-interface-design-service/">
							<div>UI / UX</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>services/mobile-development-service/">
							<div>Mobile Development</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>services/enterprise-mobility-service/">
							<div>Enterprise Mobility</div>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>services/digital-marketing-agency/">
							<div>Digital Marketing</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<h3>Popular</h3>
				<ul>
					<li>
						<a href="#">
							<div>Wordpress Web Design</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div>Custom Web Design</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div>Responsive Web Design</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div>Branding Explainer Videos</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<?php 
				if(uri_string() != "")
				{
				?>
				<ul class="social">
					<li>
						<a href="https://www.facebook.com/code.bibber" target="_blank" class="facebook">
							<i></i>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/codebibber" target="_blank" class="twitter">
							<i></i>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/user/CodeBibber" target="_blank" class="youtube">
							<i></i>
						</a>
					</li>
					<li>
						<a href="https://plus.google.com/104906034444512211767/about" target="_blank" class="googleplus">
							<i></i>
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/codebibber" target="_blank" class="linkedin">
							<i></i>
						</a>
					</li>
					<li>
						<a href="http://www.pinterest.com/codebibber/" target="_blank" class="pinterest">
							<i></i>
						</a>
					</li>
				</ul>
				<?php
				}
				?>
			</div>
		</div>

		<div class="copyright">
			<div class="text">
				&copy; 2014 CodeBibber. All Rights Reserved.
			</div>
			<div class="footer-logo">
				<a href="<?php echo base_url(); ?>">
				<img src="<?php echo base_url() ?>images/logo.png" alt="">
				</a>
			</div>
		</div>

	</div><!-- end col-lg-10 col-centered -->

</div><!-- end row footer  -->
</div>	<!-- end container-fluid -->

<a href="#" class="ico back-to-top"></a>

</body>
</html>
<script type="text/javascript">
jQuery(document).ready(function($) {

	$(window).scroll(function() {
	var width = $(window).width();
	// offset =  $(".main-menu").offset();
	scrollTop =  $(window).scrollTop();

		if(width > 600)
		{
			if(scrollTop > 189) {
				$(".second-menu").css({
					'top' : '-1px'
				});
			} else {
				$(".second-menu").css({
					'top' : '-600px'
				});
			}
		}

		if (scrollTop > 250) {
			$('.back-to-top').fadeIn(800);
		} else {
			$('.back-to-top').fadeOut(800);
		}
		
	});

	$(".menu-icon").click(function() {
		$('.mobile-menu-nav').slideToggle();
	});

	$(".back-to-top").click(function() {
		$('html, body').animate({scrollTop: 0}, 1000);
		return false;
	});

	// var lastScrollTop = 0;
	// $(window).scroll(function(event){
	//    var st = $(this).scrollTop();
	//    if (st > lastScrollTop){
	//    	$(".mobile-menu").removeClass('fix-menu');
	//    } else {
	//        console.log("success")
	//        $(".mobile-menu").addClass('fix-menu');
	//       // upscroll code
	//    }
	//    lastScrollTop = st;
	// });
});
</script>

