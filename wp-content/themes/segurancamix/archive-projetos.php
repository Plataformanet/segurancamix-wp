<?php
get_header();
$args = array(
    'taxonomy'   => "categoria-projetos",
    'orderby'    => "",
    'order'      => "DESC",
    'hide_empty' => "",
    'include'    => ""
);

$categorias = get_terms($args);

?>

<section class="projetos title">
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
</section>

<section class="lista-projetos">
    <div class="bloco-projetos">
        <div class="container">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php
                foreach ($categorias as $key => $term) {
                ?>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo $term->term_order == 1 ? 'active' : ''; ?>" id="projeto-tab-<?php echo $term->term_id; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $term->term_id; ?>" type="button" role="tab" aria-controls="projeto" aria-selected="<?php echo $term->term_order == 1 ? 'true' : ''; ?>"><?php echo $term->name; ?></button>
                    </li>
                <?
                }
                ?>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php
                foreach ($categorias as $key => $term) {
                    $args = array(
                        'post_type' => 'projetos',
                        'order' => 'asc',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categoria-projetos',
                                'terms' => $term->term_id
                            )
                        ),
                    );
                    $query_projetos = new WP_Query($args);
                ?>
                    <div class="tab-pane fade <?php echo $term->term_order == 1 ? 'show active' : ''; ?>" id="<?php echo $term->term_id; ?>" role="tabpanel" aria-labelledby="projeto-tab-<?php echo $term->term_id; ?>">
                        <h2><?php echo $term->name; ?></h2>
                        <div class="row">
                            <?php
                            while ($query_projetos->have_posts()) {
                                global $post;
                                $query_projetos->the_post();
                            ?>
                                <div class="col-md-4 mb-5">
                                    <a href="<?php the_permalink(); ?>" class="projetos-item">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                        <p><?php the_title(); ?></p>
                                        <div class="wrapper-btn">
                                            <button>SAIBA MAIS</button>
                                        </div>
                                    </a>
                                </div>
                            <?
                            }
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                <?
                }
                ?>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>