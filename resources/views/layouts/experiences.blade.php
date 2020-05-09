@inject('hp', 'App\services\Helpers')

<section class="mh-experince image-bg featured-img-one" id="mh-experience">
    <div class="img-color-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 col-md-6">
                    <div class="mh-education">
                        <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Formations</h3>
                        <div class="mh-education-deatils">
                            <!-- Education Institutes-->
                            @foreach ($hp->listeexperience() as $exp)
                                @if ($exp->typeExperience->id == 1)
                                    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                        <h4>{{ $exp->title }} <a href="{{ $exp->url }}" target="_blank">{{ $exp->nom_entreprise }}</a></h4>
                                        <div class="mh-eduyear">{{ $exp->date_debut }} - {{ $exp->date_fin ?? 'A ce jour' }}</div>
                                        <p>{!!html_entity_decode($exp->mission)!!}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-work">
                         <h3>Experiences Professionnelles</h3>
                        <div class="mh-experience-deatils">
                            <!-- Education Institutes-->
                            @foreach ($hp->listeexperience() as $exp)
                                @if ($exp->typeExperience->id == 2)
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <h4>{{ $exp->title }} <a href="{{ $exp->url }}" target="_blank">{{ $exp->nom_entreprise }}</a></h4>
                                        <div class="mh-eduyear">{{ $exp->date_debut }} - {{ $exp->date_fin ?? 'A ce jour' }}</div>
                                        <span>Responsabilités :</span>
                                            <p>{!!html_entity_decode($exp->mission)!!}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
