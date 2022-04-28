<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chippewa_wp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
<div class="col-12 col-md-6">
<?php echo get_the_title();?>
<?php echo get_the_excerpt();?>
</div>
<div class="col-12 col-md-6">
<?php chippewa_wp_post_thumbnail(); ?>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
