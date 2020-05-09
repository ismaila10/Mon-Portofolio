@extends('layouts/master')

@section('content')

<!--
    ===================
       NAVIGATION
    ===================
    -->

    @include('layouts.navigation');

    <!--
    ===================
       Home
    ===================
    -->

    @include('layouts.accueil');

    <!--
    ===================
       ABOUT
    ===================
    -->

    @include('layouts.about');

    <!--
    ===================
       SERVICE
    ===================
    -->


    <!--
    ===================
      FEATURE PROJECTS
    ===================
    -->


    <!--
    ===================
       SKILLS
    ===================
    -->
    @include('layouts.skills');

    <!--
    ===================
       EXPERIENCES
    ===================
    -->

    @include('layouts.experiences');

    <!--
    ===================
       PORTFOLIO
    ===================
    -->

    @include('layouts.portofolios');

    <!--
    ===================
       QUATES
    ===================
    -->
    <section class="mh-quates image-bg home-2-img">
        <div class="img-color-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="each-quates col-sm-12 col-md-6">
                        <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Intéressé par mon travail?</h3>
                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            Dynamique, proactif, curieux, à l’écoute, appliqué, et surtout, passionné par le développement !
                        </p>
                        <a href="#mh-contact" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    ===================
       PRICING
    ===================
    -->


    <!--
    ===================
       BLOG
    ===================
    -->

    @include('layouts.blog');

    <!--
    ===================
       Testimonial
    ===================
    -->


    <!--
    ===================
       FOOTER 3
    ===================
    -->

    @include('layouts.contact');

    @endsection
