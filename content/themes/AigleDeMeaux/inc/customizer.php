<?php
if (!function_exists('aigleDeMeaux_customize_register')) {
    require('customizer/section_home.php');
    require('customizer/section_carousel.php');
    function aigleDeMeaux_customize_register($wp_customize) {
        $wp_customize->add_panel(
            'aigleDeMeaux_theme_panel',
            [
                // Titre du panel (affiché)
                'title' => 'Thème des aigles de Meaux;',
                // Description du panel (click sur (?) en haut)
                'description' => 'Aigle de Meaux Panel - Gestion du thème',
                // Emplacement
                'priority' => 1
            ]
        );

        $wp_customize->add_section(
            'section_home',
            [
                'title' => 'Section décourverte du baseball',
                'panel' => 'aigleDeMeaux_theme_panel'
            ]
        );

        section_home($wp_customize);

        $wp_customize->add_section(
            'section_carousel',
            [
                'title' => 'Carousel de la page d\'accueil',
                'panel' => 'aigleDeMeaux_theme_panel'
            ]
        );

        section_carousel($wp_customize);
}

}

add_action('customize_register', 'aigleDeMeaux_customize_register');

