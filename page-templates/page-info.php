<?php
// Template Name: Information Page


?>
<?php get_header(); ?>
<?php

if( have_posts() ):
    //while wordpress has post/static pages published bring them in
    while( have_posts() ): the_post();


get_template_part('template-parts/content', 'header');
?>
<div class="bottom-top">
<div class="basic">
     <?php the_content(); ?>
</div>
</div>
<?php
endwhile;
else:
?>
<p>There is no content to be displayed.</p>

<?php endif; ?>
<?php get_footer(); ?>