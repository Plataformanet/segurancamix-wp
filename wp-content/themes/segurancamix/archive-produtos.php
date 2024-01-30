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
                    A Segurança Mix é uma empresa especializada em blindagem arquitetônica, com o comprometimento em oferecer o que há de mais seguro atualmente no mercado.
                    Na Segurança Mix, nossos produtos têm Garantia de 5 anos.
                </p>
                <p>
                    Aos nossos clientes prezamos por confiança, credibilidade e respeito.
                    Solicite sua cotação, estaremos a sua disposição.
                </p>
            </div>
            <?php
            if (have_posts()) {
            ?>
                <div class="bloco-produtos">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            $args = array('post_type' => 'produtos', 'posts_per_page' => -1);
                            $query_produtos = new WP_Query($args);
                            while ($query_produtos->have_posts()) {
                                global $post;
                                $query_produtos->the_post();
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