@inject('layoutHelper', 'AdamNatad\LaravelAdminLte\Helpers\LayoutHelper')

{{-- ============================================================
     Floating Right Sidebar Button (Quick Settings)
     ------------------------------------------------------------
     This component creates a floating button that toggles the
     right sidebar. The styling, positioning, and colors are
     dynamically pulled from configuration options.
============================================================ --}}
@if($layoutHelper->isRightSidebarEnabled() && config('adminlte.right_sidebar_floating', true))

@php
    /**
     * ============================================================
     *  Floating Sidebar Configuration Variables
     *  ------------------------------------------------------------
     *  All configuration values are fetched here for easy editing
     *  and maintainability. Default values are provided for safety.
     * ============================================================
     */

    // Floating wrapper z-index and positioning
    $floatZIndex = config('adminlte.right_sidebar_floating_zindex', 1034);

    // Background color of the floating button
    $floatColor = config('adminlte.right_sidebar_floating_color', 'bg-primary');
    $isHexColor = \Illuminate\Support\Str::startsWith($floatColor, '#');

    // Icon color configuration
    $iconColor = config('adminlte.right_sidebar_floating_icon_color', '#ffffff');
    $isHexIconColor = \Illuminate\Support\Str::startsWith($iconColor, '#');

    // Optional icon image or Font Awesome icon class
    $iconImage = config('adminlte.right_sidebar_floating_icon_image');
    $iconClass = config('adminlte.right_sidebar_floating_icon', 'fas fa-sliders-h');
@endphp

{{-- ============================================================
     Dynamic Styling Section
     ------------------------------------------------------------
     The inline <style> tag below uses centralized PHP variables
     to define layout and animation styles. Avoids embedding Blade
     logic inside CSS lines for better readability.
============================================================ --}}
<style>
/* --------------------------------------------------------------
   Floating Sidebar Wrapper
   - Fixed position on bottom-right of viewport
   - Z-index and animation controlled dynamically
-------------------------------------------------------------- */
#floating-sidebar-wrapper {
    position: fixed;
    bottom: 65px;
    right: 25px;
    z-index: {{ $floatZIndex }};
    opacity: 0;
    animation: fadeInFloating 0.6s ease-in forwards;
    transition: opacity 0.3s ease-in-out;
}

/* --------------------------------------------------------------
   Floating Button Base
   - Circular button with shadow and hover animation
-------------------------------------------------------------- */
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

/* --------------------------------------------------------------
   Entry Animation (fade-in from below)
-------------------------------------------------------------- */
@keyframes fadeInFloating {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

{{-- ============================================================
     Floating Sidebar Button Markup
     ------------------------------------------------------------
     The button toggles the AdminLTE control sidebar using the
     `data-widget="control-sidebar"` attribute. Configurable colors,
     icons, and themes are applied dynamically.
============================================================ --}}
<div id="floating-sidebar-wrapper">
    <button
        class="btn shadow floating-sidebar-btn {{ !$isHexColor ? $floatColor : '' }}"
        @if($isHexColor)
            style="background-color: {{ $floatColor }};"
        @endif
        data-widget="control-sidebar"
        @if(!config('adminlte.right_sidebar_slide'))
            data-controlsidebar-slide="false"
        @endif
        @if(config('adminlte.right_sidebar_scrollbar_theme', 'os-theme-light') !== 'os-theme-light')
            data-scrollbar-theme="{{ config('adminlte.right_sidebar_scrollbar_theme') }}"
        @endif
        @if(config('adminlte.right_sidebar_scrollbar_auto_hide', 'l') !== 'l')
            data-scrollbar-auto-hide="{{ config('adminlte.right_sidebar_scrollbar_auto_hide') }}"
        @endif
        title="Open Quick Settings"
    >
        {{-- Display custom image icon if defined, otherwise fallback to Font Awesome --}}
        @if($iconImage)
            <img
                src="{{ asset($iconImage) }}"
                alt="Sidebar Icon"
                style="width:22px;height:22px;"
            >
        @else
            <i class="{{ $iconClass }} {{ !$isHexIconColor ? $iconColor : '' }}"
                @if($isHexIconColor)
                    style="color: {{ $iconColor }};"
                @endif
            ></i>
        @endif
    </button>
</div>

{{-- ============================================================
     JavaScript Behavior
     ------------------------------------------------------------
     Automatically hides the floating button when the sidebar
     is open and restores it when the sidebar closes.
============================================================ --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.control-sidebar');
    const floatWrapper = document.getElementById('floating-sidebar-wrapper');

    if (sidebar && floatWrapper) {
        // Hide floating button when sidebar is visible
        sidebar.addEventListener('shown.lte.controlsidebar', () => {
            floatWrapper.style.opacity = '0';
            floatWrapper.style.pointerEvents = 'none';
        });

        // Show floating button again when sidebar closes
        sidebar.addEventListener('hidden.lte.controlsidebar', () => {
            floatWrapper.style.opacity = '1';
            floatWrapper.style.pointerEvents = 'auto';
        });
    }
});
</script>

@endif
