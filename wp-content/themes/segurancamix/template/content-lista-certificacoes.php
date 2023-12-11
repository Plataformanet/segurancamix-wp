<div class="col-md-6">
    <h2>Certificações</h2>
    <h3>Somos certificados</h3>
                    <p>A Segurança Mix é licenciada pelo Governo do Estado de São Paulo e pela Polícia Civil do Estado, para o armazenamento e uso de produtos químicos controlados, utilizados em blindagem. Assim, está certificado que nossa empresa cumpre com todas as normas de segurança estabelecidas pelo Decreto Estatual n° 6.911/35 e pelo Decreto Federal n° 3665/00.</p>
    <button class="btn-certificados">
        <a href="<?php echo get_site_url() ?>/certificados">VER TODOS</a>
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
            <a href="<?php echo get_site_url() ?>/certificados" class="certificados-item">
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