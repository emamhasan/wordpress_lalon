<div id="main">
<?php get_header(); ?>
	

<div id="content">
	
	<a href="<?php the_permalink(); ?>" title="<?php sprintf( __( 'Permanent Link to %s', 'theme-name' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
