<?php

use App\Models\Auth\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'NatadTech',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => true,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>NatadTech</b>',
    /*'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',*/
    'logo_img' => 'images/NatadTechLogoWhite.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => '',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => true,
        'img' => [
            /*'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',*/
            'path' =>  'images/NatadTechLogoTransparent.png',
            'alt' => 'NatadTech',
            'class' => '',
            'width' => 100,
            'height' => 100,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => false,
        'mode' => 'fullscreen',
        'img' => [
            /*'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',*/
            'path' =>  'images/NatadTechLogoWTextTransparent.png',
            'alt' => 'NatadTech',
            'effect' => 'animation__nt',
            'width' => 441,
            'height' => 441,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-dark',
    'usermenu_image' => true,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => ['xs' => false, 'sm' => false, 'md' => true, 'lg' => true, 'xl' => true, '2xl' => true,],
    //'layout_fixed_footer' => ['xs' => false, 'sm' => false, 'md' => false, 'lg' => false, 'xl' => false, '2xl' => false,],
    'layout_dark_mode' => false,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'bg-gradient-light card-outline card-dark',
    'classes_auth_header' => '',
    'classes_auth_body' => 'bg-gradient-dark',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => 'fa-fw text-light',
    'classes_auth_btn' => 'btn-block btn-light btn-sm nt-login-resize',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-primary',
    'classes_brand_text' => 'font-weight-bold text-white',
    'classes_content_wrapper' => 'nt-wrapper-class',
    'classes_content_header' => '',
    'classes_content' => 'nt-content-center',
    'classes_sidebar' => 'bg-dark sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => 'nav-compact',
    //Handles the Text Color Icon - Opposites
    'classes_topnav' => 'navbar-dark navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',
    
    /* Added Code By Adam Natad */

    //Enable Login Button
    'nt_login_navbar_enable' => true,

    // Manually handle text color
    'nt_topnav_textcolor_handle' => true,
    'nt_topnav_textcolor_color' => '#CCCECF',
    'nt_topnav_textcolor_hover' => '#FFFFFF',
    
    /* Mobile Logo 1024x199 24BPP SVG */
    'nt_navbar_mobile_logo' => '/images/NatadTechBanner.svg',

    //Enable Mobile Text - set to false to use image
    'nt_navbar_mobile_text' => true, 

    /*Limit Size Characters
    * 1,2,3
    * 1 = best for below 10 chars including spaces
    * 2 = best for below 13 chars including spaces
    * 3 = best for below 23 chars including spaces
    */
    'nt_navbar_mobile_text_size' => 1, 
    
    'nt_navbar_mobile_text_label' => 'NatadTech', 
    'nt_navbar_mobile_text_color' => '#CCCECF',
    'nt_navbar_mobile_text_hover_color' => '#FFFFFF',

    // BG Color of Top Nav
    'nt_navbar_hexbg_color_use' => false,
    'nt_navbar_hexbg_color_hex' => '#343A40',

    'nt_notification_dropdown_header_classes' => 'bg-dark nt-non-selectable',
    'nt_footer_classes' => 'bg-dark',

    /* Footer Install Banner */
    // Fixed Footer Label Text
    'nt_install_app_footer_label' => 'NatadTech - Making Things Simple',

    // Fixed Footer Background Color
    'nt_install_app_footer_bgcolor' => '#007bff',

    // Fixed Footer Main App Logo
    'nt_install_app_logo' => '/images/NatadTechLogoWhite.png',

    // PWA Install Button
    'nt_install_app_pwa_url_enabled' => true,
    'nt_install_app_pwa_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_install_app_pwa_icon' => '/assets/images/pwapps_icons/natadtech-icon.svg',

    // Google Play Store Button
    'nt_playstore_app_url' => 'https://play.google.com/store/apps/dev?id=5039670977633641397',
    'nt_playstore_app_url_enabled' => true,
    'nt_playstore_app_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_playstore_app_url_icon' => '/assets/images/pwapps_icons/playstore-icon.svg',
    'nt_playstore_app_url_label' => 'Check Our Android Apps',

    // Apple App Store Button
    'nt_appstore_app_url' => 'https://apps.apple.com/us/app/foodmonkey/id6443700981',
    'nt_appstore_app_url_enabled' => false,
    'nt_appstore_app_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_appstore_app_url_icon' => '/assets/images/pwapps_icons/appstore-icon.svg',
    'nt_appstore_app_url_label' => 'Check iOS Apps',

    // Huawei AppGallery Button
    'nt_appgallery_app_url' => 'https://apps.apple.com/us/app/foodmonkey/id6443700981',
    'nt_appgallery_app_url_enabled' => false,
    'nt_appgallery_app_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_appgallery_app_url_icon' => '/assets/images/pwapps_icons/appgallery-icon.svg',
    'nt_appgallery_app_url_label' => 'Check Huawei Apps',

    // Steam Button
    'nt_steam_url' => 'https://store.steampowered.com/app/xxxxxxx/fortifyte/',
    'nt_steam_url_enabled' => false,
    'nt_steam_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_steam_url_icon' => '/assets/images/pwapps_icons/steam-icon.svg',
    'nt_steam_url_label' => 'View on Steam',

    // Epic Games Button
    'nt_epic_url' => 'https://store.epicgames.com/p/fortifyte',
    'nt_epic_url_enabled' => false,
    'nt_epic_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_epic_url_icon' => '/assets/images/pwapps_icons/epicgames-icon.svg',
    'nt_epic_url_label' => 'View on Epic Games',

    // Xbox Button
    'nt_xbox_url' => 'https://www.xbox.com/en-US/games/store/fortifyte/xxxxxxxx',
    'nt_xbox_url_enabled' => false,
    'nt_xbox_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_xbox_url_icon' => '/assets/images/pwapps_icons/xbox-icon.svg',
    'nt_xbox_url_label' => 'View on Xbox',

    // PlayStation Button
    'nt_playstation_url' => 'https://store.playstation.com/en-us/product/xxxxxxxx',
    'nt_playstation_url_enabled' => false,
    'nt_playstation_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_playstation_url_icon' => '/assets/images/pwapps_icons/playstation-icon.svg',
    'nt_playstation_url_label' => 'View on PlayStation',

    // Nintendo Switch Button
    'nt_nintendo_url' => 'https://www.nintendo.com/store/products/fortifyte-switch/',
    'nt_nintendo_url_enabled' => false,
    'nt_nintendo_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_nintendo_url_icon' => '/assets/images/pwapps_icons/nintendo-icon.svg',
    'nt_nintendo_url_label' => 'View on Nintendo Switch',

    // GOG Button
    'nt_gog_url' => 'https://www.gog.com/game/fortifyte',
    'nt_gog_url_enabled' => false,
    'nt_gog_url_classes' => 'btn btn-light install-btn text-primary',
    'nt_gog_url_icon' => '/assets/images/pwapps_icons/gog-icon.svg',
    'nt_gog_url_label' => 'View on GOG',



    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-dark',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'logout_method' => 'POST',
    'login_url' => 'login',
    
    /* This is just for the Login Form URL Buttons Not The Actual Routes*/
    'register_url' => 'register',
    'password_reset_url' => 'forgot-password',
    'password_email_url' => 'password/email',
    'profile_url' => 'account',

    /* 'register_url' => false /*'register', */
    /* 'password_reset_url' => false /*'password/reset', */
    /* 'password_email_url' => false /*'password/email', */
    /* 'profile_url' => false, */

    /*
    |--------------------------------------------------------------------------
    | Laravel Asset Bundling
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Asset Bundling option for the admin panel.
    | Currently, the next modes are supported: 'mix', 'vite' and 'vite_js_only'.
    | When using 'vite_js_only', it's expected that your CSS is imported using
    | JavaScript. Typically, in your application's 'resources/js/app.js' file.
    | If you are not using any of these, leave it as 'false'.
    |
    | For detailed instructions you can look the asset bundling section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    //'laravel_asset_bundling' => false,
    'laravel_asset_bundling' => 'adamnatad',
    // Define paths for CSS and JS
    //'laravel_css_path' => 'resources/scss/app.scss',
    //'laravel_js_path'  => 'resources/js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        //Navbar items:

        //Nav Search Base
        /*
        [
            'type'         => 'navbar-search',
            'text'         => 'search for anything...',        // Placeholder for the underlying input.
            'topnav_right' => true,            // Or "topnav => true" to place on the left.
            'url'          => 'search/', // The url used to submit the data ('#' by default).
            'method'       => 'post',          // 'get' or 'post' ('get' by default).
            'input_name'   => 'searchVal',     // Name for the underlying input ('adminlteSearch' by default).
            'id'           => 'navbarSearch',   // ID attribute for the underlying input (optional).
        ],
        */

        //Nav Search Custom
        /*
        [
            'type' => 'navbar-search',
            'text' => 'Search blog...',
            'topnav_right' => true,             // or 'topnav' => true if you want it on the left
            'method' => 'get',
            'route' => 'nt.gsearch',            // uses your existing controller
            'input_name' => 'q',                // important: Google CSE uses "q"
            'id' => 'navbarSearch',             // optional ID
        ],
        */

        //Languages 
        /*
        [
            'text' => '',
            'topnav_right' => true,
            'icon' => 'flag-icon flag-icon-us',
            'classes'     => 'nt-non-selectable-pointer',
            'submenu' => [
                [
                    'text'=>'English',
                    'icon' => 'flag-icon flag-icon-us',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                [
                    'text'=>'Filipino',
                    'icon' => 'flag-icon flag-icon-ph',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                [
                    'text'=>'Español',
                    'icon' => 'flag-icon flag-icon-es',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                [
                    'text'=>'Русский',
                    'icon' => 'flag-icon flag-icon-ru',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                [
                    'text'=>'অসমীয়া ভাষা',
                    'icon' => 'flag-icon flag-icon-in',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                [
                    'text'=>'اردو',
                    'icon' => 'flag-icon flag-icon-pk',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                [
                    'text'=>'বাংলা',
                    'icon' => 'flag-icon flag-icon-bd',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                [
                    'text'=>'မြန်မာ',
                    'icon' => 'flag-icon flag-icon-mm',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                [
                    'text'=>'普通话',
                    'icon' => 'flag-icon flag-icon-cn',
                    'classes'     => 'nt-non-selectable-pointer',
                    'url'=> '#'
                ],
                
            ]
        ],
        */
        
        //Notification:
        [
            'type'         => 'navbar-notification',
            //'key'          => 't-navbar-notification',
            'id'           => 'my-notification',      // An ID attribute (required).
            'icon'         => 'fas fa-bell',          // A font awesome icon (required).
            //'icon_color'   => 'light',              // The initial icon color (optional).
            'icon_color'   => '',              // The initial icon color (optional).
            //'label'        => 4,                      // The initial label for the badge (optional).
            'label_color'  => 'primary',               // The initial badge color (optional).
            'url'          => 'notifications/show',   // The url to access all notifications/elements (required).
            'topnav_right' => true,                   // Or "topnav => true" to place on the left (required).
            'dropdown_mode'   => true,                // Enables the dropdown mode (optional).
            'dropdown_flabel' => 'See All', // The label for the dropdown footer link (optional).
            'update_cfg'   => [
                'url' => 'notifications/get',         // The url to periodically fetch new data (optional).
                'period' => 30,                       // The update period for get new data (in seconds, optional).
            ],
            'can'         => 'logged-in-users',
        ],

        //My Cart
        [
            'type'         => 'navbar-notification',         // Use the notification format to create a dropdown.
            //'key'          => 't-navbar-cart',                // A unique key for the cart.
            'id'           => 'cart-dropdown',               // A unique ID for the cart.
            'icon'         => 'fas fa-shopping-cart',        // Font Awesome icon for the cart.
            //'icon_color'   => 'light',                       // Optional initial icon color.
            'icon_color'   => '',                       // Optional initial icon color.
            'label'        => 3,                            // Initial label for the badge (e.g., number of items).
            'label_color'  => 'success',                      // Color of the badge.
            'url'          => 'cart',                        // URL that leads to the cart page.
            'topnav_right' => true,                          // This places it on the right side of the navbar.
            'dropdown_mode' => true,                         // Enables dropdown functionality.
            'dropdown_flabel' => 'View Cart',                // Footer label for the dropdown.
            'update_cfg'   => [
                'url' => 'cart/get',                         // URL to periodically fetch cart data.
                'period' => 30,                              // Update interval for fetching new cart data in seconds.
            ],
            'can'         => 'logged-in-users',              // Ensure it’s only visible for logged-in users.
        ],

        
        // FullScreen Widget
        /*
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],
        */

        //My Products
        [
            'text'        => 'My Products',
            'url'         => '/account/products',
            'active' => ['/account/products'],
            'icon'        => 'fas fa-folder-grid fa-fw',
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
            'classes'  => 'ntdd-item nt-non-selectable-pointer',
            'topnav_user' => true,
        ],

        //My Tickets
        [
            'text'        => 'My Tickets',
            'url'         => '/account/tickets',
            'active' => ['/account/tickets'],
            'icon'        => 'fas fa-tickets fa-fw',
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
            'classes'  => 'ntdd-item nt-non-selectable-pointer',
            'topnav_user' => true,
        ],

        //My Requests
        [
            'text'        => 'My Requests',
            'url'         => '/account/requests',
            'active'      => ['/account/requests'],
            'icon'        => 'fas fa-folder-tree fa-fw',
            /*
            'label'       => 'Coming Soon', 
            'label_color' => 'success',
            */
            'classes'     => 'ntdd-item nt-non-selectable-pointer',
            'topnav_user' => true,
        ],

        //Transactions
        [
            'text'        => 'Transaction History',
            'url'         => '/account/transactions',
            'active' => ['/account/transactions'],
            'icon'        => 'fas fa-file-invoice fa-fw',
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
            'classes'  => 'ntdd-item nt-non-selectable-pointer',
            'topnav_user' => true,
        ], 

        //Sidebar items:
        
        //Mini Tagline
        [
            'header'   => 'NatadTech Solutions OPC',
            'classes'  => 'text-bold text-center text-uppercase p-2 rounded-pill underline-text nt-non-selectable',
            'key'         => 'h-subheader-name',
        ],

        //Menu Search Base
        /*
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Search',
        ],
        */

        //Menu Search Custom
        [
            'type' => 'sidebar-custom-search',
            'key'     => 'sidebar-custom-search',
            'text' => 'Search',
            //'route' => 'nt.gsearch', // You already have this controller/route
            'url' => '/search',  // absolute internal path
            'method' => 'get',
            'input_name' => 'q',     // So you get it via $request->input('q')
            'id' => 'sidebarSearch',
        ],
        

        //Home
        [
            'text'        => 'Home',
            'key'         => 'home',
            'url'         => '/',
            'icon'        => 'fas fa-desktop fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'active' => ['/']

            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */

        ],
        
        //Blog
        [
            'text'        => 'Blog',
            'key'         => 'blog',
            'url'         => '/blog',
            'icon'        => 'fas fa-newspaper fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'In-Development', 
            'label_color' => 'primary',
            */
            'active' => ['/blog/*']
        ],

        //E-Store  
        [
            'header'   => 'E-Store',
            'key'         => 'h-e-store',
            'classes'  => 'nt-non-selectable text-bold text-center underline-text-full text-uppercase p-0 mx-2 mt-2 mb-2',
        ],

        //Books
        [
            'text'        => 'Books',
            'key'         => 'books',
            'url'         => '#',
            'icon'        => 'fas fa-books fa-fw ',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Coming Soon', 
            'label_color' => 'blue-nt',
            */   
            'active' => ['/books']
        ],

        //Solutions
        [
            'text'        => 'Solutions',
            'key'         => 'solutions',
            'url'         => '/solutions',
            'icon'        => 'fas fa-microchip fa-fw ',
            'classes'     => 'nt-non-selectable-pointer',
            //'role'        => [User::CLIENT_ROLE, User::VIP_CLIENT_ROLE],
            //'can'         => 'client-only-hard',
            /*
            'label'       => 'In-Development', 
            'label_color' => 'primary',
            */
            'active' => ['/solutions/*']
        ],

        //Modules
        [
            'text'        => 'Modules',
            'key'         => 'modules',
            'url'         => '/modules',
            'icon'        => 'fas fa-puzzle-piece-simple fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            //'role'        => [User::CLIENT_ROLE, User::VIP_CLIENT_ROLE],
            //'can'         => 'client-only-hard',
            /*
            'label'       => 'In-Development', 
            'label_color' => 'primary', 
            */
            'active' => ['/modules']
        ],

        //Services
        [
            'text'        => 'Services',
            'key'         => 'services',
            'url'         => '/services',
            'icon'        => 'fas fa-fw fa-briefcase',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Hiatus', 
            'label_color' => 'danger',
            */
            'active' => ['/services']
        ],

        //WP Plugins
        [
            'text'        => 'WP-Plugins',
            'key'         => 'wp-plugins',
            'url'         => '#',
            'icon'        => 'fas fa-tools fa-fw ',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Coming Soon', 
            'label_color' => 'blue-nt',
            */   
            'active' => ['/wp-plugins']
        ],
        
        //Games
        [
            'text'        => 'Games',
            'key'         => 'games',
            'url'         => '#',
            'icon'        => 'fas fa-gamepad-modern fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Coming Soon', 
            'label_color' => 'blue-nt', 
            */   
            'active' => ['/games']
        ],
        // GameDev Tools
        [
            'text'        => 'GameDev Tools',
            'key'         => 'gamedev_tools',
            'url'         => '#',
            'icon'        => 'fas fa-game-board-simple fa-fw', // You can choose another icon if you want
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Coming Soon',
            'label_color' => 'blue-nt',
            */
            'active'      => ['/gamedev-tools'],
        ],
        //NatadTech Cloud Console - CloudWays API
        [
            'header'   => 'NatadTech Cloud Console',
            'key'         => 'h-ncc',
            'classes'  => 'nt-non-selectable text-bold text-center underline-text-full text-uppercase p-0 mx-2 mt-4 mb-2',
        ],

        //Domains
        [
           'text'    => 'Domains',
           'key'     => 'domains',
           'icon'    => 'fas fa-globe fa-fw',
           'classes' => 'nt-non-selectable-pointer',
           'submenu' => [
                [
                    'text'    => 'Overview',
                    'url'     => '/cc/domains/overview',
                    'active'  => ['/cc/domains/overview'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Register Domain',
                    'url'     => '/cc/domains/register',
                    'active'  => ['/cc/domains/register'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Domain Manager',
                    'url'     => '/cc/domains/manager',
                    'active'  => ['/cc/domains/manager'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
           ],
        ],
 
        //Server Deployment
        [
           'text'    => 'Server Deployment',
           'key'     => 'server-deployment',
           'icon'    => 'fas fa-database fa-fw',
           'classes' => 'nt-non-selectable-pointer',
           'submenu' => [
                [
                    'text'    => 'Overview',
                    'url'     => '/cc/servers/overview',
                    'active'  => ['/cc/servers/overview'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Deploy Server',
                    'url'     => '/cc/servers/deploy',
                    'active'  => ['/cc/servers/deploy'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Manage Servers',
                    'url'     => '/cc/servers/manage',
                    'active'  => ['/cc/servers/manage'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Server Billing',
                    'url'     => '/cc/servers/billing',
                    'active'  => ['/cc/servers/billing'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
           ],
        ],

        //API Deployment
        [
           'text'    => 'API Deployment',
           'key'     => 'api-deployment',
           'icon'    => 'fas fa-plug fa-fw',
           'classes' => 'nt-non-selectable-pointer',
           'submenu' => [
                [
                    'text'    => 'Overview',
                    'url'     => '/cc/apis/overview',
                    'active'  => ['/cc/apis/overview'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Deploy API',
                    'url'     => '/cc/apis/deploy',
                    'active'  => ['/cc/apis/deploy'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Maps API',
                    'url'     => '/cc/apis/maps',
                    'active'  => ['/cc/apis/maps'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Chats API',
                    'url'     => '/cc/apis/chats',
                    'active'  => ['/cc/apis/chats'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Media API',
                    'url'     => '/cc/apis/media',
                    'active'  => ['/cc/apis/media'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'API Billing',
                    'url'     => '/cc/apis/billing',
                    'active'  => ['/cc/apis/billing'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
           ],
        ],
 

        //App Deployment
        [
           'text'    => 'App Deployment',
           'key'     => 'app-deployment',
           'icon'    => 'fas fa-box-open fa-fw',
           'classes' => 'nt-non-selectable-pointer',
           'submenu' => [
                [
                    'text'    => 'Overview',
                    'url'     => '/cc/apps/overview',
                    'active'  => ['/cc/apps/overview'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Deploy App',
                    'url'     => '/cc/apps/deploy',
                    'active'  => ['/cc/apps/deploy'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Manage Apps',
                    'url'     => '/cc/apps/manage',
                    'active'  => ['/cc/apps/manage'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Back-Up / Restore',
                    'url'     => '/cc/apps/backup',
                    'active'  => ['/cc/apps/backup'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
           ],
        ],

        //Mobile App Builder
        [
           'text'    => 'Mobile App Builder',
           'key'     => 'mobile-app-builder',
           'icon'    => 'fas fa-mobile-alt fa-fw',
           'classes' => 'nt-non-selectable-pointer',
           'submenu' => [
                [
                    'text'    => 'Overview',
                    'url'     => '/cc/mobile-builder/overview',
                    'active'  => ['/cc/mobile-builder/overview'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'New Build',
                    'url'     => '/cc/mobile-builder/new',
                    'active'  => ['/cc/mobile-builder/new'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'Manage Builds',
                    'url'     => '/cc/mobile-builder/manage',
                    'active'  => ['/cc/mobile-builder/manage'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'App Editor',
                    'url'     => '/cc/mobile-builder/editor',
                    'active'  => ['/cc/mobile-builder/editor'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
                [
                    'text'    => 'App Builder Billing',
                    'url'     => '/cc/mobile-builder/billing',
                    'active'  => ['/cc/mobile-builder/billing'],
                    'classes' => 'nt-non-selectable-pointer',
                ],
           ],
        ],



        // Help Center  
        [
            'header'   => 'Help Center',
            'key'      => 'h-help-center',
            'classes'  => 'nt-non-selectable text-bold text-center underline-text-full text-uppercase p-0 mx-2 mt-4 mb-2',
        ],

        //Documentations
        [
            'text'        => 'Documentations',
            'key'         => 'documentations',
            'url'         => '/documentations',
            'icon'        => 'fas fa-book fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'active' => ['/documentations'],
            /*
            'label'       => 'Pending', 
            'label_color' => 'warning',
            
            'submenu' => [
                [
                    'text' => 'FoodMonkey',
                    'icon' => 'fas fa-monkey fa-fw',
                    'url'  => 'https://foodmonkey-docs.natadtech.com/',
                    'target' => '_blank',
                ],
            ],
            */
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            'route' => 'mk',
            'active' => ['/documentation']
            */
        ],
        
        //Questions
        [
            'text'    => 'Questions',
            'key'     => 'questions',
            'url'     => '#', 
            'icon'    => 'fas fa-fw fa-messages-question',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Coming Soon', 
            'label_color' => 'blue-nt',
            */
            'active' => ['/questions',]
        ],

        //Information Header 
        [
            'header'   => 'Information',
            'key'      => 'h-information',
            'classes'  => 'nt-non-selectable text-bold text-center underline-text-full text-uppercase p-0 mx-2 mt-2 mb-2',
        ],

        //About
        [
            'text'        => 'About',
            'key'         => 'about',
            'icon'        => 'fas fa-fw fa-address-card',
            'classes'     => 'nt-non-selectable-pointer',
            'url'         => '/about',
            'active' => ['/about',]
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
        ],

        //Policies
        [
            'text'        => 'Policies',
            'key'         => 'policies',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-file-contract',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
            'url'     => '/policies', 
            'active'  => ['/policies', '/privacy-policy', '/terms-of-service', '/cookie-policy', '/refund-policy', '/dmca-policy', '/community-guidelines', '/trademark'], 
        ],

        //Privacy Policy - Direct
        [
            'text'        => 'Privacy Policy',
            'key'         => 'privacy-policy',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-file-contract',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
            'url'     => '/privacy-policy', 
            'active'  => ['/privacy-policy'], 
        ],

        //Terms of Service - Direct
        [
            'text'        => 'Terms of Service',
            'key'         => 'terms-of-service',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-file-contract',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
            'url'     => '/terms-of-service', 
            'active'  => ['/terms-of-service'], 
        ],

        //Trademark - Direct
        [
            'text'        => 'Trademark',
            'key'         => 'trademark',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-scroll',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
            'url'     => '/trademark', 
            'active'  => ['/trademark'], 
        ],

        //Contact
        [
            'text'        => 'Contact',
            'key'         => 'contact',
            'url'         => '#',
            'icon'        => 'fas fa-fw fa-address-book',
            'classes'     => 'nt-non-selectable-pointer',
            /*
            'label'       => 'Home', 
            'label_color' => 'warning',
            */
            'url'     => '/contact', 
            'active'  => ['/contact'], 
        ],

        //Support Panel   
        [
            'header'   => 'Support Panel',
            'key'      => 'h-support-panel',
            'can'      => 'all-admin-roles',
            'classes'  => 'nt-non-selectable text-bold text-center underline-text-full text-uppercase p-0 mx-2 mt-2 mb-2',
        ],

        //Bugs
        [
            'text'    => 'Bug Reports',
            'key'     => 'bugs',
            'icon'    => 'fas fa-bug fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'all-admin-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE, User::SUPPORT_ADMIN_ROLE],
            'url'     => '/cp/bugs', 
            'active'  => ['/cp/bugs/*', '/cp/bugs/'], 
        ],

        //Help Tickets
        [
            'text'    => 'Help Tickets',
            'key'     => 'help-tickets',
            'icon'    => 'fas fa-tickets fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'all-admin-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE, User::SUPPORT_ADMIN_ROLE],
            'url'     => '/cp/help-tickets', 
            'active'  => ['/cp/help-tickets/*', '/cp/help-tickets/'], 
        ],

        //Help Center
        [
            'text'    => 'Help Center',
            'key'     => 'help-center',
            'icon'    => 'fas fa-folder-open fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'all-admin-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE, User::SUPPORT_ADMIN_ROLE],
            'url'     => '/cp/help-center', 
            'active'  => ['/cp/help-center/*', '/cp/help-center/'], 
        ],
        
        //Control Panel   
        [
            'header'   => 'Control Panel',
            'key'      => 'h-control-panel',
            'can'      => 'all-admin-roles',
            'classes'  => 'nt-non-selectable text-bold text-center underline-text-full text-uppercase p-0 mx-2 mt-2 mb-2',
        ],
        
        //Posts
        [
            'text'    => 'Posts',
            'key'     => 'posts',
            'icon'    => 'fas fa-chalkboard-teacher fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'all-admin-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE, User::SUPPORT_ADMIN_ROLE],
            //'url'     => '/cp/posts', 
            //'active'  => ['/cp/posts/*', '/cp/posts/'], 
            'submenu' => [
                [
                    'text' => 'All Posts',
                    'url'  => '/cp/posts',
                    'classes'     => 'nt-non-selectable-pointer',
                    'active'  => ['/cp/posts/', '/cp/posts/show/*'], 
                ],
                [
                    'text' => 'Add New Post',
                    'url'  => '/cp/posts/create',
                    'classes'     => 'nt-non-selectable-pointer',
                    'active'  => ['/cp/posts/create'], 
                ],
                [
                    'text' => 'Post Category',
                    'url'  => '/cp/posts/categories',
                    'classes'     => 'nt-non-selectable-pointer',
                    'active'  => ['/cp/posts/categories'], 
                ],
            ],
        ],

        //Images
        [
            'text'    => 'Images',
            'key'     => 'images',
            'icon'    => 'fas fa-image fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'all-admin-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE, User::SUPPORT_ADMIN_ROLE],
            'url'     => '/cp/images', 
            'active'  => ['/cp/images/*', '/cp/images/'], 
        ],

        //Resources
        [
            'text'    => 'Resources',
            'key'     => 'resources',
            'icon'    => 'fas fa-download fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'all-admin-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE, User::SUPPORT_ADMIN_ROLE],
            'url'     => '/cp/resources', 
            'active'  => ['/cp/resources/*', '/cp/resources/'], 
        ],

        //Products
        [
            'text'    => 'Products',
            'key'     => 'products',
            'icon'    => 'fas fa-browser fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'super-and-manager-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE],
            'submenu' => [
                [
                    'text' => 'All Products',
                    'url'  => '/cp/products',
                    'classes'     => 'nt-non-selectable-pointer',
                    'active'  => ['/cp/products/', '/cp/products/show/*'], 
                ],
                [
                    'text' => 'Add New Product',
                    'url'  => '/cp/products/create',
                    'classes'     => 'nt-non-selectable-pointer',
                    'active'  => ['/cp/products/create'], 
                ],
                [
                    'text' => 'Product Category',
                    'url'  => '/cp/products/categories',
                    'classes'     => 'nt-non-selectable-pointer',
                    'active'  => ['/cp/products/categories'], 
                ],
            ],
            //'url'     => '/cp/products', 
            //'active'  => ['/cp/products/*', '/cp/products/'], 
        ],

        //Information
        [
            'text'    => 'Information',
            'key'     => 'information',
            'icon'    => 'fas fa-memo-circle-info fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'super-and-manager-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE],
            'url'     => '/cp/information', 
            'active'  => ['/cp/information/*', '/cp/information/'], 
        ],
        
        // Users
        [
            'text'    => 'Users',
            'key'     => 'users',
            'icon'    => 'fas fa-users fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'super-admin-only',
            'role'        => [User::SUPER_ADMIN_ROLE,],
            'url'     => '/cp/users', 
            'active'  => ['/cp/users/*', '/cp/users/'], 
        ],

        // Purchase Codes
        [
            'text'    => 'Purchase Codes',
            'key'     => 'purchase-codes',
            'icon'    => 'fas fa-file-certificate fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'super-and-manager-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE],
            'url'     => '/cp/purchasecodes', 
            'active'  => ['/cp/purchasecodes/*', '/cp/purchasecodes/'], 
        ],

        //Payments
        [
            'text'    => 'Payments',
            'key'     => 'payments',
            'icon'    => 'fas fa-credit-card-front fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'super-and-manager-roles',
            'role'        => [User::SUPER_ADMIN_ROLE, User::MANAGER_ADMIN_ROLE],
            'url'     => '/cp/payments', 
            'active'  => ['/cp/payments/*', '/cp/payments/'], 
        ],

        //Settings
        [
            'text'    => 'Settings',
            'key'     => 'settings',
            'icon'    => 'fas fa-gears fa-fw',
            'classes'     => 'nt-non-selectable-pointer',
            'can'         => 'super-admin-only',
            'role'        => [User::SUPER_ADMIN_ROLE,],
            'url'     => '/cp/settings', 
            'active'  => ['/cp/settings/*', '/cp/settings/'], 
        ],
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        AdamNatad\LaravelAdminLte\Menu\Filters\GateFilter::class,
        AdamNatad\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        AdamNatad\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        AdamNatad\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        AdamNatad\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        AdamNatad\LaravelAdminLte\Menu\Filters\LangFilter::class,
        AdamNatad\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */
    
    'plugins' => [
        'Axios' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/axios.min.js',
                ],
            ],
        ],

        'TinyMCE' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/resources/js/app/core/ntce.js',
                ],
            ],
        ],

        'NT Console Message' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/resources/js/app/core/ntm.js',
                ],
            ],
        ],

        'Datatables' => [
            'active' => false,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],

        'Select2 JS' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/select2.min.js',
                ],
            ],
        ],

        'Select2 CSS' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/select2/css/select2.min.css',
                ],
            ],
        ],

        'Chartjs' => [
            'active' => false,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],

        'Sweetalert2' => [
            'active' => false,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],

        'Pace CSS - NatadTech' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => true,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/pace-progress/themes/natadtech/flash-blue.css',
                ],
            ],
        ],

        'Pace CSS - FortiFyte' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => true,
            'brandName' => 'fortifyte',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/pace-progress/themes/natadtech/flash-ff.css',
                ],
            ],
        ],

        'Pace JS' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/pace.min.js',
                ],
            ],
        ],

        'Toastr JS' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/toastr.min.js',
                ],
            ],
        ],

        'Toastr CSS' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/toastr/toastr.css',
                ],
            ],
        ],
        
        'Flag Icon Css' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/flag-icon-css/css/flag-icons.min.css',
                ],
            ],
        ],

        'iCheck Bootstrap' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/icheck-bootstrap/icheck-bootstrap.min.css',
                ],
            ],
        ],

        'NatadTech Custom CSS' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => true,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/css/app/core/nt.css',
                ],
            ],
        ],

        'FortiFyte Custom CSS' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => true,
            'brandName' => 'fortifyte',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/css/app/core/ntff.css',
                ],
            ],
        ],

        'FastClick' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/fastclick.min.js',
                ],
            ],
        ],

        'Moment JS' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/moment.min.js',
                ],
            ],
        ],

        'Ekko Lightbox CSS' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/ekko-lightbox/ekko-lightbox.css',
                ],
            ],
        ],

        'Ekko Lightbox JS' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/ekko-lightbox.min.js',
                ],
            ],
        ],

        'Date Range Picker CSS' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/daterangepicker/daterangepicker.css',
                ],
            ],
        ],

        'Date Range Picker JS' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/daterangepicker.min.js',
                ],
            ],
        ],

        'Bootstrap Colorpicker CSS' => [
            'active' => true,
            'use_vite' => true,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '/resources/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
                ],
            ],
        ],

        'Bootstrap Colorpicker JS' => [
            'active' => true,
            'use_vite' => false,
            'useBrand'  => false,
            'brandName' => 'natadtech',  
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/core/bootstrap-colorpicker.min.js',
                ],
            ],
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => false,
            'close_all' => false,
            'close_all_other' => false,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => false,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/AdamNatad/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];