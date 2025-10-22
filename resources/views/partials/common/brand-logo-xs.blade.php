@inject('layoutHelper', 'AdamNatad\LaravelAdminLte\Helpers\LayoutHelper')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

<a href="{{ $dashboard_url }}"
    @if($layoutHelper->isLayoutTopnavEnabled())
        class="navbar-brand {{ config('adminlte.classes_brand') }}"
    @else
        class="brand-link {{ config('adminlte.classes_brand') }}"
        @if(config('adminlte.nt_top_sidebar_hexbg_color_use'))
            style="background-color: {{ config('adminlte.nt_top_sidebar_hexbg_color_hex') }} !important;"
        @endif
    @endif>

    {{-- Small brand logo NT IMPROVED Original Opacity: .8--}}
    <div class="{{ config('adminlte.logo_img_class', 'brand-image img-circle elevation-3') }}"
        style="background-image: url('{{ asset(config('adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}');
        background-size: 100% 100%;
        background-position: center;
        width: 33px;
        height: 33px;
        opacity: 1;"
        alt="{{ config('adminlte.logo_img_alt', 'AdminLTE') }}"></div>
        
    {{-- Brand text --}}
    <span class="brand-text nt-non-selectable-pointer font-weight-light {{ config('adminlte.classes_brand_text') }}">
        {!! config('adminlte.logo', '<b>NatadTech</b>') !!}
    </span>

</a>
