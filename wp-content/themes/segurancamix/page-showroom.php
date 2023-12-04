<?php
/* Template name: Showroom */
get_header();
$args = array('post_type' => 'showrooms');
$query_showroom = new WP_Query($args);
?>

<section class="showroom title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Showroom</h2>
                <h3>Visite nosso showroom</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
            <div class="bloco-showroom">
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        while ($query_showroom->have_posts()) {
                            $query_showroom->the_post();
                        ?>
                            <div class="col-md-4 showroom-item">
                                <a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="product-gallery">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="visitar-showroom">
    <div class="row">
        <div class="container-fluid">
            <img src="<? bloginfo('template_url') ?>/assets/images/banner-showroom.png" alt="Segurança Mix">
            <div class="container info-banner__showroom">
                <div class="col-md-4">
                    <p>
                        Venha nos visitar e <br>
                        confira nosso showroom.
                    </p>
                    <button class="btn-banner__showroom">
                        <a href="http://">
                            QUERO VISITAR O SHOWROOM
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>