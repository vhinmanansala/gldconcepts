@extends('layouts.alternative-layout')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div class="cell medium-9 large-9">
            <div id="portfolio-detail-container">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell medium-12 large-12">
                            @include('partials.page-header')

                            @include('partials.'.get_post_type())
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endwhile
@endsection
