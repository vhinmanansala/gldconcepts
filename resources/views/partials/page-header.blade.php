<div class="page-header">
    <h1>{!! App::title() !!}</h1>

    @if (get_post_type() == 'project')
        @if ($link)
            <a href="{{ $link }}" class="buttonHover customButton" target="_blank">
                <span>Visit page</span>
            </a>
        @endif
    @endif
</div>
