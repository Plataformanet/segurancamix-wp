<?php
get_header();
?>

<section class="blog title">
    <div class="container">
        <div class="row">
            <? while (have_posts()) : the_post(); ?>
                <div class="col-md-12">
                    <div class="blog__post-title">
                        <h1><? the_title(); ?></h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <?
                    if (has_post_thumbnail()) :
                    ?>
                        <img class="blog__post-img" src="<? the_post_thumbnail_url(); ?>" alt="<? the_title(); ?>">
                    <?
                    endif;
                    ?>
                    <div class="blog__post-content">
                        <? the_content(); ?>
                    </div>
                </div>
            <? endwhile; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>