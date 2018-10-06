@extends('layouts.alternative-layout')

@section('content')
    <div class="cell medium-9 large-9">
        <div id="portfolio-page-container">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell medium-12 large-12">
                        @include('partials.page-header')

                        <div id="project-categories-container">
                            <strong>Filter projects by: </strong>

                            <select class="mobile">
                                @foreach ($project_types as $type)
                                    <option value="{{ get_term_link($type) }}">
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                            
                            <ul class="clearfix desktop">
                                @foreach ($project_types as $type)
                                    <li>
                                        <a href="{{ get_term_link($type) }}">
                                            {{ $type->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @php($counter = 1)
            
            <div id="projects">
                @while($projects->have_posts()) @php($projects->the_post())
                    @php($params = array( 'width' => 670, 'height' => 685 ))
                    @php($thumbnail = get_the_post_thumbnail_url())

                    <div class="project">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                @if ($counter % 2 == 0)
                                    <div class="cell left-content medium-10 large-10 medium-offset-4 large-offset-4">
                                @else
                                    <div class="cell right-content medium-10 large-10">
                                @endif
                                    <img class="mobile" src="{{ bfi_thumb($thumbnail, $params) }}">

                                    <div class="project-content-container">
                                        <div class="project-content">
                                            <div>
                                                <h4>{{ get_the_title() }}</h4>
                                                <p class="desktop">{!! trunc(get_the_content(), 30) !!}</p>
                                                <a href="{{ get_permalink() }}" class="buttonHover customButton">
                                                    <span>View project</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <img class="desktop" src="{{ bfi_thumb($thumbnail, $params) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @php($counter++)
                @endwhile @php(wp_reset_postdata())
            </div>
        </div>
    </div>
@endsection
