@inject('hp', 'App\services\Helpers')

<footer class="mh-footer mh-footer-3" id="mh-contact">
    <div class="container-fluid">
        <div class="row section-separator">
            <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h3>Me Contacter</h3>
            </div>
            <div class="map-image image-bg col-sm-12">
                <div class="container mt-30">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mh-footer-address">
                            <div class="col-sm-12 xs-no-padding">
                                <div class="mh-address-footer-item dark-bg shadow-1 media wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="each-icon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <div class="each-info media-body">
                                        <h4>Addresse</h4>
                                        <address>
                                            {{ $hp->listeprofil()->nom_rue }}, <br>
                                            {{ $hp->listeprofil()->ville }}
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 xs-no-padding">
                                <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                    <div class="each-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="each-info media-body">
                                        <h4>Email</h4>
                                        <a href="mailto:yourmail@email.com">{{ $hp->listeprofil()->user->email}}</a><br>
                                        <a href="mailto:yourmail@email.com">{{ $hp->listeprofil()->email2 }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 xs-no-padding">
                                <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <div class="each-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="each-info media-body">
                                        <h4>Téléphone</h4>
                                        <a href="{{ $hp->listeprofil()->phone1 }}">{{ $hp->listeprofil()->phone1 }}</a><br>
                                        <a href="callto:(880)-8976-987"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            @include('message.error')
                            <form method="POST" action="{{ route('contacts.store') }}">
                                @csrf
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input name="firstName" class="contact-name form-control" id="name" type="text"
                                        placeholder="Prénom" required value="{{ $firstName ?? old('firstName') }}">
                                    </div>
                                    <input type="text" name="user_id" value="{{ $hp->listeprofil()->user->id }}" hidden>

                                    <div class="col-sm-12">
                                        <input name="lastName" class="contact-email form-control" id="L_name" type="text"
                                        placeholder="Nom" required value="{{ $lastName ?? old('lastName') }}">
                                    </div>

                                    <div class="col-sm-12">
                                        <input name="email" class="contact-subject form-control" id="email" type="email"
                                        placeholder="Votre Email" required value="{{ $email ?? old('email') }}">
                                    </div>

                                    <div class="col-sm-12">
                                        <textarea class="contact-message" name="message" id="message" rows="6"
                                        placeholder="Votre Message" required value="{{ $message ?? old('message') }}">
                                        </textarea>
                                    </div>

                                    <!-- Subject Button -->
                                    <div class="btn-form col-sm-12">
                                        <button type="submit" class="btn btn-fill btn-block" id="form-submit">Envoyer Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-left text-xs-center">
                                        <p>All right reserved Siful Islam @ 2018</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="social-icon">
                                        @foreach ($hp->listereseausocio() as $socio)
                                            @if ($socio->user->id == 1)
                                                <li><a href="{{ $socio->url }}" target="_blank"><i class="{{ $socio->icon }}"></i></a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
