<?php
Class Actualite_cpt
{
    public function __construct()
    {
        // On accroche les fonctions : create_cpt() et create_taxonomie() au hook init
        add_action('init', [$this, 'create_cpt']);
        add_action('init', [$this, 'create_taxonomie']);
    }

    public function create_cpt()
    {
        //Formatage du custom post type.
        $labels = [
            'name'                  => 'Actualité',
            'singular_name'         => 'Actualité',
            'menu_name'             => 'Actualités',
            'name_admin_bar'        => 'Actualités',
            'archives'              => 'Archives des actualités',
            'attributes'            => 'Attributs des actualités',
            'parent_item_colon'     => 'Element parent',
            'all_items'             => 'Toutes les actualités',
            'add_new_item'          => 'Ajouter une nouvelle actualité',
            'add_new'               => 'Ajouter un nouvelle actualité',
            'new_item'              => 'Nouvelle actualité',
            'edit_item'             => 'Editer l\'actualité',
            'update_item'           => 'Mettre à jour l\'actualité',
            'view_item'             => 'Voir l\'actualité',
            'view_items'            => 'Voir les actualités',
            'search_items'          => 'Rechercher les actualités',
            'not_found'             => 'Aucune actualité trouvé',
            'not_found_in_trash'    => 'Aucune actualité trouvée dans la corbeille',
            'featured_image'        => 'Image de l\'actualité',
            'set_featured_image'    => 'Ajouter une image de l\'actualité',
            'remove_featured_image' => 'Supprimer l\'image de l\'actualité',
            'use_featured_image'    => 'Utiliser une image pour l\'actualité',
            'insert_into_item'      => 'Inserer dans les actualités',
            'uploaded_to_this_item' => 'Televerser dans les actualités',
            'items_list'            => 'Liste des actualités',
            'items_list_navigation' => 'Liste des actualités',
            'filter_items_list'     => 'Filtrer la liste d\'actualités',
        ];
        $args = [
            'label'                 => 'Actualité',
            'labels'                => $labels,
            'description'           => 'Toutes les actualités',
            'supports'              => [
                'title',
                'author',
                'editor',
                'thumbnail',
                'custom-fields',
                'revisions',
                'excerpt'
            ],
            'hierarchical'          => false,
            'public'                => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-admin-post',
            'has_archive'           => true,
            'rewrite'               => [
                'slug'              => 'actualite',
                'with_front'        => true
            ],
            'show_in_rest'          => true
        ];
        register_post_type('actualite', $args);
        
        
    }

    public function create_taxonomie()
    {
        //Formatage de la taxonomie Type.
        $labels = [
            'name'                       => 'Catégories',
            'singular_name'              => 'Catégorie',
            'menu_name'                  => 'Catégorie',
            'all_items'                  => 'Toutes les catégories',
            'new_item_name'              => 'Nouvelle catégorie',
            'add_new_item'               => 'Ajouter une catégorie',
            'update_item'                => 'Mettre à jour une catégorie',
            'edit_item'                  => 'Editer une catégorie',
            'view_item'                  => 'Voir toutes les catégories',
            'separate_items_with_commas' => 'Séparer les catégories avec une virgule',
            'add_or_remove_items'        => 'Ajouter une supprimer un catégorie',
            'choose_from_most_used'      => 'Choisir parmis les catégories les plus utilisés',
            'popular_items'              => 'Catégories populaires',
            'search_items'               => 'Rechercher une catégorie',
            'not_found'                  => 'Aucune catégorie trouvé',
            'items_list'                 => 'Lister les catégories',
            'items_list_navigation'      => 'Lister les catégories',
        ];
        $args = [
            'labels'                    => $labels,
            'hierarchical'              => true,
            'public'                    => true,
            'show_in_rest'              => true,
            'featured_image'        => true,
        ];
        register_taxonomy('categorie', 'actualite', $args);

        
    }

    public function activation()
    {
        $this->create_cpt();
        $this->create_taxonomie();
        flush_rewrite_rules();
    }


}