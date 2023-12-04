<?php
/* Template name: Blog */
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
        <div class="row lista-blog">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'blog',
                        'orderby' => 'date',
                        'order' => 'desc',
                    );
                    $query_blog = new WP_Query($args);

                    while ($query_blog->have_posts()) {
                        $query_blog->the_post();
                    ?>
                        <div class="col-md-4">
                            <div class="blog-item">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_excerpt(); ?></p>
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
</section>


<?php get_footer(); ?>