<?
/* Template name: Home */
get_header();
?>

<section class="home-banner d-none d-md-block">
    <?
    $args = array(
        'post_type' => 'banners'
    );
    $query_banners = new WP_Query($args);
    ?>

    <?
    while ($query_banners->have_posts()) {
        $query_banners->the_post();
    ?>
        <div class="banner-item">
            <img src="<? the_post_thumbnail_url() ?>" alt="" class="banner-image">
        </div>
    <?
    }
    wp_reset_query();
    ?>
</section>

<section class="home-sobre__nos title">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sobre nós</h2>
                    <h3>Conheça a Segurança Mix</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                    </p>
                    <p>
                        Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?
                    </p>
                    <button class="btn-sobre_nos">
                        <a href="<?php echo get_site_url() ?>/sobre-nos">SAIBA MAIS</a>
                    </button>
                </div>
                <div class="col-md-6">
                    <img src="<? bloginfo('template_url') ?>/assets/images/imagem-empresa.png" alt="Conheça a Segurança Mix">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="certificados title">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Certificações</h2>
                <h3>Somos certificados</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
                <button class="btn-certificados">
                    <a href="http://">VER TODOS</a>
                </button>
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <?php
                $args = array('post_type' => 'certificados');
                $query_certificados = new WP_Query($args);
                ?>
                <div class="home-certificados__carousel owl-carousel owl-theme">
                    <?
                    while ($query_certificados->have_posts()) {
                        $query_certificados->the_post();
                    ?>
                        <a href="" class="certificados-item">
                            <img src="<? the_post_thumbnail_url() ?>" alt="<? the_title(); ?>">
                            <div class="wrapper-btn">
                                <button>SAIBA MAIS</button>
                            </div>
                        </a>
                    <?
                    }
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-produtos title">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Produtos</h2>
                <h3>Nossos produtos</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
                <button class="btn-sobre_nos">
                    <a href="<?php echo get_site_url() ?>/produtos">SAIBA MAIS</a>
                </button>
            </div>
            <div class="col-md-8">
                <?php
                $args = array(
                    'post_type' => 'produtos',
                    'orderby' => 'date',
                    'order' => 'asc',
                    'posts_per_page' => 4
                );
                $query_produtos = new WP_Query($args);
                ?>
                <div class="home-produtos__carousel owl-carousel owl-theme">
                    <?php
                    while ($query_produtos->have_posts()) {
                        global $post;
                        $query_produtos->the_post();
                        $term_obj_list = get_the_terms($post->ID, 'categoria-produtos');
                    ?>
                        <a href="<?php echo the_permalink(); ?>" class="produtos-item">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <div class="conteudo-produto">
                                <img src="<?php echo get_field('icone', 'categoria-produtos_' . $term_obj_list[0]->term_id); ?>" alt="Icone representando o produto">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo get_field('breve_descricao', $query_produtos->ID()); ?></p>
                                <button>SAIBA MAIS</button>
                            </div>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-projetos title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Projetos</h2>
                <h3>O que já produzimos</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
        </div>
    </div>
    <div class="carrousel-projetos">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'projetos',
                    'orderby' => 'date',
                    'order' => 'desc',
                    'posts_per_page' => 2,
                );
                $query_projetos = new WP_Query($args);
                ?>
                <?php
                while ($query_projetos->have_posts()) {
                    global $post;
                    $query_projetos->the_post();
                    $term_obj_list = get_the_terms($post->ID, 'categoria-projetos');
                ?>
                    <div class="col-md-6 projetos_comerciais">
                        <?php
                        foreach ($term_obj_list as $term_obj) {
                        ?>
                            <h2><?php echo $term_obj->name ?></h2>
                        <?php
                        }
                        ?>

                        <div class="projetos__carousel">
                            <a href="<?php the_permalink(); ?>" class="projetos-item">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                <p><?php echo the_title(); ?></p>
                                <div class="wrapper-btn">
                                    <!-- <button>SAIBA MAIS</button> -->
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            </a>
        </div>
    </div>
    <!-- <button class="btn-carrousel_projetos">
                    <a href="http://">VER TODOS</a>
                </button> -->
    </div>
    </div>
    </div>
</section>

<section class="nossos-cliente title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Clientes</h2>
                <h3>Nossos clientes</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
                <div class="col-md-12">
                    <div class="nossos-clientes__carousel owl-carousel owl-theme">
                        <?php
                        $args = array('post_type' => 'clientes');
                        $query_clientes = new WP_Query($args);
                        while ($query_clientes->have_posts()) {
                            $query_clientes->the_post();
                        ?>
                            <a href="<?php echo get_site_url() ?>/nossos-clientes" class="clientes-item">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="confira-blog title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Blog</h2>
                <h3>Confira nosso blog</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
                <div class="col-md-12">
                    <?php
                    $args = array(
                        'post_type' => 'blog',
                        'orderby' => 'date',
                        'order' => 'desc',
                    );
                    $query_blog = new WP_Query($args);
                    ?>
                    <div class="home-blog__carousel owl-carousel owl-theme">
                        <?php
                        while ($query_blog->have_posts()) {
                            $query_blog->the_post();
                        ?>
                            <a href="<?php the_permalink(); ?>" class="blog-item">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <button id="home-blog_carousel__btn">SAIBA MAIS</button>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- <button class="btn-configura_blog">
                <a href="http://">ACESSAR BLOG</a>
            </button> -->
        </div>
    </div>
</section>

<? get_footer(); ?>