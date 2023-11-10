<?
/* Template name: Home */
get_header();
?>

<section class="home-banner">
    <?
    $args = array(
        'post_type' => 'banners'
    );
    $query_banners = new WP_Query($args);
    ?>

    <?
    while ($query_banners->have_posts()) {
        $query_banners->the_post();
    ?>
        <div class="banner-item">
            <img src="<? the_post_thumbnail_url() ?>" alt="" class="banner-image">
        </div>
    <?
    }
    wp_reset_query();
    ?>
</section>

<section class="sobre-nos">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sobre nós</h2>
                    <h3>Conheça a Segurança Mix</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                    </p>
                    <p>
                        Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?
                    </p>
                    <button class="btn-sobre_nos">
                        <a href="http://">SAIBA MAIS</a>
                    </button>
                </div>
                <div class="col-md-6">
                    <img src="<? bloginfo('template_url') ?>/assets/images/imagem-empresa.png" alt="Conheça a Segurança Mix">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="certificados">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Certificações</h2>
                <h3>Somos certificados</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
                <button class="btn-sobre_nos">
                    <a href="http://">VER TODOS</a>
                </button>
            </div>
            <div class="col-md-6">
                <div class="home-certificados__carousel owl-carousel owl-theme">
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                    <a href="" class="certificados-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/certificado-sem-selecao.png" alt="Segurança Mix">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="produtos">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Produtos</h2>
                <h3>Nossos produtos</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
                <button class="btn-sobre_nos">
                    <a href="http://">SAIBA MAIS</a>
                </button>
            </div>
            <div class="col-md-8">
                <div class="home-produtos__carousel owl-carousel owl-theme">
                    <a href="" class="produtos-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/produto-porta-blindada.png" alt="Segurança Mix">
                        <div class="conteudo-produto">
                            <img src="<? bloginfo('template_url') ?>/assets/images/Icone-Porta-Blindada.png" alt="Segurança Mix">
                            <h2>Porta blindada</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab</p>
                            <button>SAIBA MAIS</button>
                        </div>
                    </a>
                    <a href="" class="produtos-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/produto-vidro-blindado.png" alt="Segurança Mix">
                        <div class="conteudo-produto">
                            <img src="<? bloginfo('template_url') ?>/assets/images/Icone-Vidro-Blindado.png" alt="Segurança Mix">
                            <h2>Vidro blindado</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab</p>
                            <button>SAIBA MAIS</button>
                        </div>
                    </a>
                    <a href="" class="produtos-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/produto-fechadura.png" alt="Segurança Mix">
                        <div class="conteudo-produto">
                            <img src="<? bloginfo('template_url') ?>/assets/images/Icone-Fechadura.png" alt="Segurança Mix">
                            <h2>Fechadura de segurança</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab</p>
                            <button>SAIBA MAIS</button>
                        </div>
                    </a>
                    <a href="" class="produtos-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/produto-guarita.png" alt="Segurança Mix">
                        <div class="conteudo-produto">
                            <img src="<? bloginfo('template_url') ?>/assets/images/Icone-Guarita.png" alt="Segurança Mix">
                            <h2>Guarita blindada</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab</p>
                            <button>SAIBA MAIS</button>
                        </div>
                    </a>
                    <a href="" class="produtos-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/produto-porta-blindada.png" alt="Segurança Mix">
                        <div class="conteudo-produto">
                            <img src="<? bloginfo('template_url') ?>/assets/images/Icone-Porta-Blindada.png" alt="Segurança Mix">
                            <h2>Porta blindada</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab</p>
                            <button>SAIBA MAIS</button>
                        </div>
                    </a>
                    <a href="" class="produtos-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/produto-vidro-blindado.png" alt="Segurança Mix">
                        <div class="conteudo-produto">
                            <img src="<? bloginfo('template_url') ?>/assets/images/Icone-Vidro-Blindado.png" alt="Segurança Mix">
                            <h2>Vidro blindado</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab</p>
                            <button>SAIBA MAIS</button>
                        </div>
                    </a>
                    <a href="" class="produtos-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/produto-fechadura.png" alt="Segurança Mix">
                        <div class="conteudo-produto">
                            <img src="<? bloginfo('template_url') ?>/assets/images/Icone-Fechadura.png" alt="Segurança Mix">
                            <h2>Fechadura de segurança</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab</p>
                            <button>SAIBA MAIS</button>
                        </div>
                    </a>
                    <a href="" class="produtos-item">
                        <img src="<? bloginfo('template_url') ?>/assets/images/produto-guarita.png" alt="Segurança Mix">
                        <div class="conteudo-produto">
                            <img src="<? bloginfo('template_url') ?>/assets/images/Icone-Guarita.png" alt="Segurança Mix">
                            <h2>Guarita blindada</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab</p>
                            <button>SAIBA MAIS</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="projetos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Projetos</h2>
                <h3>O que já produzimos</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
        </div>
    </div>
    <div class="carrousel-projetos">
        <div class="container">
            <div class="row">
                <div class="col-md-6 projetos_comerciais">
                    <h2>Projetos residenciais</h2>
                </div>
                <div class="col-md-6 projetos_residenciais">
                    <h2>Projetos comerciais</h2>
                </div>
                <button class="btn-carrousel_projetos">
                    <a href="http://">VER TODOS</a>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="nossos-cliente">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Clientes</h2>
                <h3>Nossos clientes</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="confira-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Blog</h2>
                <h3>Confira nosso blog</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores.
                </p>
            </div>
            <button class="btn-configura_blog">
                <a href="http://">ACESSAR BLOG</a>
            </button>
        </div>
    </div>
</section>

<? get_footer(); ?>