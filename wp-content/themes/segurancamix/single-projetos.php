<?php
get_header();
global $post;
$galleries = get_field('galeria');
?>

<section class="projetos title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Projetos</h2>
                <h3><?php the_title() ?></h3>
                <?php the_content(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="project-main__gallery">
                        <div class="project-main__gallery-main owl-carousel owl-theme" id="sync1">
                            <a href="<?php echo the_post_thumbnail_url(); ?>" data-lightbox="project-gallery" class="project-main__gallery-main-item">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>

                            <?php
                            if ($galleries) {
                                foreach ($galleries as $image) {
                            ?>
                                    <a href="<?php echo $image; ?>" data-lightbox="project-gallery" class="project-main__gallery-main-item">
                                        <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
                                    </a>
                            <?php
                                }
                            }
                            ?>

                        </div>
                        <div class="project-main__gallery-thumb owl-carousel owl-theme" id="sync2">
                            <?php
                            if ($galleries) {
                                foreach ($galleries as $image) {
                            ?>
                                    <div class="project-main__gallery-thumb-item">
                                        <img src="<?php echo $image; ?>" alt="">
                                    </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>