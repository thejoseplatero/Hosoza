<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>


<div id="primary" class="content-area">
    <div id="content" class="site-content">
	    <?php /* Start the Loop */ ?>
	    <?php while ( have_posts() ) : the_post(); ?>
	    <?php the_content(); ?>
	    <?php endwhile; ?>

	    <?php while ( have_posts() ) : the_post() ?>
	    <div class="entry-summary">
	         <?php the_excerpt(); ?>
	    </div><!-- .entry-summary -->
	    <?php endwhile; ?>
    </div><!-- #content .site-content -->


</div><!-- #primary .content-area -->
