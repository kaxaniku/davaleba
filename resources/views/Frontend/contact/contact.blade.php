@extends ('layout')

@section ('content')
<main>
    <body id="top">
    
           <!-- # site-content
        ================================================== -->
        <div id="content" class="s-content s-content--page">

            <div class="row entry-wrap">
                <div class="column lg-12">

                    <article class="entry">

                        <header class="entry__header entry__header--narrow">

                            <h1 class="entry__title">
                                {{ $data['ContactData']->title }}
                            </h1>

                        </header>

                        <div class="entry__media">
                            <figure class="featured-image">
                                <img src="images/thumbs/contact/contact-1200.jpg" 
                                  srcset="images/thumbs/contact/contact-2400.jpg 2400w, 
                                          images/thumbs/contact/contact-1200.jpg 1200w, 
                                          images/thumbs/contact/contact-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                            </figure>
                        </div>

                        <div class="content-primary">

                            <div class="entry__content">
    
                                <p class="lead">
                                    {{ $data['ContactData']->S_text }}
                                </p> 

                                <p>
                                    {{ $data['ContactData']->text }}
                                </p>

                                <div class="row block-large-1-2 block-tab-whole entry__blocks">
                                    <div class="column">
                                        <h4>Where to Find Us</h4>
                                        <p>
                                            {{ $data['ContactData']->C_address }}
                                        </p>
                                    </div>
    
                                    <div class="column">
                                        <h4>Contact Info</h4>
                                        <p>
                                            {{ $data['ContactData']->C_info }}
                                        </p> 
                                    </div>
                                </div>

                                <h4>Feel Free to Say Hi.</h4>
                                @if (isset($data['Success']) && $data['Success'] == 1)
                                    <h4>message was delivered successfully</h4>
                                @endif
                                <form action="{{ route('mail.send') }}" class="entry__form" method="post" >
                                    @csrf
                                    <fieldset class="row">
        
                                        <div class="column lg-6 tab-12 form-field">
                                            <input name="username" class="u-fullwidth" placeholder="Your Name" type="text" required>
                                        </div>
        
                                        <div class="column lg-6 tab-12 form-field">
                                            <input name="email" class="u-fullwidth" placeholder="Your Email" type="email" required>
                                        </div>
        
                                        <div class="column lg-12 message form-field">
                                            <textarea name="message" class="u-fullwidth" placeholder="Your Message" required></textarea>
                                        </div>
        
                                        <div class="column lg-12">
                                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="Add Comment" type="submit">
                                        </div>
        
                                    </fieldset>
                                </form> <!-- end form -->

                        </div> <!-- end content-primary -->

                    </article> <!-- end entry -->

                </div>
            </div> <!-- end entry-wrap -->
    </section> <!-- end s-content -->

    </body>
@endsection
