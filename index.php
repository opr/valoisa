<<<<<<< HEAD
<?php
/**
 * The template for displaying index
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ): ?>
	<h2>Latest Posts</h2>
	<ol>
		<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<article>
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
					<?php the_content(); ?>
				</article>
			</li>
		<?php endwhile; ?>
	</ol>
<?php else: ?>
	<h2>No posts to display</h2>
<?php endif; ?>

<?php get_footer(); ?>
=======
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>Valoisa Sass Boilerplate</title>
	<link rel="stylesheet" href="/assets/styles/css/valoisa.css" type="text/css">
</head>
<body>

<div class="container">

	<h1>Header 1</h1>

	<h2>Header 2</h2>

	<h3>Header 3</h3>
	<h4>Header 4</h4>
	<h5>Header 5</h5>

	<form action="" method="get">
		<input type="text" name="">
		<button class="transition">Submit</button>
	</form>

	<div class="row bg-secondary pad tac no-margins">
		<div class="bg-primary col-1 col-t-2 col-lt-5">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
		<div class="bg-primary col-1 col-t-2">1/12</div>
	</div>


	<div class="row bg-tertiary pad tac">
		<div class="col-2 col-m-4">2/12</div>
		<div class="col-2 col-m-4">2/12</div>
		<div class="col-2 col-m-4">2/12</div>
		<div class="col-2 col-m-4">2/12</div>
		<div class="col-2 col-m-4">2/12</div>
		<div class="col-2 col-m-4">2/12</div>
	</div>

	<div class="row">
		<div class="col-3">3/12</div>
		<div class="col-3">3/12</div>
		<div class="col-3">3/12</div>
		<div class="col-3">3/12</div>
	</div>

	<div class="row">
		<div class="col-4">4/12</div>
		<div class="col-4">4/12</div>
		<div class="col-4">4/12</div>
	</div>

	<div class="row">
		<div class="col-5">5/12</div>
		<div class="col-5">5/12</div>
		<div class="col-2">2/12</div>
	</div>

	<div class="row">
		<div class="col-6">6/12</div>
		<div class="col-6">6/12</div>
	</div>

	<div class="row">
		<div class="col-7">7/12</div>
		<div class="col-5">5/12</div>
	</div>

	<div class="row bg-primary pad tac">
		<div class="col-m-3 col-lt-8 col-12 col-t-2">12/12</div>
	</div>
</div>
</body>
</html>
>>>>>>> 6e9ddaeb6237cac8e3da66796912eccbbf6ea5e0
