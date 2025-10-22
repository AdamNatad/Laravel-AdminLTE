<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
            </ul>
        </nav>
    
        {{-- Dynamic button color styling --}}
        @if(config('adminlte.nt_sidebar_button_color_use', false))
            <style>
                /* Active link color */
                .nav-sidebar > .nav-item > .nav-link.active {
                    background-color: {{ config('adminlte.nt_sidebar_button_color_active', '#30c676') }} !important;
                    color: {{ config('adminlte.nt_sidebar_button_text_color_active', '#ffffff') }} !important;
                }
            
                /* Hover color applies only to non-active links */
                .nav-sidebar > .nav-item > .nav-link:not(.active):hover {
                    background-color: {{ config('adminlte.nt_sidebar_button_color_hover', '#299e60') }} !important;
                    color: {{ config('adminlte.nt_sidebar_button_text_color_hover', '#ffffff') }} !important;
                }
            
                /* Icon colors for active/hover states */
                .nav-sidebar > .nav-item > .nav-link.active i {
                    color: {{ config('adminlte.nt_sidebar_button_icon_color_active', '#ffffff') }} !important;
                }
                .nav-sidebar > .nav-item > .nav-link:not(.active):hover i {
                    color: {{ config('adminlte.nt_sidebar_button_icon_color_hover', '#ffffff') }} !important;
                }
            
                /* Submenu (treeview) items */
                .nav-sidebar .nav-treeview > .nav-item > .nav-link.active {
                    background-color: {{ config('adminlte.nt_sidebar_button_color_active', '#30c676') }} !important;
                    color: {{ config('adminlte.nt_sidebar_button_text_color_active', '#ffffff') }} !important;
                }
                .nav-sidebar .nav-treeview > .nav-item > .nav-link:not(.active):hover {
                    background-color: {{ config('adminlte.nt_sidebar_button_color_hover', '#299e60') }} !important;
                    color: {{ config('adminlte.nt_sidebar_button_text_color_hover', '#ffffff') }} !important;
                }
                .nav-sidebar .nav-treeview > .nav-item > .nav-link.active i {
                    color: {{ config('adminlte.nt_sidebar_button_icon_color_active', '#ffffff') }} !important;
                }
                .nav-sidebar .nav-treeview > .nav-item > .nav-link:not(.active):hover i {
                    color: {{ config('adminlte.nt_sidebar_button_icon_color_hover', '#ffffff') }} !important;
                }
            </style>
        @endif
    </div>


    {{-- Sidebar CSS --}}
    <style>
        ul.nav#mainleftmenu  {
          padding-bottom: 250px;
        }
    </style>
</aside>
