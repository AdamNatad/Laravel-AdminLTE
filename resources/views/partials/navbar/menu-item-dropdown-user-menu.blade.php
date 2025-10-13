@php
use App\Models\Auth\User;

// Get the authenticated user
$user = Auth::user();

// Load roles
//$roles = $user->roles;
$roleNames = $user->getCachedRoleNames();


// Badge class map for each role
$badgeClasses = [
    User::SUPER_ADMIN_ROLE    => 'badge-danger',
    User::MANAGER_ADMIN_ROLE  => 'badge-success',
    User::SUPPORT_ADMIN_ROLE  => 'badge-info',
    User::VIP_CLIENT_ROLE     => 'badge-warning',
    User::CLIENT_ROLE         => 'badge-primary',
];

// Resolve avatar from social account (via avatar_source)
$avatarSource = $user->avatar_source;
$avatarUrl = null;

if ($avatarSource && $user->relationLoaded('socialAccounts')) {
    $avatarUrl = $user->socialAccounts->firstWhere('provider', $avatarSource)?->avatar_url;
} elseif ($avatarSource) {
    $avatarUrl = $user->socialAccounts()->where('provider', $avatarSource)->value('avatar_url');
}

// Fallback logo
$avatarUrl = $avatarUrl ?: asset('images/NatadTechLogoWhite.png');

// Resolve profile/logout URLs
$logout_url  = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout');
$profile_url = View::getSection('profile_url') ?? config('adminlte.profile_url', 'logout');

if (config('adminlte.usermenu_profile_url', false)) {
    $profile_url = $user->adminlte_profile_url();
}

if (config('adminlte.use_route_url', false)) {
    $profile_url = $profile_url ? route($profile_url) : '';
    $logout_url  = $logout_url ? route($logout_url) : '';
} else {
    $profile_url = $profile_url ? url($profile_url) : '';
    $logout_url  = $logout_url ? url($logout_url) : '';
}
@endphp

<li class="nav-item dropdown user-menu">

    {{-- User menu toggler --}}
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        @if(config('adminlte.usermenu_image'))
            <div class="d-flex align-items-center">
                <div class="user-image img-circle elevation-2 mr-1 overflow-hidden"
                     style="width: 2.1rem; height: 2.1rem; margin-top: -8px;">
                    <img src="{{ $avatarUrl }}"
                         onerror="this.onerror=null;this.src='{{ url('images/NatadTechLogoWhite.png') }}';"
                         alt="{{ $user->name }}’s Avatar"
                         class="w-100 h-100 no-lightbox"
                         style="object-fit: cover; border-radius: 50%;">
                </div>
                <span class="d-none d-md-inline nt-full-name-right nt-non-selectable-pointer">
                    {{ $user->name }}
                </span>
            </div>

        @endif
    </a>

    {{-- User menu dropdown --}}
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="overflow-y: auto; max-height: 480px;">

        {{-- User menu header --}}
        @if(!View::hasSection('usermenu_header') && config('adminlte.usermenu_header'))
            <li class="user-header {{ config('adminlte.usermenu_header_class', 'bg-dark') }}
                @if(!config('adminlte.usermenu_image')) h-auto @endif">
                @if(config('adminlte.usermenu_image'))
                    <div class="d-flex align-items-center justify-content-center">
                        <div id="AvatarURLTopNavBarMini" class="img-circle elevation-2 overflow-hidden" style="width: 90px; height: 90px;">
                            <img src="{{ $avatarUrl }}"
                                 onerror="this.onerror=null;this.src='{{ url('images/NatadTechLogoWhite.png') }}';"
                                 alt="{{ $user->name }}’s Avatar"
                                 class="w-100 h-100 no-lightbox"
                                 style="object-fit: cover; border-radius: 50%;">
                        </div>
                    </div>
                @endif
                <p class="@if(!config('adminlte.usermenu_image')) mt-0 @endif">
                    <div class="d-flex flex-column align-items-center justify-content-center nt-non-selectable">
                        <div>{{ $user->name }}</div>
                        @foreach($roleNames as $roleName)
                            <span class="mt-2 badge {{ $badgeClasses[$roleName] ?? 'badge-secondary' }} nt-non-selectable">
                                {{ Str::title(str_replace('_', ' ', $roleName)) }}
                            </span>
                        @endforeach

                        @if(config('adminlte.usermenu_desc'))
                            <small>{{ $user->adminlte_desc() }}</small>
                        @endif
                    </div>
                </p>
            </li>
        @else
            @yield('usermenu_header')
        @endif

        {{-- User menu items --}}
        <div>
            @each('adminlte::partials.navbar.dropdown-item', $adminlte->menu("navbar-user"), 'item')
        </div>

        {{-- User menu body --}}
        @hasSection('usermenu_body')
            <li class="user-body">
                @yield('usermenu_body')
            </li>
        @endif

        {{-- User menu footer --}}
        <li class="user-footer">
            @if($profile_url)
                <a href="{{ $profile_url }}" class="btn btn-dark btn-block">
                    <i class="fa fa-fw fa-user text-white"></i>
                    {{ __('adminlte::menu.profile') }}
                </a>
            @endif
            <a class="btn btn-dark btn-block float-right @if(!$profile_url) btn-block @endif"
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off text-red"></i>
                {{ __('adminlte::adminlte.log_out') }}
            </a>
            <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
                @if(config('adminlte.logout_method'))
                    {{ method_field(config('adminlte.logout_method')) }}
                @endif
                {{ csrf_field() }}
            </form>
        </li>

    </ul>
</li>
