<?
/* Template name: Home */
get_header();
?>

<section class="home-banner d-none d-md-block">
    <?php
    $args = array(
        'post_type' => 'banners',
        'posts_per_page' => -1,
    );

    $banners = get_posts($args);
    if (!empty($banners)) :
    ?>
        <section class="banner">
            <div class="banner__carousel owl-carousel owl-theme">
                <?php
                foreach ($banners as $post) :
                    setup_postdata($post);
                ?>
                    <a href="<?php !empty(get_field('link')) ? print get_field('link') : print '#' ?>" class="banner__item">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="banner__bg">
                    </a>

                <?php
                    wp_reset_postdata();
                endforeach;
                ?>
            </div>
        </section>
    <?php
    endif;
    ?>
</section>

<section class="home-sobre__nos title">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <h2>Sobre nós</h2>
                    <h3>Conheça a Segurança Mix</h3>
                    <p><span dir="ltr">Atuando h&aacute; mais de 10 anos, a Seguran&ccedil;a Mix &eacute; uma empresa id&ocirc;nea com especializa&ccedil;&atilde;o em blindagem arquitet&ocirc;nica, focando na qualidade e no que h&aacute; de mais seguro no mercado atualmente.</span></p>

                    <p><span dir="ltr">Comercializamos portas blindadas, guaritas blindadas, caixilhos blindados, passa-volumes, todos destinados aos segmentos p&uacute;blico e corporativo.</span></p>

                    <!-- <p><span dir="ltr">Nossas portas s&atilde;o projetadas de chapas de liga especial bal&iacute;stico, oferecendo m&aacute;xima prote&ccedil;&atilde;o, desde em tentativas de arrombamentos at&eacute; disparos de armamentos de alto calibre.</span></p>

                    <p><span dir="ltr">Trabalhamos com fechaduras de seguran&ccedil;a KESO. Marca de origem su&iacute;&ccedil;a com comercializa&ccedil;&atilde;o no Brasil h&aacute; 20 anos.</span></p>

                    <p><span dir="ltr">As fechaduras de seguran&ccedil;a cont&ecirc;m at&eacute; 20 pontos de travamento e chaves computadorizadas com cart&atilde;o de seguran&ccedil;a, que permite fazer c&oacute;pias em lojas ou chaveiros credenciados KESO.</span></p>

                    <p><span dir="ltr">Temos tamb&eacute;m cadeados em a&ccedil;o, dobradi&ccedil;as de seguran&ccedil;a em a&ccedil;o inox, cilindros de seguran&ccedil;a, entre outros.</span></p> -->

                    <button class="btn-sobre_nos">
                        <a href="<?php echo get_site_url() ?>/sobre-nos">SAIBA MAIS</a>
                    </button>
                </div>
                <div class="col-md-4">
                    <img src="<? bloginfo('template_url') ?>/assets/images/imagem-empresa.png" alt="Conheça a Segurança Mix">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="certificados title">
    <div class="container">
        <div class="row">
            <?php get_template_part('template/content', 'lista-certificacoes'); ?>
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
                    A Segurança Mix é uma empresa especializada em blindagem arquitetônica, com o comprometimento em oferecer o que há de mais seguro atualmente no mercado.
                    Na Segurança Mix, nossos produtos têm Garantia de 5 anos.
                </p>
                <p>
                    Aos nossos clientes prezamos por confiança, credibilidade e respeito.
                    Solicite sua cotação, estaremos a sua disposição.
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
                                <?php
                                foreach ($term_obj_list as $term) {
                                    if ($term->parent == 0) {
                                ?>
                                        <img src="<?php echo get_field('icone', 'categoria-produtos_' . $term->term_id); ?>" alt="Icone representando o produto">
                                <?php
                                    }
                                }
                                ?>
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo get_field('breve_descricao', $query_produtos->ID()); ?></p>
                                <button>SAIBA MAIS</button>
                            </div>
                        </a>
                    <?php
                    }
                    wp_reset_query();
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
                <p>PROJETOS SEGUROS</p>
                <p>Temos Consultores Experientes e Capacitados para elaboração de um projeto seguro e inteligente para sua casa, empresa e/ou condomínio.</p>
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
                wp_reset_query();
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
                    Marcas e empresas que confiam no trabalho da Segurança Mix.
                </p>
                <div class="col-md-12">
                    <div class="nossos-clientes__carousel owl-carousel owl-theme">
                        <?php
                        $args = array('post_type' => 'clientes', 'posts_per_page' => -1);
                        $query_clientes = new WP_Query($args);
                        while ($query_clientes->have_posts()) {
                            $query_clientes->the_post();
                        ?>
                            <a href="<?php echo get_site_url() ?>/clientes" class="clientes-item">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>
                        <?php
                        }
                        wp_reset_query();
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
                        wp_reset_query();
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