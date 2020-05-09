@inject('hp', 'App\services\Helpers')

<section class="mh-about" id="mh-about">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <img src="assets/images/prog1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">A Propos</h2>
                    <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        {!!html_entity_decode($hp->listeprofil()->describe)!!}
                    </p>
                    <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <ul>
                            @foreach ($hp->listecompetence() as $skills)
                                    @if ($skills->typeCompetence->id == 1)
                                    <li><span>{{ $skills->name }}</span></li>
                                    @endif
                                @endforeach
                        </ul>
                    </div>
                    <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Télécharger CV <i class="fa fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mh-service">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h2>Savoir Faire</h2>
            </div>
            @foreach ($hp->listesavoirfaire() as $savoirfaire)
                <div class="col-sm-4">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <i class="{{ $savoirfaire->icon }}"></i>
                        <h3>{{ $savoirfaire->title }}</h3>
                        <p>
                            {!!html_entity_decode($savoirfaire->describe )!!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="mh-featured-project image-bg featured-img-one">
    <div class="img-color-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title col-sm-12">
                    <h3>Projets Clients</h3>
                </div>
                <div class="col-sm-12">
                    <div class="mh-single-project-slide-by-side row">
                        <!-- Project Items -->
                        <div class="col-sm-12 mh-featured-item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <img src="assets/images/fp1.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mh-featured-project-content">
                                        <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                        <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template.
                                        It will fit perfectly for Startup, Web App or any type of Web Services.
                                        It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                                        All variations are organized separately so you can use / customize the template very easily.</p>
                                        <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                        <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                            <blockquote>
                                                <q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                            <blockquote>
                                                <q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                            <blockquote>
                                                <q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Items -->
                        <div class="col-sm-12 mh-featured-item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <img src="assets/images/p-2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mh-featured-project-content">
                                        <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                        <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template.
                                        It will fit perfectly for Startup, Web App or any type of Web Services.
                                        It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                                        All variations are organized separately so you can use / customize the template very easily.</p>
                                        <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                        <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                            <blockquote>
                                                <q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                            <blockquote>
                                                <q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                            <blockquote>
                                                <q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project Items -->
                        <div class="col-sm-12 mh-featured-item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <img src="assets/images/p-2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mh-featured-project-content">
                                        <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Web Design</h4>
                                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Wrap</h2>
                                        <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Design & Development</span>
                                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">Stamp is a clean and elegant Multipurpose Landing Page Template.
                                        It will fit perfectly for Startup, Web App or any type of Web Services.
                                        It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                                        All variations are organized separately so you can use / customize the template very easily.</p>
                                        <a href="" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                        <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                            <blockquote>
                                                <q>Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                            <blockquote>
                                                <q>Creative Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                            <blockquote>
                                                <q>Organize Code - suits my needs perfectly whilst allowing me to learn some new technology first hand.</q>
                                                <cite>- Shane Kavanagh</cite>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End: .row -->
        </div>
    </div>
</section>
