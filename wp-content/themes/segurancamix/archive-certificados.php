<?php
get_header();
?>

<section class="blog title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Certificações</h2>
                <h3>Confira nossos certificados</h3>
                    <p>A Segurança Mix é licenciada pelo Governo do Estado de São Paulo e pela Polícia Civil do Estado, para o armazenamento e uso de produtos químicos controlados, utilizados em blindagem. Assim, está certificado que nossa empresa cumpre com todas as normas de segurança estabelecidas pelo Decreto Estatual n° 6.911/35 e pelo Decreto Federal n° 3665/00.</p>
                    
                    <p>Nossa empresa possui o Certificado de Vistoria, emitido pelo Governo e Polícia Civil do Estado de São Paulo. Assim, a Segurança Mix assegura o cumprimento de todas as regras em nosso local de armazenamento de produtos controlados, respeitando a Portaria 1274/03 do Ministério da Justiça.</p>
                    
                    <p>A Segurança Mix também é certificada pelo Exército Brasileiro e Ministério da Defesa, que comprovam e validam os serviços de nossa empresa.</p>
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
                            <?php get_template_part('template/content', 'lista-certificados'); ?>
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
    <p>Nenhum certificado cadastrado!</p>
<?php
        }
?>
</section>


<?php get_footer(); ?>