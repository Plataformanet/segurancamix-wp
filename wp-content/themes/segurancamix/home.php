<?
/* Template name: Home */
get_header();
?>

<section class="home-banner">
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

<section class="sobre-nos">
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
                        <a href="http://">SAIBA MAIS</a>
                    </button>
                </div>
                <div class="col-md-6">
                    <img src="<? bloginfo('template_url') ?>/assets/images/imagem-empresa.png" alt="Conheça a Segurança Mix">
                </div>
            </div>
        </div>
    </div>
</section>

<? get_footer(); ?>