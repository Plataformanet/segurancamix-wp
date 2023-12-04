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

    //Projetos
    register_post_type(
        'projetos',
        array(
            'labels' => array(
                'name' => __('Projetos'),
                'singular_name' => __('Projeto'),
                'all_items' => __('Todos os projetos'),
                'view_item' => __('Ver projeto'),
                'add_new_item' => __('Adicionar novo projeto'),
                'edit_item' => __('Editar projeto')
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-hammer',
            'supports' => array('title', 'thumbnail', 'editor'),
            'rewrite' => array('slug' => 'cadastrar-projeto', 'with_front' => true)
        )
    );

    register_taxonomy(
        'categoria-projetos',
        array('projetos'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => _x('Categorias de projetos', 'taxonomy general name'),
                'singular_name' => _x('Categoria de projetos', 'taxonomy singular name'),
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
            'rewrite' => array('slug' => 'categoria-projetos', 'with_front' => false),
        )
    );

    //Showrooms
    register_post_type(
        'showrooms',
        array(
            'labels' => array(
                'name' => __('Showrooms'),
                'singular_name' => __('Showroom'),
                'all_items' => __('Todos os showrooms'),
                'view_item' => __('Ver showroom'),
                'add_new_item' => __('Adicionar novo showroom'),
                'edit_item' => __('Editar showroom')
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt',
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );

    //Clientes
    register_post_type(
        'clientes',
        array(
            'labels' => array(
                'name' => __('Clientes'),
                'singular_name' => __('Cliente'),
                'all_items' => __('Todos os clientes'),
                'view_item' => __('Ver cliente'),
                'add_new_item' => __('Adicionar novo cliente'),
                'edit_item' => __('Editar cliente')
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt2',
            'supports' => array('title', 'thumbnail', 'editor'),
            // 'rewrite' => array('slug' => 'nossos-clientes', 'with_front' => true)
        )
    );

    //Blog
    register_post_type(
        'blog',
        array(
            'labels' => array(
                'name' => __('Blog'),
                'singular_name' => __('Blog'),
                'all_items' => __('Todos os blogs'),
                'view_item' => __('Ver blog'),
                'add_new_item' => __('Adicionar novo blog'),
                'edit_item' => __('Editar blog')
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-media-document',
            'supports' => array('title', 'thumbnail', 'editor'),
            'rewrite' => array('slug' => 'noticia', 'with_front' => true)
        )
    );

    register_taxonomy(
        'categoria-blogs',
        array('blogs'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => _x('Categorias de blogs', 'taxonomy general name'),
                'singular_name' => _x('Categoria de blogs', 'taxonomy singular name'),
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
            'rewrite' => array('slug' => 'categoria-blogs', 'with_front' => false),
        )
    );


    //Certificados
    register_post_type(
        'certificados',
        array(
            'labels' => array(
                'name' => __('Certificados'),
                'singular_name' => __('Certificado'),
                'all_items' => __('Todos os certificados'),
                'view_item' => __('Ver certificado'),
                'add_new_item' => __('Adicionar novo certificado'),
                'edit_item' => __('Editar certificado')
            ),
            'show_in_rest' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt2',
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
