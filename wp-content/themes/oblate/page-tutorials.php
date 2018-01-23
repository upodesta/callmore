<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header bright-header tutorials-header">
	<div class="small-container">
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php the_content(); ?>
	</div>
</header>

<section class="quote-container">
	<div class="container">
		<blockquote class="testimonial">"By far your articles are the most crystal clear I've seen. An ace web developer who can articulate without ego? That's
			gold!"
			<cite>&mdash; Ralphie Harvey, Agile Software Product Delivery Expert</cite></blockquote>
	</div>
</section>

<section class="topics">
	<div class="small-container">
		<article class="quick">
			<p>Quick! I want to learn...</p>
			<a href="<?php echo site_url(); ?>/developing-a-wordpress-theme-from-scratch/"><img src="<?php echo site_url(); ?>/wp-content/uploads/wp-2-150x150.png"> WordPress</a>
			<a href="<?php echo site_url(); ?>/what-is-bootstrap-and-how-do-i-use-it/"><img src="<?php echo site_url(); ?>/wp-content/uploads/bs.png"> Bootstrap</a>
			<a href="<?php echo site_url(); ?>/how-to-use-jquery-a-javascript-library/"><img src="<?php echo site_url(); ?>/wp-content/uploads/jq1-150x150.png"> jQuery</a>
			<a href="<?php echo site_url(); ?>/learn-sass-now/"><img src="<?php echo site_url(); ?>/wp-content/uploads/sass-150x150.png"> Sass</a>
			<a href="<?php echo site_url(); ?>/getting-started-with-grunt-and-sass/"><img src="<?php echo site_url(); ?>/wp-content/uploads/grunt-150x150.png"> Grunt</a>
			<a href="<?php echo site_url(); ?>/getting-started-with-gulp/"><img src="<?php echo site_url(); ?>/wp-content/uploads/gulp-150x150.png"> Gulp</a>
			<a href="<?php echo site_url(); ?>/getting-started-with-git/"><img src="<?php echo site_url(); ?>/wp-content/uploads/git-150x150.png"> Git</a>
			<a href="<?php echo site_url(); ?>/how-to-use-json-data-with-php-or-javascript/"><img src="<?php echo site_url(); ?>/wp-content/uploads/jsonimg-150x150.png"> JSON</a>
			<a href="<?php echo site_url(); ?>/make-a-static-website-with-jekyll/"><img src="<?php echo site_url(); ?>/wp-content/uploads/jekyll-2-150x150.png"> Jekyll</a>
			<a href="<?php echo site_url(); ?>/how-to-use-the-command-line-for-apple-macos-and-linux/"><img src="<?php echo site_url(); ?>/wp-content/uploads/terminal-150x150.png"> command line</a>
			<a href="<?php echo site_url(); ?>/what-are-vagrant-and-virtualbox-and-how-do-i-use-them/"><img src="<?php echo site_url(); ?>/wp-content/uploads/v-150x150.png"> Vagrant/VirtualBox</a>
			<a href="<?php echo site_url(); ?>/how-to-install-and-use-node-js-and-npm-mac-and-windows/"><img src="<?php echo site_url(); ?>/wp-content/uploads/nodejs-150x150.png"> Node.js/npm</a>
		</article>
	</div>
</section>

<?php endwhile; endif; ?>

<section class="alternate-background tutorials-page">

	<div class="container">

		<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '-1',
				'category_name' => 'front-end',
			);

			$frontend = new WP_Query( $args );

			if ( $frontend->have_posts() ) : ?>

		<h2 id="front-end">Front End &amp; Design</h2>
		<div class="grid">

			<?php while ( $frontend->have_posts() ) : $frontend->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php	endwhile; ?>
		</div>
		<?php endif; wp_reset_postdata(); ?>

		<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '-1',
				'category_name' => 'back-end',
			);

			$frontend = new WP_Query( $args );

			if ( $frontend->have_posts() ) : ?>

		<h2 id="back-end">Back End Development</h2>
		<div class="grid">

			<?php while ( $frontend->have_posts() ) : $frontend->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php	endwhile; ?>
		</div>
		<?php endif; wp_reset_postdata(); ?>


		<?php $args = array(
				'order' => 'asc',
				'posts_per_page' => '-1',
				'category_name' => 'javascript',
			);

			$frontend = new WP_Query( $args );

			if ( $frontend->have_posts() ) : ?>

		<h2 id="javascript">JavaScript</h2>
		<div class="grid">

			<?php while ( $frontend->have_posts() ) : $frontend->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php	endwhile; ?>
		</div>
		<?php endif; wp_reset_postdata(); ?>


		<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '-1',
				'category_name' => 'workflow',
			);

			$frontend = new WP_Query( $args );

			if ( $frontend->have_posts() ) : ?>

		<h2 id="workflow">Developer Workflow</h2>
		<div class="grid">

			<?php while ( $frontend->have_posts() ) : $frontend->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php	endwhile; ?>
		</div>
		<?php endif; wp_reset_postdata(); ?>


		<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '-1',
				'category_name' => 'system',
			);

			$frontend = new WP_Query( $args );

			if ( $frontend->have_posts() ) : ?>

		<h2 id="system">System Administration</h2>
		<div class="grid">

			<?php while ( $frontend->have_posts() ) : $frontend->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php	endwhile; ?>
		</div>
		<?php endif; wp_reset_postdata(); ?>


		<?php $args = array(
				'order' => 'asc',
				'posts_per_page' => '-1',
				'category_name' => 'wordpress',
			);

			$frontend = new WP_Query( $args );

			if ( $frontend->have_posts() ) : ?>

		<h2 id="wordpress">WordPress</h2>
		<div class="grid">

			<?php while ( $frontend->have_posts() ) : $frontend->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php	endwhile; ?>
		</div>
		<?php endif; wp_reset_postdata(); ?>


		<?php $args = array(
				'order' => 'desc',
				'posts_per_page' => '-1',
				'category_name' => 'general',
			);

			$frontend = new WP_Query( $args );

			if ( $frontend->have_posts() ) : ?>

		<h2 id="general">General</h2>
		<div class="grid">

			<?php while ( $frontend->have_posts() ) : $frontend->the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php	endwhile; ?>
		</div>
		<?php endif; wp_reset_postdata(); ?>


	</div>

	</div>
</section>

<section class="quote-container">
	<div class="container">
		<blockquote class="testimonial">"I just stayed up almost all night with excitement after reading a number of your articles due to how well written and
			understandable they are. I feel like I hit the jackpot and did more work in one night than I have in a year."
			<cite>&mdash; <a href="http://beccimelson.com" target="blank">Becci Melson</a>, Support Engineer</cite></blockquote>
	</div>
</section>

<?php get_footer();