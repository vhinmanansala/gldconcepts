@extends('layouts.app')

@section('content')
    <div id="projects-container">
        @while($projects->have_posts()) @php($projects->the_post())
            <div class="project">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell medium-7 large-7">
                            <div class="content">
                                <h4>{{ get_the_title() }}</h4>
                                <p>{{ get_the_excerpt() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-aside pos-left">
                    <div class="image-wrap">
                        <img src="{{ get_the_post_thumbnail_url() }}">
                    </div>
                </div>
            </div>
        @endwhile @php(wp_reset_postdata())
    </div>
@endsection
