<!doctype html>
<html @php language_attributes() @endphp>
    @include('partials.head')

    <body @php body_class() @endphp>
        @php do_action('get_header') @endphp

        @include('partials.menu')
    
        <div id="alternative-layout-container" class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-12 large-3">
                    <a id="logo" href="{{ $site_url }}">
                        <img src="@asset('images/logo.png')">
                    </a>
                </div>

                 @yield('content')
            </div>

            @yield('portfolio-gallery')
            @yield('pagination')
            @yield('call-to-action')
        </div>

        @yield('scripts')

        @php do_action('get_footer') @endphp
            @include('partials.footer')
        @php wp_footer() @endphp
    </body>
</html>
