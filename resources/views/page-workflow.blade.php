{{--
  Template Name: Workflow
--}}

@extends('layouts.alternative-layout')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @php($params = array( 'width' => 1154, 'height' => 650 ))

        <div class="cell medium-12 large-7">
            <div id="about-page-container">
                @include('partials.page-header')

                <div class="desktop featured-image">
                    <div class="image-aside pos-left">
                        <div class="image-wrap">
                            <img src="{{ bfi_thumb(get_the_post_thumbnail_url(), $params) }}">
                        </div>
                    </div>
                </div>

                <div id="featured-image" class="mobile">
                    <img src="{{ get_the_post_thumbnail_url() }}">
                </div>

                <div id="main-content">
                    @include('partials.content-page')

                    <div id="workflow-content-container">
                        @foreach ($workflows as $key => $workflow)
                            <div class="workflow-content">
                                <div class="icon">
                                    {!! $workflow['icon'] !!}
                                </div>

                                <div class="content">
                                    <h5 class="number">{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</h5>
                                    <h4>{{ $workflow['title'] }}</h4>
                                    <p>{{ $workflow['content'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endwhile
@endsection

@section('call-to-action')
    <div id="call-to-action-container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x justified-center">
                <div class="cell medium-10 large-10">
                    <div id="call-to-action-content">
                        <h4>{{ $call_to_action_title }}</h4>
                        <p>{{ $call_to_action_text }}</p>

                        <a href="{{ $call_to_action_link }}" class="button">Let's get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection