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
        <div class="header">
            <div class="header-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-contact__content">
                                <a href="tel:1145911709" class="header-contact__item" target="_blank" rel="noopener">
                                    <i class="header-contact__icon icon fas fa-phone"></i>
                                    <span>(11) 0000-0000</span>
                                </a>
                                <div class="d-none d-md-block">
                                    <a href="mailto:contato@segurancamix.com.br" class="header-contact__item" target="_blank" rel="noopener">
                                        <i class="header-contact__icon icon fas fa-envelope"></i>
                                        <span>contato@segurancamix.com.br</span>
                                    </a>
                                </div>
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
            <div class="row header-main align-items-center" id="header">
                <div class="logo-topo">
                    <a href="<? bloginfo('url'); ?>" title="Segurança Mix">
                        <img src="<? bloginfo('template_url') ?>/assets/images/logo.png" alt="Segurança Mix">
                    </a>
                    <div class="header-nav__btn">
                        <div class="header-nav__icon">
                            <div class="header-nav__icon-bar header-nav__icon-bar--1"></div>
                            <div class="header-nav__icon-bar header-nav__icon-bar--2"></div>
                            <div class="header-nav__icon-bar header-nav__icon-bar--3"></div>
                        </div>
                        <!-- <span>Menu</span> -->
                    </div>
                </div>
                <div class="nav_menu_principal">
                    <nav class="header-nav" id="header-nav">
                        <ul class="header-nav__list main-nav__list" id="menu_list">
                            <li class="header-nav__item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_page_link(10); ?>">Sobre nós</a></li>
                            <li class="header-nav__item" id="produtos">
                                <a href="<?php echo get_page_link(12); ?>">Produtos</a>
                                <div class="megamenu">
                                    <div class="megamenu-categories">
                                        <span class="megamenu-categories__title">Categorias</span>
                                        <ul class="megamenu-categories__list" id="list_cat">
                                            <li id="link-menu-0">
                                                <a href="#">Fechadura digital</a>
                                            </li>
                                            <!-- <li id="link-menu-1">
                                                        <a href="#">Vidros</a>
                                                    </li> -->
                                            <li id="link-menu-1">
                                                <a href="#">Portas</a>
                                            </li>
                                            <!-- <li id="link-menu-3">
                                                        <a href="#">Passa-volumes</a>
                                                    </li>
                                                    <li id="link-menu-4">
                                                        <a href="#">Porta documentos</a>
                                                    </li>
                                                    <li id="link-menu-5">
                                                        <a href="#">Intercomunicador</a>
                                                    </li>
                                                    <li id="link-menu-6">
                                                        <a href="#">Blindagem de alvenaria</a>
                                                    </li> -->
                                        </ul>
                                    </div>
                                    <div class="megamenu-subcategories menu-0" id="menu-0" data-key="0">
                                        <span class="megamenu-subcategories__title">Subcategorias</span>
                                        <ul class="megamenu-subcategories__list">
                                            <li>
                                                <a href="#">Fechadura 01</a>
                                            </li>
                                            <li>
                                                <a href="#">Fechadura 02</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-subcategories menu-1" id="menu-1" data-key="1">
                                        <span class="megamenu-subcategories__title">Subcategorias</span>
                                        <ul class="megamenu-subcategories__list">
                                            <li>
                                                <a href="#">Porta blindada</a>
                                            </li>
                                            <li>
                                                <a href="#">Porta Antiarrombamento</a>
                                            </li>
                                        </ul>
                                    </div>
                            </li>
                            <li class="header-nav__item"><a href="<?php echo get_page_link(14); ?>">Showroom</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_page_link(16); ?>">Projetos</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_page_link(18); ?>">Trabalhe Conosco</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_page_link(20); ?>">Clientes</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_page_link(22); ?>">Blog</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_page_link(24); ?>">Contato</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_page_link(26); ?>">Orçamento</a></li>
                        </ul>
                    </nav>
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

    </header>
    <a href="" class="fixed-whatsapp" target="_blank" rel="noopener" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <main>