<aside class="control-sidebar control-sidebar-{{ config('adminlte.right_sidebar_theme') }}">
    <style>
    /* Control Sidebar Full-Height with Padding, BELOW Navbar */
    .control-sidebar {
        position: fixed !important;
        top: 0 !important;
        right: 0;
        bottom: 0;
        height: 100vh !important;
        border-left: 1px solid rgba(255,255,255,0.1);
        z-index: 1020 !important; /* BELOW navbar (navbar is 1030) */
        color: #fff;
        overflow-y: auto;
        padding-top: 56px; /* prevent overlap with navbar */
        padding-inline: 20px;

        /* Smooth fade transition */
        transition: right .35s ease-in-out, opacity .35s ease-in-out, visibility .35s ease-in-out;
        opacity: 0;
        visibility: hidden;
    }

    /* fade in smoothly */
    .control-sidebar.control-sidebar-open,
    .control-sidebar-slide-open .control-sidebar {
        opacity: 1;
        visibility: visible;
    }

    /* Optional: scrollbar styling */
    .control-sidebar::-webkit-scrollbar {
        width: 6px;
    }
    .control-sidebar::-webkit-scrollbar-thumb {
        background: rgba(255,255,255,0.2);
        border-radius: 4px;
    }
    .control-sidebar::-webkit-scrollbar-thumb:hover {
        background: rgba(255,255,255,0.3);
    }

    /* Dynamic background color*/
    .control-sidebar-dark {
        background-color: var(--bs-dark, #343a40) !important;
    }

    .control-sidebar-light {
        background-color: var(--bs-light, #f8f9fa) !important;
        color: #212529 !important;
    }

    .control-sidebar-primary {
        background-color: var(--bs-primary, #0d6efd) !important;
    }
    </style>

    <div class="p-3 text-white d-flex flex-column h-100">
        {{-- Dynamic Header --}}
        <div class="text-center">
            <h5 class="mb-2 fw-semibold">@yield('right_sidebar_title', 'Quick Settings')</h5>
            <hr class="border-secondary mb-3">
        </div>

        {{-- Dynamic Body --}}
        <div class="flex-grow-1">
            @yield('right_sidebar')
        </div>

        {{-- Fixed Footer --}}
        <div class="mt-auto">
            <hr class="border-secondary mb-3">
            <button type="button"
                    class="btn btn-danger w-100 rounded-4 fw-semibold"
                    data-widget="control-sidebar"
                    data-slide="true">
                <i class="fas fa-times me-1"></i> Close Menu
            </button>
        </div>
    </div>
</aside>
