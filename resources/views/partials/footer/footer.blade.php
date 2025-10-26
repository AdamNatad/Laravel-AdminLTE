<footer class="main-footer {{ config('adminlte.nt_footer_classes', '') }}">
    @yield('footer')
</footer>


@include('adminlte::partials.footer.nt-fixed-footer-pwa')


{{-- Floating Right Sidebar --}}
@include('vendor.adminlte.partials.footer.floating-right-sidebar')


