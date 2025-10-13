{{-- ADAM FIX --}}
{{-- Navbar notification --}}

<li class="{{ $makeListItemClass() }}" id="{{ $id }}">

    {{-- Link --}}
    <a @if($enableDropdownMode) href="" @endif {{ $attributes->merge($makeAnchorDefaultAttrs()) }}>

        {{-- Icon --}}
        <i class="{{ $makeIconClass() }}"></i>

        {{-- Badge --}}
        <span class="{{ $makeBadgeClass() }}">{{ $badgeLabel }}</span>

    </a>

    {{-- Dropdown Menu --}}
    @if($enableDropdownMode)

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            {{-- Dropdown header --}}
            <div class="dropdown-header {{ config('adminlte.nt_notification_dropdown_header_classes', '') }}">
                @if($id === 'my-notification')
                    Notifications
                @elseif($id === 'cart-dropdown')
                    My Cart
                @endif
            </div>
            
            {{-- Custom dropdown content provided by external source --}}
            <div class="adminlte-dropdown-content"></div>

            {{-- Dropdown divider --}}
            <div class="dropdown-divider"></div>

            {{-- Dropdown footer with link --}}
            <a href="{{ $attributes->get('href') }}" class="nt-non-selectable-pointer dropdown-item dropdown-footer">
                @isset($dropdownFooterLabel)
                    {{--<i class="fas fa-lg fa-search-plus fa-fw"></i> --}}

                    {{-- Check if it's the cart or notifications based on $id --}}
                    @if($id === 'cart-dropdown')
                        <i class="fas fa-lg fa-shopping-cart fa-fw"></i> {{-- Cart Icon --}}
                    @else
                        <i class="fas fa-lg fa-search-plus fa-fw"></i> {{-- Default (Notifications Icon) --}}
                    @endif

                    {{ $dropdownFooterLabel }}
                @else
                    {{-- <i class="fas fa-lg fa-search-plus fa-fw"></i> --}}

                    {{-- Use default icon if no label is set --}}
                    @if($id === 'cart-dropdown')
                        <i class="fas fa-lg fa-shopping-cart fa-fw"></i> {{-- Cart Icon --}}
                    @else
                        <i class="fas fa-lg fa-search-plus fa-fw"></i> {{-- Default (Notifications Icon) --}}
                    @endif
                @endisset
            </a>

        </div>

    @endif

</li>

{{-- If required, update the notification periodically --}}

@if (! is_null($makeUpdateUrl()) && $makeUpdatePeriod() > 0)
@push('js')
<script>

    $(() => {

        // Method to get new notification data from the configured url.

        let updateNotification = (nLink) =>
        {
            // Make an ajax call to the configured url. The response should be
            // an object with the new data. The supported properties are:
            // 'label', 'label_color', 'icon_color' and 'dropdown'.

            $.ajax({
                url: "{{ $makeUpdateUrl() }}"
            })
            .done((data) => {
                nLink.update(data);
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, textStatus, errorThrown);
            });
        };

        // First load of the notification data.

        let nLink = new _AdminLTE_NavbarNotification("{{ $id }}");
        updateNotification(nLink);

        // Periodically update the notification.

        setInterval(updateNotification, {{ $makeUpdatePeriod() }}, nLink);
    })

</script>
@endpush
@endif

{{-- Register Javascript utility class for this component --}}

@once
@push('js')
<script>

    class _AdminLTE_NavbarNotification {

        /**
         * Constructor.
         *
         * target: The id of the target notification link.
         */
        constructor(target)
        {
            this.target = target;
        }

        /**
         * Update the notification link.
         *
         * data: An object with the new data.
         */
        update(data)
        {
            // Check if target and data exists.

            let t = $(`li#${this.target}`);

            if (t.length <= 0 || ! data) {
                return;
            }

            let badge = t.find(".navbar-badge");
            let icon = t.find(".nav-link > i");
            let dropdown = t.find(".adminlte-dropdown-content");

            // Update the badge label.

            if (data.label && data.label > 0) {
                badge.html(data.label);
            } else {
                badge.empty();
            }

            // Update the badge color.
            // ADAM FIX
            if (data.label_color) {
                badge
                  // remove _all_ badge-* classes (including badge-pill and the old color)
                  .removeClass((i, cls) => {
                    return (cls.match(/\bbadge-\S+/g) || []).join(' ');
                  })
                  // then add back exactly what we want, with spaces guaranteed
                  .addClass(`badge-${data.label_color}`)
                  .addClass('badge-pill nt-non-selectable-pointer');
            }


            // Update the icon color.

            if (data.icon_color) {
                icon.removeClass((idx, classes) => {
                    return (classes.match(/(^|\s)text-\S+/g) || []).join(' ');
                }).addClass(`text-${data.icon_color}`);
            }

            // Update the dropdown content.

            if (data.dropdown && dropdown.length > 0) {
                dropdown.html(data.dropdown);
            }
        }
    }

</script>
@endpush
@endonce
