<div class="project desktop">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-6 large-6">
                <div class="content-container">
                    <div class="content">
                        <div>
                            <h4>{{ get_the_title() }}</h4>
                            <p>{!! trunc(get_the_content(), 30) !!}</p>

                            <a href="{{ get_permalink() }}" class="buttonHover customButton">
                                <span>View project</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="image-aside pos-left">
        <div class="image-wrap">
            <img src="{{ bfi_thumb(get_the_post_thumbnail_url(), $params) }}">
        </div>
    </div>
</div>