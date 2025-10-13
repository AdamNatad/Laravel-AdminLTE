@extends('adminlte::master')

@inject('layoutHelper', 'AdamNatad\LaravelAdminLte\Helpers\LayoutHelper')
@inject('preloaderHelper', 'AdamNatad\LaravelAdminLte\Helpers\PreloaderHelper')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', $layoutHelper->makeBodyClasses())

@section('body_data', $layoutHelper->makeBodyData())

@section('body')
    <div class="wrapper">

        {{-- Preloader Animation (fullscreen mode) --}}
        @if($preloaderHelper->isPreloaderEnabled())
            @include('adminlte::partials.common.preloader')
        @endif

        {{-- Top Navbar --}}
        @if($layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.navbar.navbar-layout-topnav')
        @else
            @include('adminlte::partials.navbar.navbar')
        @endif

        {{-- Left Main Sidebar --}}
        @if(!$layoutHelper->isLayoutTopnavEnabled())
            @include('adminlte::partials.sidebar.left-sidebar')
        @endif

        {{-- Content Wrapper --}}
        @empty($iFrameEnabled)
            @include('adminlte::partials.cwrapper.cwrapper-default')
        @else
            @include('adminlte::partials.cwrapper.cwrapper-iframe')
        @endempty

        {{-- Footer --}}
        @hasSection('footer')
            @include('adminlte::partials.footer.footer')
        @endif

        {{-- Right Control Sidebar --}}
        @if($layoutHelper->isRightSidebarEnabled())
            @include('adminlte::partials.sidebar.right-sidebar')
        @endif

    </div>
@stop

@section('adminlte_js')
    {{-- NT Footer PWA Start --}}
    {{-- Console Dev Tools: deleteCookie('pwaFooterClosedAt'); --}}
    <script>
      window.nt_protocol_scheme_brand = 'web+{{ NTBrand::current() ?? 'natadtech' }}';
      console.log('PWA Protocol Scheme:', window.nt_protocol_scheme_brand);
    </script>

    {{-- Load the correct PWA JS based on the brand --}}
    <script src="{{ url('/assets/core/pwa.js') }}"></script>
    {{-- 
    @ntbrand('natadtech')
        @vite('resources/js/app/core/ntfooter-pwa-natadtech.js', 'assets')
    @endntbrand
    
    @ntbrand('fortifyte')
    @vite('resources/js/app/core/ntfooter-pwa-fortifyte.js', 'assets')
    @endntbrand
     --}}
    {{-- NT Footer PWA End --}}
    
    {{-- Live Chat --}}
    
    @ntbrand('natadtech')
    {{-- Start of Tawk.io Embed Code --}}
      @if (auth()->check())
        <script type="text/javascript">
          var Tawk_API = Tawk_API || {};
          Tawk_API.visitor = {
            name: "{{ addslashes(auth()->user()->name ?? 'NoName User') }}",
            email: "{{ addslashes(auth()->user()->email ?? 'no-email@natadtech.com') }}",
            hash: "{{ $hash ?? '' }}"
          };
        </script>
      @else
        <script type="text/javascript">
          var Tawk_API = Tawk_API || {};
          // Guest mode — use Tawk pre-chat form settings
          //console.log("Tawk loaded in guest mode");
        </script>
      @endif
    
      <script type="text/javascript">
        window.addEventListener("load", function () {
          var s1 = document.createElement("script"),
              s0 = document.getElementsByTagName("script")[0];
          s1.async = true;
          s1.src = 'https://embed.tawk.to/68050693dafe3e190b111708/1ip9q3cq4';
          s1.charset = 'UTF-8';
          s1.setAttribute('crossorigin', '*');
          s0.parentNode.insertBefore(s1, s0);
        });
      </script>
    {{-- End of Tawk.io Embed Code --}}
    @endntbrand


    {{-- Live Chat --}}
    {{-- Start of HubSpot Embed Code --}}
    {{-- <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/43906444.js"></script>  --}}
    {{-- End of HubSpot Embed Code --}}
    
    {{-- Custom JS Scripts --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> --}}
    
    {{-- Disable Right Click JS Script --}}
    {{-- <script src="{{ asset('js/drc.js') }}"></script> --}}
    
    {{-- Include the PWA Install Prompt JS file Start --}}
    {{-- Register the PWA service worker --}}
    <script>
        if ('serviceWorker' in navigator) {
          window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js', { scope: '/' })
              .then(registration => {
                console.log('Service Worker registered with scope:', registration.scope);
              })
              .catch(error => {
                console.error('Service Worker registration failed:', error);
              });
          });
        }
    </script>
    {{-- Include the PWA Install Prompt JS file End --}} 
    
    {{-- <script async defer src="{{ asset('js/chatmod.js') }}"></script> --}}

    @stack('js')
    @yield('js')
@stop
