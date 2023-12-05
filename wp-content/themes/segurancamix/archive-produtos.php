<?php
get_header();
?>

<section class="produtos title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Produtos</h2>
                <h3>Nossos produtos</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
            <?php
            if (have_posts()) {
            ?>
                <div class="bloco-produtos">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            while (have_posts()) {
                                global $post;
                                the_post();
                            ?>
                                <?php get_template_part('template/content', 'lista-produtos'); ?>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="container">
                    <div class="col-md-12">
                        <p>Nenhum produto cadastrado!</p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>