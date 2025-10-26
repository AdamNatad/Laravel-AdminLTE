@inject('layoutHelper', 'AdamNatad\LaravelAdminLte\Helpers\LayoutHelper')

<style>
/* Root variables */
:root {
    --nt-navbar-mobile-text-hover-color: {{ config('adminlte.nt_navbar_mobile_text_hover_color', '#00bfff') }} !important;
}

/* Container for image or text (hidden by default) */
.mobile-brand-image-logo-reveal-container {
    display: none;
    height: 40px;
    margin-top: -2px;
    text-align: center;

    /* Flex centering for content */
    align-items: center;
    justify-content: center;

    /*
    width: auto;
   
    
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
  
    width: 100px;
    */
}

/* Logo image background */
.mobile-brand-image-logo-reveal-container-link {
    width: 100px;
    height: 100%;
    display: inline-block;
    background: url('{{ config('adminlte.nt_navbar_mobile_logo', '/images/NatadTechBanner.svg') }}') no-repeat center/contain;
}

/* Brand text display (when logo is disabled) */
.mobile-brand-image-logo-reveal-container-text {
    display: none;
    height: 100%;

    font-size: {{
        config('adminlte.nt_navbar_mobile_text_size') == 1 ? '1.4rem' :
        (config('adminlte.nt_navbar_mobile_text_size') == 2 ? '1.0rem' :
        (config('adminlte.nt_navbar_mobile_text_size') == 3 ? '0.5rem' : '1.4rem'))
    }};

    font-weight: 600;
    letter-spacing: 0.5px;
    white-space: nowrap;

    padding-top: {{
        config('adminlte.nt_navbar_mobile_text_size') == 1 ? '3.5px' :
        (config('adminlte.nt_navbar_mobile_text_size') == 2 ? '8.5px' :
        (config('adminlte.nt_navbar_mobile_text_size') == 3 ? '15.5px' : '3.5px'))
    }};

    padding-left: 0px;
    color: {{ config('adminlte.nt_navbar_mobile_text_color', '#ffffff') }} !important;
    transition: color 0.2s ease-in-out;
}

/* Hover effect from config */
.mobile-brand-image-logo-reveal-container-text:hover {
    color: var(--nt-navbar-mobile-text-hover-color) !important;
}

/* Topnav link colors */
.main-header.navbar .nav-link {
    color: {{ config('adminlte.nt_topnav_textcolor_color', '#ffffff') }} !important;
}

.main-header.navbar .nav-link:hover {
    color: {{ config('adminlte.nt_topnav_textcolor_hover', '#00bfff') }} !important;
}

/* IDJOT DONT USE THIS THIS IS FOR MENU LINKS BOGO ADAM
.main-header.navbar .dropdown-menu a {
    color: {{ config('adminlte.nt_topnav_textcolor_color', '#ffffff') }} !important;
}

.main-header.navbar .dropdown-menu a:hover {
    color: {{ config('adminlte.nt_topnav_textcolor_hover', '#00bfff') }} !important;
}
*/

/* Make it visible on mobile screens only */
@media (max-width: 991px) {
    .mobile-brand-image-logo-reveal-container {
        display: flex !important;
    }

    .mobile-brand-image-logo-reveal-container-text {
        display: flex !important;
    }
}

.nt-full-name-right {
    margin-top: -4.5px;
}
</style>

<nav class="main-header navbar
    {{ config('adminlte.classes_topnav_nav', 'navbar-expand') }}
    {{ config('adminlte.classes_topnav', 'navbar-white navbar-light') }}"
    {{-- Navbar Changebackground color here --}}
    @if(config('adminlte.nt_navbar_hexbg_color_use', true) || config('adminlte.nt_topnav_textcolor_handle', false))
        style="
            {{ config('adminlte.nt_navbar_hexbg_color_use', true) ? 'background-color: ' . config('adminlte.nt_navbar_hexbg_color_hex', '#343A40') . ' !important;' : '' }}
            {{ config('adminlte.nt_topnav_textcolor_handle', false) ? 'color: ' . config('adminlte.nt_topnav_textcolor_color', '#ffffff') . ' !important;' : '' }}
        "
    @endif
>
    {{-- Navbar left links --}}
    <ul class="navbar-nav">
        {{-- Left sidebar toggler link --}}
        @include('adminlte::partials.navbar.menu-item-left-sidebar-toggler')

        {{-- Mobile Image Reveal Container --}}
        <a href="/" class="mobile-brand-image-logo-reveal-container">
            @if(config('adminlte.nt_navbar_mobile_text', false))
                <div class="mobile-brand-image-logo-reveal-container-text {{ config('adminlte.classes_brand_text', '') }}">
                    {{ strip_tags(config('adminlte.nt_navbar_mobile_text_label', 'NatadTech')) }}
                </div>
            @else
                <div class="mobile-brand-image-logo-reveal-container-link"></div>
            @endif
        </a>

        {{-- Configured left links --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item')

        {{-- Custom left links --}}
        @yield('content_top_nav_left')
    </ul>

    {{-- Navbar right links --}}
    <ul class="navbar-nav ml-auto">
        {{-- Custom right links --}}
        @yield('content_top_nav_right')

        {{-- Configured right links --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item')

        {{-- User menu link --}}
        @if(Auth::user())
            @if(config('adminlte.usermenu_enabled'))
                @include('adminlte::partials.navbar.menu-item-dropdown-user-menu')
            @else
                @include('adminlte::partials.navbar.menu-item-logout-link')
            @endif
        @endif

        {{-- Right sidebar toggler link --}} 
        {{-- MOVED TO FOOTER AS FLOATING BUTTON
        @if($layoutHelper->isRightSidebarEnabled())
            @include('adminlte::partials.navbar.menu-item-right-sidebar-toggler')
        @endif
         --}}
         
        {{-- Add this conditional to show "Login" button to non-logged-in users and hide "Login" button on error pages--}}
        @if(!Auth::check() && !app()->isDownForMaintenance() && !app()->runningUnitTests() && !isset($exception))
            <li class="nav-item">
                @if(config('adminlte.nt_login_navbar_enable'))
                    <a class="nav-link nt-non-selectable-pointer" href="/login" style="white-space: nowrap;">
                        <div style="display: inline-flex; align-items: center;">
                            <i class="fas fa-circle-user fa-2x fa-fw" style="margin-top: -6px;"></i>
                            {{-- Hidden Login Text --}}
                            <span class="nt-non-selectable-pointer" style="margin-top: -4px;">
                                {{ __('adminlte::adminlte.sign_in') }}
                            </span>
                        </div>
                    </a>
                @endif
            </li>
        @endif
    </ul>
</nav>

{{-- Mobile Image Reveal Container CSS 
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
@vite('resources/css/app/core/navbar.css', 'assets')
--}}
