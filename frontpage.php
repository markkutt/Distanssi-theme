<?php 
/*
Template Name: Distanssi Etusivu
*/ ?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
<div class="otsake kartta">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<h1><img class="karttalogo" src="<?php bloginfo('url'); ?>/kuvat/LogoWhite.png"/></h1>
				<p>Joustava etäopetus nuorisotyöntekijöiden digitaalisten taitojen vahivastajana</p>
		 		<p><a href="/info" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-info-sign"></span> Lue lisää</a></p>
		 	</div>
		 </div>
	</div>
</div>
<?php get_template_part( 'nav' ); ?>
<div class="container">
	<div class="row">
		<!--<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
				<?php wp_list_categories('orderby=name&title_li'); ?>
			</ul>
		</div>-->
		<div class="col-md-12">
			<?php while(have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
				<p class="text-muted"><?php the_author(); ?>, <?php the_time('F j, Y'); ?></p>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
<?php get_footer(); ?>