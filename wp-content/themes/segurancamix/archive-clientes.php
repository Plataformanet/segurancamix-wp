<?php
get_header();
?>

<section class="clientes title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Clientes</h2>
                <h3>Nossos clientes</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
        </div>
        <div class="row lista-clientes">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $args = array('post_type' => 'clientes', 'posts_per_page' => -1);
                    $query_clientes = new WP_Query($args);
                    while ($query_clientes->have_posts()) {
                        $query_clientes->the_post();
                    ?>
                        <div class="col-md-2 bloco-clientes">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>