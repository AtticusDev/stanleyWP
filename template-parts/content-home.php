<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jdeanfield
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row justify-content-center">
			<div class="entry-content col-md-6 text-center">
				<?php
					the_content();
				?>
			</div>
			<div class="col-md-6">
		        <?php the_post_thumbnail('full', array('class' => 'rounded')); ?>

			</div><!-- .entry-content -->

</article><!-- #post-## -->
