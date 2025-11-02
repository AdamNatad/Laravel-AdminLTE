@inject('layoutHelper', 'AdamNatad\LaravelAdminLte\Helpers\LayoutHelper')

@php
    /**
     * ============================================================
     *  Navbar Configuration Variables
     *  ------------------------------------------------------------
     *  This section loads dynamic configuration values from
     *  config('adminlte.*') and assigns them to PHP variables
     *  for easier reference below.
     * ============================================================
     */

    // Color configurations
    $navbarBg = config('adminlte.nt_navbar_hexbg_color_hex', '#343A40');
    $navbarTextColor = config('adminlte.nt_topnav_textcolor_color', '#ffffff');
    $navbarHoverColor = config('adminlte.nt_navbar_mobile_text_hover_color', '#00bfff');
    $mobileTextColor = config('adminlte.nt_navbar_mobile_text_color', '#ffffff');

    // Logo and text configurations
    $mobileLogo = config('adminlte.nt_navbar_mobile_logo', '/images/NatadTechBanner.svg');
    $mobileTextEnabled = config('adminlte.nt_navbar_mobile_text', false);
    $mobileTextLabel = strip_tags(config('adminlte.nt_navbar_mobile_text_label', 'NatadTech'));

    // Mobile text size and padding configuration
    $mobileTextSize = match(config('adminlte.nt_navbar_mobile_text_size')) {
        1 => '1.4rem',
        2 => '1.0rem',
        3 => '0.5rem',
        default => '1.4rem',
    };

    $mobileTextPaddingTop = match(config('adminlte.nt_navbar_mobile_text_size')) {
        1 => '3.5px',
        2 => '8.5px',
        3 => '15.5px',
        default => '3.5px',
    };
@endphp

{{-- ============================================================
     Navbar Dynamic Styling
     ------------------------------------------------------------
     The CSS below uses variables and dynamic Blade data to style
     the navbar and mobile logo/text elements based on configuration.
============================================================ --}}
<style>
/* --------------------------------------------------------------
   Root Variables
   -------------------------------------------------------------- */
:root {
    --nt-navbar-mobile-text-hover-color: {{ $navbarHoverColor }} !important;
}

/* --------------------------------------------------------------
   Mobile Brand Container
   Hidden by default and visible only on mobile viewports.
-------------------------------------------------------------- */
.mobile-brand-image-logo-reveal-container {
    display: none;
    height: 40px;
    margin-top: -2px;
    text-align: center;

    /* Flexbox centering for logo/text */
    align-items: center;
    justify-content: center;
}

/* --------------------------------------------------------------
   Mobile Brand Logo
   Background logo displayed on mobile when text is disabled.
-------------------------------------------------------------- */
.mobile-brand-image-logo-reveal-container-link {
    width: 100px;
    height: 100%;
    display: inline-block;
    background: url('{{ $mobileLogo }}') no-repeat center/contain;
}

/* --------------------------------------------------------------
   Mobile Brand Text
   Appears only if text mode is enabled in configuration.
-------------------------------------------------------------- */
.mobile-brand-image-logo-reveal-container-text {
    display: none;
    height: 100%;
    font-size: {{ $mobileTextSize }};
    font-weight: 600;
    letter-spacing: 0.5px;
    white-space: nowrap;
    padding-top: {{ $mobileTextPaddingTop }};
    color: {{ $mobileTextColor }} !important;
    transition: color 0.2s ease-in-out;
}

/* Hover color effect for brand text */
.mobile-brand-image-logo-reveal-container-text:hover {
    color: var(--nt-navbar-mobile-text-hover-color) !important;
}

/* --------------------------------------------------------------
   Navbar Link Colors
-------------------------------------------------------------- */
.main-header.navbar .nav-link {
    color: {{ $navbarTextColor }} !important;
    transition: color 0.2s ease-in-out;
}

.main-header.navbar .nav-link:hover {
    color: {{ $navbarHoverColor }} !important;
}

