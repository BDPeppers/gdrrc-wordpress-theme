<?php get_header(); ?>
<!-- Landing Page -->
<?php
// Template Name: General Page Template
?>

<?php
// Basic/Default WordPress Loop
if( have_posts() ):
    //while wordpress has post/static pages published bring them in
    while( have_posts() ): the_post();

?>
<div class="top-bottom">
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
