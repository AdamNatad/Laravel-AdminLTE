@inject('layoutHelper', 'AdamNatad\LaravelAdminLte\Helpers\LayoutHelper')

@if($layoutHelper->isRightSidebarEnabled() && config('adminlte.right_sidebar_floating', true))
<div id="floating-sidebar-wrapper">
    <style>
        #floating-sidebar-wrapper {
            position: fixed;
            bottom: 25px;
            right: 25px;
            z-index: {{ config('adminlte.right_sidebar_floating_zindex', 1020) }};
            opacity: 0;
            animation: fadeInFloating 0.6s ease-in forwards;
            transition: opacity 0.3s ease-in-out;
        }

        .floating-sidebar-btn {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease-in-out;
        }

        .floating-sidebar-btn:hover {
            transform: scale(1.1);
        }

        @keyframes fadeInFloating {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    @php
        $floatColor = config('adminlte.right_sidebar_floating_color', 'bg-primary');
        $isHexColor = \Illuminate\Support\Str::startsWith($floatColor, '#');

        $iconColor = config('adminlte.right_sidebar_floating_icon_color', '#ffffff');
        $isHexIconColor = \Illuminate\Support\Str::startsWith($iconColor, '#');
    @endphp

    <button
        class="btn shadow floating-sidebar-btn {{ !$isHexColor ? $floatColor : '' }}"
        @if($isHexColor)
            style="background-color: {{ $floatColor }};"
        @endif
        data-widget="control-sidebar"
        @if(!config('adminlte.right_sidebar_slide'))
            data-controlsidebar-slide="false"
        @endif
        @if(config('adminlte.right_sidebar_scrollbar_theme', 'os-theme-light') != 'os-theme-light')
            data-scrollbar-theme="{{ config('adminlte.right_sidebar_scrollbar_theme') }}"
        @endif
        @if(config('adminlte.right_sidebar_scrollbar_auto_hide', 'l') != 'l')
            data-scrollbar-auto-hide="{{ config('adminlte.right_sidebar_scrollbar_auto_hide') }}"
        @endif
        title="Open Quick Settings">

        @if(config('adminlte.right_sidebar_floating_icon_image'))
            <img src="{{ asset(config('adminlte.right_sidebar_floating_icon_image')) }}"
                 alt="Sidebar Icon"
                 style="width:22px;height:22px;">
        @else
            <i class="{{ config('adminlte.right_sidebar_floating_icon', 'fas fa-sliders-h') }} {{ !$isHexIconColor ? $iconColor : '' }}"
                @if($isHexIconColor)
                    style="color: {{ $iconColor }};"
                @endif></i>
        @endif
    </button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.control-sidebar');
    const floatWrapper = document.getElementById('floating-sidebar-wrapper');

    if (sidebar && floatWrapper) {
        sidebar.addEventListener('shown.lte.controlsidebar', () => {
            floatWrapper.style.opacity = '0';
            floatWrapper.style.pointerEvents = 'none';
        });

        sidebar.addEventListener('hidden.lte.controlsidebar', () => {
            floatWrapper.style.opacity = '1';
            floatWrapper.style.pointerEvents = 'auto';
        });
    }
});
</script>
@endif
