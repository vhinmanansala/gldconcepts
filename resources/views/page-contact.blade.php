{{--
  Template Name: Contact
--}}

@extends('layouts.alternative-layout')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <div class="cell medium-7 large-7">
            <div id="contact-page-container">
                @include('partials.page-header')
                @include('partials.content-page')

                <div id="contact-form-container">
                    @php echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]') @endphp
                </div>
            </div>
        </div>
    @endwhile
@endsection
