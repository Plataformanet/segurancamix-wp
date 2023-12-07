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
                            <li class="header-nav__item"><a href="<?php echo get_site_url() ?>/sobre-nos">Sobre nós</a></li>
                            <li class="header-nav__item" id="produtos">
                                <?php
                                $parent_cat_arg = array('hide_empty' => false, 'parent' => 0);
                                $parent_cat = get_terms('categoria-produtos', $parent_cat_arg);
                                ?>
                                <a href="<?php echo get_site_url() ?>/produtos">Produtos</a>
                                <div class="megamenu" id="megamenu">
                                    <div class="megamenu-categories">
                                        <!-- <span class="megamenu-categories__title">Categorias</span> -->
                                        <ul class="megamenu-categories__list" id="list_cat">
                                            <?php
                                            foreach ($parent_cat as $cat) {
                                            ?>
                                                <li>
                                                    <a href="<?php echo get_term_link($cat->term_id, 'categoria-produtos'); ?>"><?php echo $cat->name; ?></a>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php
                                    foreach ($parent_cat as $key => $catVal) {
                                        $child_arg = array('hide_empty' => false, 'parent' => $catVal->term_id);
                                        $child_cat = get_terms('categoria-produtos', $child_arg);
                                    ?>
                                        <div class="megamenu-subcategories menu-<?php echo $key; ?>" id="menu-<?php echo $key; ?>" data-key="<?php echo $key; ?>">
                                            <!-- <span class="megamenu-subcategories__title">Subcategorias</span> -->
                                            <ul class="megamenu-subcategories__list">
                                                <?php
                                                foreach ($child_cat as $child_term) {
                                                ?>
                                                    <li>
                                                        <a href="<?php echo get_term_link($child_term->term_id, 'categoria-produtos'); ?>"><?php echo $child_term->name; ?></a>
                                                    </li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    <?php
                                    }
                                    ?>
                            </li>
                            <li class="header-nav__item"><a href="<?php echo get_site_url() ?>/showroom">Showroom</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_site_url() ?>/projetos">Projetos</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_site_url() ?>/trabalhe-conosco">Trabalhe Conosco</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_site_url() ?>/clientes">Clientes</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_site_url() ?>/blog">Blog</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_site_url() ?>/contato">Contato</a></li>
                            <li class="header-nav__item"><a href="<?php echo get_site_url() ?>/orcamento">Orçamento</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <a href="https://wa.me/5511000000" class="fixed-whatsapp" target="_blank" rel="noopener" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <main>