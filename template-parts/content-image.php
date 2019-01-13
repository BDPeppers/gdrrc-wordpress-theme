<div class="card">
    <div class="card-body">
        <?php the_post_thumbnail(array(300,300) ); ?>
        <h5 class="card-title"><?php the_title(); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php the_category(''); ?></h6>
        <p class="card-text">
        <?php the_content(); ?>
        </p>
    </div>
</div>

<!-- Styling for image posts -->