<?php

// File Security Check

if (!defined('ABSPATH')) {
	exit;
}

/* Theme demo data setup */
function xmoze_import_files()

{
    return array(
        array(

            'import_file_name' => 'Initial Setup',
            'categories' => array('Inner Pages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/initial-setup.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/initial-setup.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze',
        ),

        // Home
        array(
            'import_file_name' => 'Home',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/crypto.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/crypto.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze',

        ),

        // Startup
        array(
            'import_file_name' => 'Startup Business',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/startup.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/startup.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/startup-business',

        ),

        // Crypto Trading App
        array(
            'import_file_name' => 'Crypto Trading App',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/crypto-trading-app.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/crypto-trading-app.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/crypto-trading-app',

        ),

        // Banking
        array(
            'import_file_name' => 'Banking App',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/banking.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/banking.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/banking-app',

        ),

        // It software
        array(
            'import_file_name' => 'It Software',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/it-software.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/it-software.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/it-software',

        ),


        // Socail Marketing
        array(
            'import_file_name' => 'Social Media Marketing',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/social-media-marketing.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/marketing.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/social-media-marketing',

        ),

        // IT Service
        array(
            'import_file_name' => 'It Service',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/it-service.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/it-service.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/it-service',

        ),

        // Digital Markting
        array(
            'import_file_name' => 'Digital Marketing',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/digital-markting.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/digital-markting.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/digital-marketing',

        ),

        // Digital Agency
        array(
            'import_file_name' => 'Digital Agency',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/digital-agency.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/digital-agency.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/digital-agency',

        ),

        // Project Management
        array(
            'import_file_name' => 'Project Management',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/project-management.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/project-management.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/project-management',

        ),

        // Travel App
        array(
            'import_file_name' => 'Travel App',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/travel-app.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/travel-app.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/travel-app',

        ),

       // E book 
        array(
            'import_file_name' => 'E book',
            'categories' => array('Homepages'),
            'local_import_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/ebook.xml',
            'local_import_widget_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/widget.wie',
            'local_import_customizer_file' => trailingslashit(get_template_directory()) . 'inc/demo-contents/customizer.dat',
            'local_import_redux' => array(
                array(
                    'file_path' => trailingslashit(get_template_directory()) . 'inc/demo-contents/theme-options.json',
                    'option_name' => 'xmoze',
                ),
            ),
            'import_preview_image_url' => home_url() . '/wp-content/themes/xmoze/inc/demo-contents/previews/ebook.png',
            'import_notice' => __('After you import this demo, you will have to setup the nav menu.', 'xmoze'),
            'preview_url' => 'https://mthemeus.com/demos/wp/xmoze/ebook',

        ),

    );

}
add_filter('pt-ocdi/import_files', 'xmoze_import_files');



function ocdi_after_import($selected_import)

{
    if ('Home' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Home');
    } elseif ('Startup Business' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Startup Business');
    }elseif ('Crypto Trading App' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Crypto Trading App');
    }elseif ('Banking App' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Banking App');
    }elseif ('It Software' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('It Software');
    }elseif ('Social Media Marketing' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Social Media Marketing');
    }elseif ('It Service' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('It Service');
    }elseif ('Digital Marketing' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Digital Marketing');
    }elseif ('Digital Agency' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Digital Agency');
    }elseif ('Project Management' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Project Management');
    }elseif ('Travel App' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('Travel App');
    }elseif ('E book' === $selected_import['import_file_name']) {
        $front_page_id = get_page_by_title('E book');
    }else{
        $front_page_id = get_page_by_title('Home');
    }
    

    $main_menu = get_term_by('name', 'Main-Menu', 'nav_menu');

    set_theme_mod('nav_menu_locations', array(
        'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
    ));

    $blog_page_id  = get_page_by_title('Blog');
    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
    update_option('page_for_posts', $blog_page_id->ID);

    $elem_clear_cache = new \Elementor\Core\Files\Manager();
    $elem_clear_cache->clear_cache();
}
add_action('pt-ocdi/after_import', 'ocdi_after_import');

