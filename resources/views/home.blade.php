{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('introduction')
    @while(have_posts()) @php(the_post())
        {!! the_content() !!}
    @endwhile @php(wp_reset_postdata())
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
                        <div class="project">
                            <div class="grid-container">
                                <div class="grid-x grid-padding-x">
                                    <div class="cell medium-6 large-6">
                                        <div class="content-container">
                                            <div class="content">
                                                <div>
                                                    <h4>{{ get_the_title() }}</h4>
                                                    <p>{{ get_the_excerpt() }}</p>
                                                </div>
                                            </div>
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
                    </li>
                @endwhile @php(wp_reset_postdata())
            </ul>
        </div>
    </div>
@endsection
