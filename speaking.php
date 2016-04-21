<?php
/**
 * The template used for displaying page content in page.php
 * Template name: Speaking
 * @package Sip
 */
?>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen"charset="utf-8">
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/joey/style.css">
</head>
<body>
	<section class="speaking-hero va">
		<section class="speaking-hero-copy-container">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="bubble-container">
							<div class="bubble regular red">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/joey/images/bubble1.jpg" alt="" class="img-circle">
							</div>
							<div class="bubble small blue">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/joey/images/bubble2.jpg" alt="" class="img-circle">
							</div>
							<div class="bubble large yellow">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/joey/images/bubble3.jpg" alt="" class="img-circle">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="speaking-hero-copy">
							<p>I believe in learning through sharing. Most of my web skills were obtained through conference videos, online tutorials and in-person meetups.
							</p>
							<p>
								I am always passionate about establishing and building local tech communities to help and mentor each other. I actively seek opportunities to speak at local meetup groups, help revive ones that aren't active or start groups where none exist.
							</p>
							<a href="#" class="btn btn-danger">Learn more</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="talks">
		<section class="pinned-talk">
			<div class="container">
				<div class="row mt-l">
					<div class="card">
						<div class="col-sm-8 card-image-holder">
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/joey/images/wpri.jpg" alt="" class="img-responsive card-image-left">
						</div>
						<div class="col-sm-4 card-content-holder">
							<h1 class="recent-talk-title">Utilizing advanced custom fields</h1>
							<p class="meta">
								<a href="http://www.meetup.com/WordPressRI/events/228178111/">Wordpress Rhode Island</a>
							</p>
							<p class="meta">
								Apr 12, 2016 (2 weeks ago)
							</p>
							<p class="meta">Hands-on workshop</p>
							<p>I taught attendees of this workshop how to convert a static HTML design to a fully custom wordpress template. </p>
							<a href="#" class="btn btn-primary">Learn more</a>
						</div>
					</div>
				</div>
				<div class="row mt-l">
					<div class="col-sm-4">
						<div class="card">
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/joey/images/" alt="" />
							<h1 class="talk-title">Content is a beast</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, perspiciatis.</p>
							<a href="#" class="btn btn-primary">View Slides</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/joey/images/" alt="" />
							<h1 class="talk-title"></h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, cum.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<img src="<?php echo get_site_url(); ?>/wp-content/themes/joey/images/" alt="" />
							<h1 class="talk-title"></h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, cumque.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
			<section class="availability">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h1>I am currently not available for talks.</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<p>The whole of 2016, I am taking a break from the speaking routine. I am currently accepting requests for Sep '16 and upwards.</p>
							<a href="#" class="btn btn-danger">Get in touch</a>
						</div>
					</div>
				</div>
		</section>
		<section class="previous-talks"></section>
	</section>
	<section class="image-grid">
		<div class="container">
			<div class="row">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/joey/images/collage2.jpg" class="img-responsive">
			</div>
		</div>

	</section>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
