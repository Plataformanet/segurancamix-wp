<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600;700&display=swap" rel="stylesheet">
    <? wp_head(); ?>
</head>

<body <? body_class(); ?>>

    <header>
        <div class="header-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-contact__content">
                            <a href="tel:1145911709" class="header-contact__item" target="_blank" rel="noopener">
                                <i class="header-contact__icon icon fas fa-phone"></i>
                                <span>(11) 0000-0000</span>
                            </a>
                            <a href="mailto:contato@segurancamix.com.br" class="header-contact__item" target="_blank" rel="noopener">
                                <i class="header-contact__icon icon fas fa-envelope"></i>
                                <span>contato@segurancamix.com.br</span>
                            </a>
                            <div class="header-contact__social social">
                                <a href="" rel="noopener" target="_blank" class="social__item" title="Facebook">
                                    <i class="social__icon icon fab fa-facebook-f"></i>
                                </a>
                                <a href="" rel="noopener" target="_blank" class="social__item" title="Instagram">
                                    <i class="social__icon icon fab fa-instagram"></i>
                                </a>
                                <a href="" rel="noopener" target="_blank" class="social__item" title="LinkedIn">
                                    <i class="social__icon icon fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="header-main">
                            <div class="container">
                                <div class="logo-topo">
                                    <a href="<? bloginfo('url'); ?>" title="Segurança Mix">
                                        <img src="<? bloginfo('template_url') ?>/assets/images/logo.png" alt="Segurança Mix">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 nav_menu_principal">
                        <ul class="header-nav__list main-nav__list">
                            <li><a href="">Home</a></li>
                            <li><a href="">Sobre nós</a></li>
                            <li>
                                <a href="">Produtos</a>
                                <div class="megamenu">
                                    <div class="megamenu-categories">
                                        <span class="megamenu-categories__title">Categorias</span>
                                        <ul class="megamenu-categories__list">
                                            <li>
                                                <a href="#">Fechadura digital</a>
                                            </li>
                                            <li>
                                                <a href="#">Vidros</a>
                                            </li>
                                            <li>
                                                <a href="#">Portas</a>
                                            </li>
                                            <li>
                                                <a href="#">Passa-volumes</a>
                                            </li>
                                            <li>
                                                <a href="#">Porta documentos</a>
                                            </li>
                                            <li>
                                                <a href="#">Intercomunicador</a>
                                            </li>
                                            <li>
                                                <a href="#">Blindagem de alvenaria</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-subcategories">
                                        <span class="megamenu-subcategories__title">Categorias</span>
                                        <ul class="megamenu-subcategories__list">
                                            <li>
                                                <a href="#">Fechadura digital</a>
                                            </li>
                                            <li>
                                                <a href="#">Vidros</a>
                                            </li>
                                            <li>
                                                <a href="#">Portas</a>
                                            </li>
                                            <li>
                                                <a href="#">Passa-volumes</a>
                                            </li>
                                            <li>
                                                <a href="#">Porta documentos</a>
                                            </li>
                                            <li>
                                                <a href="#">Intercomunicador</a>
                                            </li>
                                            <li>
                                                <a href="#">Blindagem de alvenaria</a>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                            <li><a href="">Showroom</a></li>
                            <li><a href="">Projetos</a></li>
                            <li><a href="">Trabalhe Conosco</a></li>
                            <li><a href="">Clientes</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contato</a></li>
                            <li><a href="">Orçamento</a></li>
                        </ul>

                    </div>


                    <!-- 
                        <div class="row nav_menu_principal">
                            <div class="container">
                                <div class="col-md-12">
                                    <? wp_nav_menu(
                                        array(
                                            'theme_location' => 'my_main_menu',
                                            'container' => 'nav',
                                            'container_class' => 'header-nav',
                                            'menu_class' => 'header-nav__list'
                                        )
                                    );
                                    ?>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
        </div>
    </header>

    <main>