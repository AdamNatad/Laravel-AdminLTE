<style>
  #ntFixedFooterPWA {
    position: fixed;
    bottom: 30px;
    z-index: 9999;
    background-color: {{ config('adminlte.nt_install_app_footer_bgcolor', '#007bff') }};
    border-radius: 8px;
    padding: 12px;
    display: none;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  }

  @media (max-width: 500px) {
    #ntFixedFooterPWA { left: 10px; right: 10px; width: auto; }
  }
  @media (min-width: 500px) and (max-width: 991px) {
    #ntFixedFooterPWA { left: auto; right: 20px; width: 340px; }
  }
  @media (min-width: 992px) {
    #ntFixedFooterPWA { left: auto; right: 30px; width: 280px; }
  }

  #ntFixedFooterPWA .footer-header {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
  }
  #ntFixedFooterPWA .footer-header .brand {
    width: 32px;
    height: 32px;
    background-image: url('{{ config('adminlte.nt_install_app_logo') }}');
    background-size: cover;
    background-position: center;
    border-radius: 50%;
    margin-right: 8px;
  }
  #ntFixedFooterPWA .footer-header .label {
    flex: 1;
    font-size: 0.95rem;
    color: white;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  #ntFixedFooterPWA .footer-header .close-btn {
    width: 24px;
    height: 24px;
    padding: 0;
    border-radius: 15%;
    font-size: 0.8rem;
    line-height: 1;
  }
  #ntFixedFooterPWA .install-btn, .store-btn {
    width: 100%;
    padding: 6px 0;
    font-size: 0.9rem;
    border-radius: 4px;
    margin-bottom: 5px;
    text-align: center;
    white-space: nowrap;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
  }
  #ntFixedFooterPWA .btn-icon {
    width: 16px;
    height: 16px;
    vertical-align: middle;
    border-radius: 15%;
  }
</style>

<footer id="ntFixedFooterPWA">
  <div class="footer-header">
    <div class="brand"></div>
    <div class="label" id="ntFixedFooterLabel">{{ config('adminlte.nt_install_app_footer_label', 'NatadTech - Making Thins Simple') }}</div>
    <button id="ntFixedFooterClose" class="btn btn-danger btn-sm close-btn">
      <i class="fas fa-times"></i>
    </button>
  </div>

  {{-- PWA Button --}}
  @if(config('adminlte.nt_install_app_pwa_url_enabled'))
    <button id="pwaInstallBtn"
      class="{{ config('adminlte.nt_install_app_pwa_url_classes') }}"
      data-install-label="Install PWA App"
      data-open-label="Open PWA App">
      <img src="{{ config('adminlte.nt_install_app_pwa_icon') }}" alt="PWA" class="btn-icon no-lightbox">
      Install PWA App
    </button>
  @endif

  {{-- Google Play (Android) --}}
  @if(config('adminlte.nt_playstore_app_url_enabled'))
  <a href="{{ config('adminlte.nt_playstore_app_url') !== '#' ? config('adminlte.nt_playstore_app_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_playstore_app_url_classes') }}"
     @if(config('adminlte.nt_playstore_app_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_playstore_app_url_icon') }}" alt="Android" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_playstore_app_url_label') }}
  </a>
  @endif
  
  {{-- Apple App Store (iOS) --}}
  @if(config('adminlte.nt_appstore_app_url_enabled'))
  <a href="{{ config('adminlte.nt_appstore_app_url') !== '#' ? config('adminlte.nt_appstore_app_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_appstore_app_url_classes') }}"
     @if(config('adminlte.nt_appstore_app_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_appstore_app_url_icon') }}" alt="iOS" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_appstore_app_url_label') }}
  </a>
  @endif
  
  {{-- Huawei AppGallery --}}
  @if(config('adminlte.nt_appgallery_app_url_enabled'))
  <a href="{{ config('adminlte.nt_appgallery_app_url') !== '#' ? config('adminlte.nt_appgallery_app_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_appgallery_app_url_classes') }}"
     @if(config('adminlte.nt_appgallery_app_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_appgallery_app_url_icon') }}" alt="Huawei" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_appgallery_app_url_label') }}
  </a>
  @endif
  
  {{-- Steam --}}
  @if(config('adminlte.nt_steam_url_enabled'))
  <a href="{{ config('adminlte.nt_steam_url') !== '#' ? config('adminlte.nt_steam_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_steam_url_classes') }}"
     @if(config('adminlte.nt_steam_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_steam_url_icon') }}" alt="Steam" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_steam_url_label') }}
  </a>
  @endif
  
  {{-- Epic Games --}}
  @if(config('adminlte.nt_epic_url_enabled'))
  <a href="{{ config('adminlte.nt_epic_url') !== '#' ? config('adminlte.nt_epic_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_epic_url_classes') }}"
     @if(config('adminlte.nt_epic_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_epic_url_icon') }}" alt="Epic Games" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_epic_url_label') }}
  </a>
  @endif
  
  {{-- Xbox --}}
  @if(config('adminlte.nt_xbox_url_enabled'))
  <a href="{{ config('adminlte.nt_xbox_url') !== '#' ? config('adminlte.nt_xbox_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_xbox_url_classes') }}"
     @if(config('adminlte.nt_xbox_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_xbox_url_icon') }}" alt="Xbox" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_xbox_url_label') }}
  </a>
  @endif
  
  {{-- PlayStation --}}
  @if(config('adminlte.nt_playstation_url_enabled'))
  <a href="{{ config('adminlte.nt_playstation_url') !== '#' ? config('adminlte.nt_playstation_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_playstation_url_classes') }}"
     @if(config('adminlte.nt_playstation_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_playstation_url_icon') }}" alt="PlayStation" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_playstation_url_label') }}
  </a>
  @endif
  
  {{-- Nintendo Switch --}}
  @if(config('adminlte.nt_nintendo_url_enabled'))
  <a href="{{ config('adminlte.nt_nintendo_url') !== '#' ? config('adminlte.nt_nintendo_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_nintendo_url_classes') }}"
     @if(config('adminlte.nt_nintendo_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_nintendo_url_icon') }}" alt="Nintendo Switch" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_nintendo_url_label') }}
  </a>
  @endif
  
  {{-- GOG --}}
  @if(config('adminlte.nt_gog_url_enabled'))
  <a href="{{ config('adminlte.nt_gog_url') !== '#' ? config('adminlte.nt_gog_url') : 'javascript:void(0)' }}"
     target="_blank"
     class="{{ config('adminlte.nt_gog_url_classes') }}"
     @if(config('adminlte.nt_gog_url') === '#') style="pointer-events: none; opacity: 0.9;" @endif>
      <img src="{{ config('adminlte.nt_gog_url_icon') }}" alt="GOG" class="btn-icon no-lightbox">
      {{ config('adminlte.nt_gog_url_label') }}
  </a>
  @endif


</footer>
