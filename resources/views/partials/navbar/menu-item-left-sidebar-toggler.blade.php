<li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"
        @if(config('adminlte.sidebar_collapse_remember'))
            data-enable-remember="true"
        @endif
        @if(!config('adminlte.sidebar_collapse_remember_no_transition'))
            data-no-transition-after-reload="false"
        @endif
        @if(config('adminlte.sidebar_collapse_auto_size'))
            data-auto-collapse-size="{{ config('adminlte.sidebar_collapse_auto_size') }}"
        @endif>
        <i class="fas fa-bars menu-white"></i>
        <span class="sr-only nt-non-selectable">{{ __('adminlte::adminlte.toggle_navigation') }}</span>
        {{--  
        <style>
            .menu-white {
                color: #F4F6F9; /* Default color (dim white) */
                transition: color 0.3s ease; /* Smooth transition */
            }
        
            .menu-white:hover {
                color: #343A40; /* Color on hover (light white) */
            }
        </style>
        --}}
    </a>
</li>