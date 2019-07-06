<?php
Class Result_cpt
{
    public function __construct()
    {
        // On accroche les fonctions : create_cpt() au hook init
        add_action('init', [$this, 'create_cpt']);
        add_action('init', [$this, 'create_taxonomie']);
    }

    public function create_cpt()
    {
        //Formatage du custom post type.
        $labels = [
            'name'                  => 'Résultat',
            'singular_name'         => 'Résultat',
            'menu_name'             => 'Résultats',
            'name_admin_bar'        => 'Résultats',
            'archives'              => 'Archives des résultats',
            'attributes'            => 'Attributs des résultats',
            'parent_item_colon'     => 'Element parent',
            //'all_items'             => 'Tous les résultats',
            'add_new_item'          => 'Ajouter un nouveau résultat',
            'add_new'               => 'Ajouter un nouveau résultat',
            'new_item'              => 'nouveau résultat',
            'edit_item'             => 'Editer le résultat',
            'update_item'           => 'Mettre à jour le résultat',
            'view_item'             => 'Voir le résultat',
            'view_items'            => 'Voir les résultats',
            'search_items'          => 'Rechercher les résultats',
            'not_found'             => 'Aucun résultat trouvé',
            'not_found_in_trash'    => 'Aucun résultat trouvée dans la corbeille',
            'featured_image'        => 'Image du résultat',
            'set_featured_image'    => 'Ajouter une image du résultat',
            'remove_featured_image' => 'Supprimer l\'image du résultat',
            'use_featured_image'    => 'Utiliser une image pour le résultat',
            'insert_into_item'      => 'Inserer dans les résultats',
            'uploaded_to_this_item' => 'Televerser dans les résultats',
            'items_list'            => 'Liste des résultats',
            'items_list_navigation' => 'Liste des résultats',
            'filter_items_list'     => 'Filtrer la liste des résultats',
        ];
        $args = [
            'label'                 => 'Résultat',
            'labels'                => $labels,
            //'description'           => 'Tous les résultats',
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
            'menu_icon'             => 'dashicons-chart-line',
            'has_archive'           => true,
            'rewrite'               => [
                'slug'              => 'resultat',
                'with_front'        => true
            ],
            'show_in_rest'          => true
        ];
        register_post_type('resultat', $args);      
    }

    public function create_taxonomie()
    {
        //Formatage de la taxonomie Type.
        $labels = [
            'name'                       => 'Equipe',
            'singular_name'              => 'Equipe',
            'menu_name'                  => 'Equipe',
            'all_items'                  => 'Toutes les équipes',
            'new_item_name'              => 'Nouvelle équipe',
            'add_new_item'               => 'Ajouter une équipe',
            'update_item'                => 'Mettre à jour une équipe',
            'edit_item'                  => 'Editer une équipe',
            'view_item'                  => 'Voir toutes les équipes',
            'separate_items_with_commas' => 'Séparer les équipes avec une virgule',
            'add_or_remove_items'        => 'Ajouter une supprimer un équipe',
            'choose_from_most_used'      => 'Choisir parmis les équipes les plus utilisés',
            'popular_items'              => 'Equipes populaires',
            'search_items'               => 'Rechercher une équipe',
            'not_found'                  => 'Aucune équipe trouvé',
            'items_list'                 => 'Lister les équipes',
            'items_list_navigation'      => 'Lister les équipes',
        ];
        $args = [
            'labels'                    => $labels,
            'hierarchical'              => true,
            'public'                    => true,
            'show_in_rest'              => true,
            'featured_image'        => true,
        ];
        register_taxonomy('equipe', 'resultat', $args);

        
    }

    public function activation()
    {
        $this->create_cpt();
        $this->create_taxonomie();
        flush_rewrite_rules();
    }

}