/* --------------------------------------------------------------
   Mobile Visibility Rules
-------------------------------------------------------------- */
@media (max-width: 991px) {
    .mobile-brand-image-logo-reveal-container,
    .mobile-brand-image-logo-reveal-container-text {
        display: flex !important;
    }
}

/* --------------------------------------------------------------
   Utility Classes
-------------------------------------------------------------- */
.nt-full-name-right {
    margin-top: -4.5px;
}
</style>

{{-- ============================================================
     Navbar Markup
     ------------------------------------------------------------
     The main navigation bar dynamically adapts colors and content
     based on the AdminLTE configuration settings.
============================================================ --}}
<nav class="main-header navbar
    {{ config('adminlte.classes_topnav_nav', 'navbar-expand') }}
    {{ config('adminlte.classes_topnav', 'navbar-white navbar-light') }}"
    {{-- Inline dynamic styling for background and text color --}}
    @if(config('adminlte.nt_navbar_hexbg_color_use', true))
        style="background-color: {{ $navbarBg }} !important; color: {{ $navbarTextColor }} !important;"
    @endif
>
    {{-- ----------------------------------------------------------
         Left Side Navigation
    ---------------------------------------------------------- --}}
    <ul class="navbar-nav">
        {{-- Left sidebar toggler button --}}
        @include('adminlte::partials.navbar.menu-item-left-sidebar-toggler')

        {{-- Mobile logo or text container --}}
        <a href="/" class="mobile-brand-image-logo-reveal-container">
            @if($mobileTextEnabled)
                {{-- Display configured mobile text --}}
                <div class="mobile-brand-image-logo-reveal-container-text {{ config('adminlte.classes_brand_text', '') }}">
                    {{ $mobileTextLabel }}
                </div>
            @else
                {{-- Display configured mobile logo --}}
                <div class="mobile-brand-image-logo-reveal-container-link"></div>
            @endif
        </a>

        {{-- Dynamic left menu items --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item')

        {{-- Custom left content section (optional) --}}
        @yield('content_top_nav_left')
    </ul>

    {{-- ----------------------------------------------------------
         Right Side Navigation
    ---------------------------------------------------------- --}}
    <ul class="navbar-nav ml-auto">
        {{-- Custom right content section (optional) --}}
        @yield('content_top_nav_right')

        {{-- Configured right-side menu items --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item')

        {{-- ------------------------------------------------------
             Authenticated User Menu
        ------------------------------------------------------ --}}
        @if(Auth::user())
            @if(config('adminlte.usermenu_enabled'))
                {{-- Dropdown user menu --}}
                @include('adminlte::partials.navbar.menu-item-dropdown-user-menu')
            @else
                {{-- Simple logout link --}}
                @include('adminlte::partials.navbar.menu-item-logout-link')
            @endif
        @endif

        {{-- ------------------------------------------------------
             Login Button for Guests
             (Only shown if login navbar is enabled and
             not in maintenance mode or error page)
        ------------------------------------------------------ --}}
        @if(!Auth::check() && !app()->isDownForMaintenance() && !app()->runningUnitTests() && !isset($exception))
            @if(config('adminlte.nt_login_navbar_enable'))
                <li class="nav-item">
                    <a class="nav-link nt-non-selectable-pointer" href="/login" style="white-space: nowrap;">
                        <div style="display: inline-flex; align-items: center;">
                            <i class="fas fa-user fa-1x fa-fw mr-1" style="margin-top: -6px;"></i>
                            <span class="nt-non-selectable-pointer" style="margin-top: -4px;">
                                {{ __('adminlte::adminlte.sign_in') }}
                            </span>
                        </div>
                    </a>
                </li>
            @endif
        @endif
    </ul>
</nav>

{{-- ============================================================
     External Stylesheet Option
     ------------------------------------------------------------
     You may optionally move this CSS to a dedicated file such as:
     - public/css/navbar.css
     and then include it via:
     <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
     or with Vite:
     @vite('resources/css/app/core/navbar.css', 'assets')
============================================================ --}}
