<footer id="ntFixedFooterPWA"
  class="sticky-footer text-white px-3 shadow-lg"
  style="display:none;position:fixed;bottom:30px;left:10px;right:10px;z-index:9999;
         background-color:#007bff;border-radius:5px;padding:10px;">

  <div class="container-fluid">
    {{-- First Row --}}
    <div class="row align-items-center mb-2">
      <div class="col-auto">
        <div class="brand-image img-circle elevation-3"
             style="background-image:url('/images/NatadTechLogoWhite.png');
                    background-size:100% 100%;
                    background-position:center;
                    width:33px;height:33px;opacity:1;">
        </div>
      </div>
      <div class="col">
        <strong id="ntFixedFooterLabel">Install our App now!</strong>
      </div>
      <div class="col-auto">
        <button id="ntFixedFooterClose" type="button"
                class="btn btn-sm btn-danger p-0 d-flex align-items-center justify-content-center"
                style="border-radius:20%;width:26px;height:26px;">
          <i class="fas fa-times" style="font-size:14px;"></i>
        </button>
      </div>
    </div>

    {{-- Second Row --}}
    <div class="row align-items-center">
      <div class="col">
        <button id="pwaInstallBtn" type="button"
                class="btn btn-light btn-sm text-primary w-100 w-md-auto px-4"
                style="min-width:120px;"
                data-install-label="Install App"
                data-open-label="Open App">
          Install App
        </button>
      </div>
    </div>
  </div>
</footer>
