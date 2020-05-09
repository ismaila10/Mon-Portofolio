@inject('hp', 'App\services\Helpers')

<!--
    ===================
       SKILLS
    ===================
    -->
    <section class="mh-skills" id="mh-skills">
        <div class="home-v-img">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title text-center col-sm-12">
                        <!--<h2>Skills</h2>-->
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-skills-inner">
                            <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <h3>Compétences Techniques</h3>
                                @foreach ($hp->listecompetence() as $skills)
                                    @if ($skills->typeCompetence->id == 1)
                                        <div class="each-skills">
                                            <div class="candidatos">
                                                <div class="parcial">
                                                    <div class="info">
                                                        <div class="nome">{{ $skills->name }}</div>
                                                        <div class="percentagem-num">{{ $skills->pourcentage }}%</div>
                                                    </div>
                                                    <div class="progressBar">
                                                        <div class="percentagem" style="width:{{ $skills->pourcentage }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <h3>Compétences Professionnelles</h3>
                            <ul class="mh-professional-progress">
                                @foreach ($hp->listecompetence() as $skills)
                                    @if ($skills->typeCompetence->id == 2)
                                    <li>
                                        <div class="mh-progress mh-progress-circle" data-progress="{{ $skills->pourcentage }}"></div>
                                        <div class="pr-skill-name">{{ $skills->name }}</div>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
