<footer id="ntFixedFooter" 
 class="sticky-footer text-white px-3 shadow-lg"
 style="position: fixed; bottom: 30px; left: 10px; right: 10px; z-index: 9999; 
        background-color: #007bff; 
        border-radius: 5px; padding-top: 10px; padding-bottom: 10px;">

    <div class="container-fluid">
        {{-- First Row --}}
        <div class="row align-items-center mb-2">
            <div class="col-auto">
                <div class="brand-image img-circle elevation-3"
                    style="background-image: url('/images/NatadTechLogoWhite.png');
                           background-size: 100% 100%;
                           background-position: center;
                           width: 33px; 
                           height: 33px; 
                           opacity: 1;">
                </div>
            </div>
            <div class="col">
                <strong>Install our App Now!</strong>
            </div>

            <div class="col-auto">
                <button id="ntFixedFooterClose" type="button" 
                    class="btn btn-sm btn-danger p-0 d-flex align-items-center justify-content-center"
                    style="border-radius: 20%; width: 26px; height: 26px;">
                    <i class="fas fa-times" style="font-size: 14px;"></i>
                </button>
            </div>

        </div>

        {{-- Second Row --}}
        <div class="row align-items-center">
            <div class="col">
                <button id="pwaInstallBtn" type="button" 
                    class="btn btn-light btn-sm text-primary w-100 w-md-auto px-4"
                    style="min-width: 120px;">
                    Install App
                </button>
            </div>
        </div>
    </div>

</footer>



{{-- NT Footer
<script>
    function hideNtFooter() {
        const footer = document.getElementById('ntFixedFooterPWA');
        const wrapper = document.querySelector('.wrapper');

        if (footer) {
            footer.style.setProperty('display', 'none', 'important');
        }

        if (wrapper) {
            wrapper.style.paddingBottom = null;
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const closeBtn = document.getElementById('ntFixedFooterClose');
        if (closeBtn) {
            closeBtn.addEventListener('click', hideNtFooter);
        }
    });

    // PWA Install Button Logic
    let deferredPrompt;
    const pwaBtn = document.getElementById('pwaInstallBtn');

    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        pwaBtn.style.display = 'inline-block';
    });

    if (pwaBtn) {
        pwaBtn.addEventListener('click', () => {
            if (deferredPrompt) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the PWA install prompt');
                    } else {
                        console.log('User dismissed the PWA install prompt');
                    }
                    deferredPrompt = null;
                });
            }
        });
    } else {
        console.log('Install button not found.');
    }
</script>
--}}