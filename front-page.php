<?php get_header();?>

<section class="page-section" id="android">
    <div class="container">
        <!-- show only android category -->
        <?php query_posts('cat=2' . '&showposts=10'.'&paged='.$paged); ?>
        
        <!-- <h2 class="text-center mt-0">Android</h2>
        <hr class="divider my-4"> -->
        <div class="row pt-5">
            <?php if (have_posts()): while(have_posts()): the_post(); ?>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank">
                                <img class="fas fa-4x fa-gem text-primary mb-4" style="width:80%;" src="<?php the_post_thumbnail_url('small'); ?>">
                            </a>
                        <?php endif; ?>
                        <h3 class="h4 mb-2"><?php the_title();?></h3>
                        <p class="text-muted mb-0"><?php echo strip_tags( get_the_excerpt() ); ?></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>

        <!-- Reset Query -->
        <?php wp_reset_query(); ?>

    </div>
</section>

<!-- Call to Action Section -->
<!-- <section class="page-section bg-dark text-white" id="download">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-4 mx-auto">
            <a href="https://play.google.com/store/apps/dev?id=6742236779137347675" target="_blank">
            <img style="width:80%;" src="<?php bloginfo('template_directory');; ?>/images/get-android.png">
            </a>
        </div>
      </div>
    </div>
</section> -->

<?php get_footer();?>