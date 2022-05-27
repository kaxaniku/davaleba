@extends ('layout')

@section ('content')
<!-- # site-content
        ================================================== -->
        <div id="content" class="s-content s-content--page">

            <div class="row entry-wrap">
                <div class="column lg-12">

                    <article class="entry">

                        <header class="entry__header entry__header--narrow">

                            <h1 class="entry__title">
                                {{ $data['AboutData']->title}}
                            </h1>

                        </header>

                        <div class="entry__media">
                            <figure class="featured-image">
                                <img src="images/thumbs/about/about-1200.jpg" 
                                  srcset="images/thumbs/about/about-2400.jpg 2400w, 
                                          images/thumbs/about/about-1200.jpg 1200w, 
                                          images/thumbs/about/about-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                            </figure>
                        </div>

                        <div class="content-primary">

                            <div class="entry__content">
    
                                <p class="lead">
                                    {{ $data['AboutData']->short_text}}</p> 

                                <div class="row block-lg-one-half block-tab-whole">
                                        <p class="drop-cap">
                                            {{ $data['AboutData']->text}}
                                            </p>
                                    </div>
                                    </div>
                                </div>

                        </div> <!-- end content-primary -->

                    </article> <!-- end entry -->

                </div>
            </div> <!-- end entry-wrap -->

    </section> <!-- end s-content -->
@endsection
