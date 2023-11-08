<?php
function meus_posts_types()
{
    // Banners
    register_post_type(
        'banners',
        array(
            'labels' => array(
                'name' => __('Banners'),
                'singular_name' => __('Banner')
            ),
            'public' => false,
            'has_archive' => false,
            'show_ui' => true,
            'exclude_from_search' => true,
            'menu_icon' => 'dashicons-format-image',
            'supports' => array('title', 'thumbnail'),
        )
    );
    //Serviços
    register_post_type(
        'servicos',
        array(
            'labels' => array(
                'name' => __('Serviços'),
                'singular_name' => __('Serviço'),
                'all_items' => __('Todos os serviços'),
                'view_item' => __('Ver serviço'),
                'add_new_item' => __('Adicionar novo serviço'),
                'edit_item' => __('Editar serviço')
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-hammer',
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
    //Portfolios
    register_post_type(
        'portfolios',
        array(
            'labels' => array(
                'name' => __('Portfolios'),
                'singular_name' => __('Portfolio'),
                'all_items' => __('Todos os portfolios'),
                'view_item' => __('Ver portfolio'),
                'add_new_item' => __('Adicionar novo portfolio'),
                'edit_item' => __('Editar portfolio')
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt',
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );

    //Produtos
    register_post_type(
        'produtos',
        array(
            'labels' => array(
                'name' => __('Produtos'),
                'singular_name' => __('Produto'),
                'all_items' => __('Todos os produtos'),
                'view_item' => __('Ver produto'),
                'add_new_item' => __('Adicionar novo produto'),
                'edit_item' => __('Editar produto')
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-products',
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );

    register_taxonomy(
        'categoria-produtos',
        array('produtos'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => _x('Categorias de produtos', 'taxonomy general name'),
                'singular_name' => _x('Categoria de produtos', 'taxonomy singular name'),
                'search_items' => __('Procurar categoria'),
                'all_items' => __('Todos'),
                'edit_item' => __('Editar categoria'),
                'update_item' => __('Editar categoria'),
                'add_new_item' => __('Adicionar categoria'),
                'new_item_name' => __('Nova categoria')
            ),
            'show_in_rest' => true,
            'show_ui' => true,
            'query_var' => true,
            'show_in_nav_menus' => true,
            'rewrite' => array('slug' => 'categoria-produtos', 'with_front' => false),
        )
    );
}
add_action('init', 'meus_posts_types');
