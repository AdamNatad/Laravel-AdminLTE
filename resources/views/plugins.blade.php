@foreach(config('adminlte.plugins') as $pluginName => $plugin)

    {{-- Check whether the plugin is active --}}
    @php
        $plugSection = View::getSection('plugins.' . ($plugin['name'] ?? $pluginName));
        $isPlugActive = $plugin['active']
            ? ! isset($plugSection) || $plugSection
            : ! empty($plugSection);

        // Determine whether this plugin should use Vite
        $pluginUsesVite = $plugin['use_vite'] ?? false;
    @endphp

    {{-- When the plugin is active, include its files --}}
    @if($isPlugActive)

        {{-- Brand-gating: if useBrand is not set/false → always include; otherwise wrap in @ntbrand --}}
        @if(empty($plugin['useBrand']))
        
            {{-- No brand gating → render files for all --}}
            @foreach($plugin['files'] as $file)

                {{-- Normalize the file location --}}
                @php
                    if (! empty($file['asset'])) {
                        // Remove leading slash for Vite, or run through asset()
                        $file['location'] = $pluginUsesVite
                            ? ltrim($file['location'], '/')
                            : asset($file['location']);
                    }
                @endphp

                {{-- Only handle CSS & JS --}}
                @if($file['type'] === $type && in_array($type, ['css','js'], true))

                    @if(! empty($file['asset']) && $pluginUsesVite)
                        {{-- Local asset → load via Vite --}}
                        @vite([$file['location']], 'assets')

                    @elseif(! empty($file['asset']))
                        {{-- Local asset → classic asset() --}}
                        @if($type === 'css')
                            <link rel="stylesheet" href="{{ $file['location'] }}">
                        @elseif($type === 'js')
                            <script src="{{ $file['location'] }}" @if(! empty($file['defer'])) defer @endif></script>
                        @endif

                    @else
                        {{-- External/CDN --}}
                        @if($type === 'css')
                            <link rel="stylesheet" href="{{ $file['location'] }}">
                        @elseif($type === 'js')
                            <script src="{{ $file['location'] }}" @if(! empty($file['defer'])) defer @endif></script>
                        @endif
                    @endif

                @endif

            @endforeach

        @else

            {{-- useBrand is true → only render when @ntbrand matches --}}
            @ntbrand($plugin['brandName'] ?? '')

                @foreach($plugin['files'] as $file)

                    {{-- Normalize the file location --}}
                    @php
                        if (! empty($file['asset'])) {
                            $file['location'] = $pluginUsesVite
                                ? ltrim($file['location'], '/')
                                : asset($file['location']);
                        }
                    @endphp

                    {{-- Only handle CSS & JS --}}
                    @if($file['type'] === $type && in_array($type, ['css','js'], true))

                        @if(! empty($file['asset']) && $pluginUsesVite)
                            {{-- Local asset → load via Vite --}}
                            @vite([$file['location']], 'assets')

                        @elseif(! empty($file['asset']))
                            {{-- Local asset → classic asset() --}}
                            @if($type === 'css')
                                <link rel="stylesheet" href="{{ $file['location'] }}">
                            @elseif($type === 'js')
                                <script src="{{ $file['location'] }}" @if(! empty($file['defer'])) defer @endif></script>
                            @endif

                        @else
                            {{-- External/CDN --}}
                            @if($type === 'css')
                                <link rel="stylesheet" href="{{ $file['location'] }}">
                            @elseif($type === 'js')
                                <script src="{{ $file['location'] }}" @if(! empty($file['defer'])) defer @endif></script>
                            @endif
                        @endif

                    @endif

                @endforeach

            @endntbrand

        @endif

    @endif

@endforeach
