<?php
// Template Name: Information Page


?>
<?php get_header(); ?>
<?php

if( have_posts() ):
    //while wordpress has post/static pages published bring them in
    while( have_posts() ): the_post();

?>
<div class="sect1 top-bottom">
    <div class="participation-box">
        <h1 class="participation-header">
            <?php echo get_the_title()?>
        </h1>
        <p class="participation-text">
            Nunc vel eleifend ligula, efficitur sollicitudin nisi. Vivamus nec velit nisi. Integer sit amet sapien
            nisl. Curabitur eget nulla dui.
        </p>
    </div>
</div>

<div class="form">
    <!-- The expected content is a form of some kind -->
    <?php echo the_content(); ?>
</div>

<?php
endwhile;
else:
?>
<p>There is no content to be displayed.</p>

<?php endif; ?>
<?php get_footer(); ?>