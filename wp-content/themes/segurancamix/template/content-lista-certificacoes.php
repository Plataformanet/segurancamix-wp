<div class="col-md-6">
    <h2>Certificações</h2>
    <h3>Somos certificados</h3>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
    </p>
    <button class="btn-certificados">
        <a href="http://">VER TODOS</a>
    </button>
</div>
<div class="col-md-6 d-flex align-items-end">
    <?php
    $args = array('post_type' => 'certificados');
    $query_certificados = new WP_Query($args);
    ?>
    <div class="home-certificados__carousel owl-carousel owl-theme">
        <?
        while ($query_certificados->have_posts()) {
            $query_certificados->the_post();
        ?>
            <a href="" class="certificados-item">
                <img src="<? the_post_thumbnail_url() ?>" alt="<? the_title(); ?>">
                <div class="wrapper-btn">
                    <button>SAIBA MAIS</button>
                </div>
            </a>
        <?
        }
        wp_reset_query();
        ?>
    </div>
</div>