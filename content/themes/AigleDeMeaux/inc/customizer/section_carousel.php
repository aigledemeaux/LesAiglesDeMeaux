<?php
function section_carousel($wp_customize){

    $wp_customize->add_setting(
        'section_carousel_1',
        [
            'default' => ''
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'section_carousel_1',
            array(
                'label'      => __( 'Séléctionnez l\'image de la première partie du slider', 'aigleDeMeaux' ),
                'section'    => 'section_carousel',
               // 'settings'   => 'your_setting_id',
                'context'    => 'section_carousel_1' 
            )
        )
    );

    // -------------------------------

    $wp_customize->add_setting(
        'section_carousel_2',
        [
            'default' => ''
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'section_carousel_2',
            array(
                'label'      => __( 'Séléctionnez l\'image de la deuxième partie du slider', 'aigleDeMeaux' ),
                'section'    => 'section_carousel',
               // 'settings'   => 'your_setting_id',
                'context'    => 'section_carousel_2' 
            )
        )
    );

    // --------------------------------------------

    $wp_customize->add_setting(
        'section_carousel_3',
        [
            'default' => ''
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'section_carousel_3',
            array(
                'label'      => __( 'Séléctionnez l\'image de la troisième partie du slider', 'aigleDeMeaux' ),
                'section'    => 'section_carousel',
               // 'settings'   => 'your_setting_id',
                'context'    => 'section_carousel_3' 
            )
        )
    );
}