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