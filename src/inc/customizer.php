<?php

add_action('customize_register', function($customizer){

    //  Main setting
        //  Sections
        $customizer->add_section(
            'main_section',
            array(
                'title' => 'Основные настройки',
                'description' => 'Общие настройки темы всех страниц',
                'priority' => 1,
            )
        );
        //  Settings
        $customizer->add_setting(
            'posts_per_page',
            array()
        );
        //  Controls
        $customizer->add_control(
            'posts_per_page',
            array(
                'label' => 'Количество постов на главной странице',
                'section' => 'main_section',
                'type' => 'number',
            )
        );

    //  Header
        //  Sections
            $customizer->add_section(
                'header_section',
                array(
                    'title' => 'Шапка сайта',
                    'description' => 'Логотип, слоган, телефон, текст',
                    'priority' => 12,
                )
            );
        //  Settings
            $customizer->add_setting(
                'logo',
                array()
            );
            $customizer->add_setting(
                'header_slogan',
                array()
            );
            $customizer->add_setting(
                'header_phone',
                array()
            );
            $customizer->add_setting(
                'header_info',
                array()
            );
            $customizer->add_setting(
                'header_bg',
                array(
                    'sanitize_callback' => 'sanitize_hex_color',
                )
            );

        //  Controls
            $customizer->add_control(
                new WP_Customize_Image_Control(
                    $customizer,
                    'logo',
                    array(
                        'label'      => __( 'Загрузка изображения', 'borabora' ),
                        'section'    => 'header_section',
                        'settings'   => 'logo'
                    )
                )
            );
            $customizer->add_control(
                'header_slogan',
                array(
                    'label' => 'Слоган сайта',
                    'section' => 'header_section',
                    'type' => 'text',
                )
            );
            $customizer->add_control(
                'header_phone',
                array(
                    'label' => 'Телефон',
                    'section' => 'header_section',
                    'type' => 'text',
                )
            );
            $customizer->add_control(
                'header_info',
                array(
                    'label' => 'Текст',
                    'section' => 'header_section',
                    'type' => 'text',
                )
            );
            $customizer->add_control(
                new WP_Customize_Color_Control(
                    $customizer,
                    'header_bg',
                    array(
                        'label' => 'Цвет фона',
                        'section' => 'header_section',
                        'settings' => 'header_bg',
                    )
                )
            );

        // Banner
            //  Sections
            $customizer->add_section(
                'banner_section',
                array(
                    'title' => 'Баннер',
                    'description' => 'Информационный баннер',
                    'priority' => 13,
                )
            );
            //  Settings
            $customizer->add_setting(
                'hide_banner_section',
                array()
            );
            $customizer->add_setting(
                'banner_image',
                array()
            );
            $customizer->add_setting(
                'banner_info',
                array()
            );
            $customizer->add_setting(
                'banner_bg',
                array(
                    'sanitize_callback' => 'sanitize_hex_color',
                )
            );

            //  Controls
            $customizer->add_control(
                new WP_Customize_Control(
                    $customizer,
                    'hide_banner_section',
                    array(
                        'label'     => __('Скрыть информационный баннер', 'borabora'),
                        'section'   => 'banner_section',
                        'settings'  => 'hide_banner_section',
                        'type'      => 'checkbox'
                    )
                )
            );
            $customizer->add_control(
                new WP_Customize_Image_Control(
                    $customizer,
                    'banner_image',
                    array(
                        'label'      => __( 'Фоновое изображение', 'borabora' ),
                        'section'    => 'banner_section',
                        'settings'   => 'banner_image'
                    )
                )
            );
            $customizer->add_control(
                'banner_info',
                array(
                    'label' => 'Текст',
                    'section' => 'banner_section',
                    'type' => 'textarea',
                )
            );
            $customizer->add_control(
                new WP_Customize_Color_Control(
                    $customizer,
                    'banner_bg',
                    array(
                        'label' => 'Цвет фона',
                        'section' => 'banner_section',
                        'settings' => 'banner_bg',
                    )
                )
            );

    //  Info
        //  Sections
        $customizer->add_section(
            'info_section',
            array(
                'title' => 'Инфо блок',
                'description' => 'Общие настройки темы всех страниц',
                'priority' => 14,
            )
        );
        //  Settings
        $customizer->add_setting(
            'info_image',
            array()
        );
        $customizer->add_setting(
            'info_text',
            array()
        );
        $customizer->add_setting(
            'info_bg',
            array(
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );

        //  Controls
        $customizer->add_control(
            new WP_Customize_Image_Control(
                $customizer,
                'info_image',
                array(
                    'label'      => __( 'Иконка', 'borabora' ),
                    'section'    => 'info_section',
                    'settings'   => 'info_image'
                )
            )
        );
        $customizer->add_control(
            'info_text',
            array(
                'label' => 'Текст',
                'section' => 'info_section',
                'type' => 'textarea',
            )
        );
        $customizer->add_control(
            new WP_Customize_Color_Control(
                $customizer,
                'info_bg',
                array(
                    'label' => 'Цвет фона',
                    'section' => 'info_section',
                    'settings' => 'info_bg',
                )
            )
        );

    //  Recreation
        //  Sections
        $customizer->add_section(
            'recreation_section',
            array(
                'title' => 'Блок об отдыхе',
                'description' => '',
                'priority' => 15,
            )
        );
        //  Settings
        $customizer->add_setting(
            'recreation_image',
            array()
        );
        $customizer->add_setting(
            'recreation_title',
            array()
        );
        $customizer->add_setting(
            'recreation_text',
            array()
        );
        $customizer->add_setting(
            'recreation_bg',
            array(
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );

        //  Controls
        $customizer->add_control(
            new WP_Customize_Image_Control(
                $customizer,
                'recreation_image',
                array(
                    'label'      => __( 'Изображние', 'borabora' ),
                    'section'    => 'recreation_section',
                    'settings'   => 'recreation_image'
                )
            )
        );
        $customizer->add_control(
            'recreation_title',
            array(
                'label' => 'Заголовок',
                'section' => 'recreation_section',
                'type' => 'text',
            )
        );
        $customizer->add_control(
            'recreation_text',
            array(
                'label' => 'Текст',
                'section' => 'recreation_section',
                'type' => 'textarea',
            )
        );
        $customizer->add_control(
            new WP_Customize_Color_Control(
                $customizer,
                'recreation_bg',
                array(
                    'label' => 'Цвет фона',
                    'section' => 'recreation_section',
                    'settings' => 'recreation_bg',
                )
            )
        );

});

?>