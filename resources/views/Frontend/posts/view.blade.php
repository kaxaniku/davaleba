@extends('layout')

@section('content')
<div id="content" class="s-content s-content--blog">

    <div class="row entry-wrap">
        <div class="column lg-12">

            <article class="entry format-standard">

                <header class="entry__header">

                    <h1 class="entry__title">
                        {{ $data['post']->title }}
                    </h1>

                    <div class="entry__meta">
                        <div class="entry__meta-date">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                            </svg>
                            {{ date('F d, Y', strtotime($data['post']->created_at)) }}
                        </div>
                    </div>
                </header>

                <div class="entry__media">
                    <figure class="featured-image">
                        <img src="{{ asset('storage/images/'.$data['post']->img) }}" alt="">
                    </figure>
                </div>

                <div class="content-primary">

                    <div class="entry__content">
                        <p>{{ $data['post']->text }}</p>
                    </div>

                </div> 

            </article>

        </div>
    </div>
</section>
@endsection