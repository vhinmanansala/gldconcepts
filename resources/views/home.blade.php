{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('introduction')
    <div id="introduction-container" class="cell medium-12 large-9">
        @while(have_posts()) @php(the_post())
            {!! the_content() !!}
        @endwhile @php(wp_reset_postdata())
    </div>
@endsection

@section('content')
    <div id="projects-container">
        <div id="project-heading" class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-6 large-6">
                    <h3>Recent<br>Projects</h3>                    
                </div>
            </div>
        </div>

        <div class="flexslider">
            <ul class="slides">
                @while($projects->have_posts()) @php($projects->the_post())
                    <li>
                        @php($params = array('width' => 1950, 'height' => 1300))
                        @include('partials.home.desktop')
                        @include('partials.home.mobile')
                    </li>
                @endwhile @php(wp_reset_postdata())
            </ul>
        </div>
    </div>

    <div id="featured-projects-category-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="heading cell large-1">
                    <h4 class="mobile">Project categories</h4>
                </div>

                <div class="cell large-10">
                    <div class="grid-x grid-padding-x medium-up-3 large-up-3">
                        @php($params = array('width' => 800, 'height' => 800))

                        @foreach($featured_project_categories as $project_category)
                            <div class="category cell">
                                <img src="{{ bfi_thumb($project_category['image']['url'], $params) }}">

                                <div class="content">
                                    <h5>{{ $project_category['name'] }}</h5>

                                    <a href="{{ get_term_link($project_category['category']) }}" class="buttonHover customButton">
                                        <span>View projects</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
