@php($params = array( 'width' => 1154, 'height' => 650 ))
@php($thumbnail = get_the_post_thumbnail_url())

<div class="desktop featured-image">
    <div class="image-aside pos-left">
        <div class="image-wrap">
            <img src="{{ bfi_thumb($thumbnail, $params) }}">
        </div>
    </div>
</div>

<div id="featured-image" class="mobile image">
    <img src="{{ bfi_thumb($thumbnail, $params) }}">
</div>

<div id="main-content">
    @include('partials.content-page')
</div>

@if ($gallery_images)
    @section('portfolio-gallery')
        <div id="portfolio-gallery-container">
            <div class="grid">
                @foreach ($gallery_images as $image)
                    <div class="grid-item">
                        <img src="{{ bfi_thumb($image['url'], $sizes[rand(0, count($sizes) - 1)]) }}">
                    </div>
                @endforeach
            </div>
        </div>
    @endsection

    @section('scripts')
        <script>
            jQuery(window).load(function() {
                jQuery('.grid').packery({
                    itemSelector: '.grid-item',
                });
            });
        </script>
    @endsection
@endif

@section('pagination')
    <div id="pagination-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-12 large-6 text-right">
                    @if (get_previous_post())
                        <div class="mobile">
                            {{ previous_post_link('%link', '<h4>Previous project</h4>') }}
                        </div>

                        <div class="desktop">
                            {{ previous_post_link('<span>Previous project</span><h4>%link</h4>') }}
                        </div>
                    @endif
                </div>

                <div class="cell medium-12 large-6 text-left">
                    @if (get_next_post())
                        <div class="mobile">
                            {{ next_post_link('%link', '<h4>Next project</h4>') }}
                        </div>

                        <div class="desktop">
                            {{ next_post_link('<span>Next project</span><h4>%link</h4>') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


