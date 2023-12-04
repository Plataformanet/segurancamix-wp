<?php
get_header();
?>

<section class="single-blog title">
    <div class="container">
        <div class="row">
            <?php
            while (have_posts()) : the_post();
            ?>
                <div class="col-md-12">
                    <div class="blog__post-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php
                    if (has_post_thumbnail()) :
                    ?>
                        <img class="blog__post-img" src="<? the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <?
                    endif;
                    ?>
                    <div class="blog__post-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>