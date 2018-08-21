<div id="header-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-3 lage-3">
                <a href="{{ $site_url }}">
                    <img src="@asset('images/logo.png')">
                </a>
            </div>

            <div id="introduction-container" class="cell medium-9 large-9">
                @yield('introduction')
            </div>
        </div>
    </div>
</div>