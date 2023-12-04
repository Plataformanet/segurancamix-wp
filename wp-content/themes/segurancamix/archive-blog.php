<?php
get_header();
?>

<section class="blog title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Blog</h2>
                <h3>Confira nosso blog</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
        </div>
        <?php
        if (have_posts()) {
        ?>
            <div class="row lista-blog">
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        while (have_posts()) {
                            global $post;
                            the_post();

                        ?>
                            <?php get_template_part('template/content', 'lista-blog'); ?>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
    </div>
<?php
        } else {
?>
    <p>Nenhuma notícia cadastrada!</p>
<?php
        }
?>
</section>


<?php get_footer(); ?>