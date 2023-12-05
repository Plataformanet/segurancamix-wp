<?php
$term_obj_list = get_the_terms($post->ID, 'categoria-produtos');
?>
<div class="col-md-3 produtos-item">
    <a href="<?php echo the_permalink(); ?>">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <div class="conteudo-produto">
            <img src="<?php echo get_field('icone', 'categoria-produtos_' . $term_obj_list[0]->term_id); ?>" alt="Icone representando o produto">
            <h2><?php the_title(); ?></h2>
            <p><?php echo get_field('breve_descricao', $post->ID); ?></p>
            <button>SAIBA MAIS</button>
        </div>
    </a>
</div>