<?php
get_header();
global $post;
$galleries = get_field('galeria_de_imagens');
?>

<section class="produto title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Produtos</h2>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <!-- <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore
                    dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem
                    ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta,
                    obcaecati labore explicabo nulla quasi natus dolores.
                </p> -->

            </div>
        </div>
    </div>
</section>

<section class="info-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <div class="product-main__gallery">
                            <div class="product-main__gallery-main owl-carousel owl-theme" id="sync1">
                                <a href="<?php echo the_post_thumbnail_url(); ?>" data-lightbox="product-gallery" class="product-main__gallery-main-item">
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </a>

                                <?php
                                if ($galleries) {
                                    foreach ($galleries as $image) {
                                        ?>
                                        <a href="<?php echo $image; ?>" data-lightbox="product-gallery" class="product-main__gallery-main-item">
                                            <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
                                        </a>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                            <div class="product-main__gallery-thumb owl-carousel owl-theme" id="sync2">
                                <?php
                                if ($galleries) {
                                    foreach ($galleries as $image) {
                                        ?>
                                        <div class="product-main__gallery-thumb-item">
                                            <img src="<?php echo $image; ?>" alt="">
                                        </div>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="product-gallery">
                            <a href="<?php echo the_post_thumbnail_url(); ?>" data-lightbox="product-gallery">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>

                            <?php
                            if ($galleries) {
                                foreach ($galleries as $image) {
                                    ?>
                                    <a href="<?php echo $image; ?>" data-lightbox="product-gallery">
                                        <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
                                    </a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- <h2>Porta blindada</h2> -->

                        <div class="product-text">
                            <?php the_content(); ?>
                        </div>

                        <div class="produto-btns">
                            <button class="btn-produto__solicitar_oracmento">
                                <a href="<?php echo get_site_url() ?>/orcamento">
                                    SOLICITAR ORÇAMENTO
                                </a>
                            </button>
                            <button class="btn-produto__falar_especialista">
                                <a href="https://wa.me/5511000000" target="_blank" rel="noopener">
                                    FALAR COM ESPECIALISTA
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="tab-produto">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">Descrição</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Características principais</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">Conteúdo</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php echo get_field('descricao'); ?>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="<?php echo get_field('caracteristicas_principais'); ?>"
                                alt="Características do produto" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="col-md-12 lista-blog">
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type' => 'blog',
                            'orderby' => 'date',
                            'order' => 'desc',
                            'posts_per_page' => 3
                        );
                        $query_blog = new WP_Query($args);
                        ?>
                        <?php
                        while ($query_blog->have_posts()) {
                            $query_blog->the_post();
                            ?>
                            <div class="col-md-4">
                                <div class="blog-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                        <h2>
                                            <?php the_title(); ?>
                                        </h2>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <button id="home-blog_carousel__btn">SAIBA MAIS</button>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>