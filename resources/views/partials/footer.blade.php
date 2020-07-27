<footer class="container-fluid" id="footer">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 сol-md-12 col-lg-12 col-xl-6 left-side-footer">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <span>
                                    {{ Setting::get('name') }}
                                </span>
                            </div>
                            <div class="d-flex schedule-text">
                                @if($locale == 'ru')
                                    <span>
                                        График работы:
                                    </span>
                                @elseif($locale == 'ua')
                                    <span>
                                        Графік роботи:
                                    </span>
                                @elseif($locale == 'en')
                                    <span>
                                        Schedule:
                                    </span>
                                @endif
                            </div>
                            <div class="d-flex">
                                @if($locale == 'ru')
                                    <span>
                                        {{ Setting::get('schedule') }}
                                    </span>
                                @elseif($locale == 'ua')
                                    <span>
                                        {{ Setting::get('schedule') }}
                                    </span>
                                @elseif($locale == 'en')
                                    <span>
                                        Mon-Fri: 8:30 am - 5:00 pm
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex flex-column">
                                <div>
                                    <a class="footer-link" href="mailto:{{ Setting::get('contact_number') }}">
                                        <i class="fas fa-phone"></i>
                                        {{ Setting::get('contact_number') }}
                                    </a>
                                </div>
                                <div>
                                    <a class="footer-link" href="tel:{{ Setting::get('contact_email') }}">
                                        <i class="fas fa-envelope"></i>
                                        {{ Setting::get('contact_email') }}
                                    </a>
                                </div>
                                <div>
                                    <a class="footer-link" href="https://www.google.com/maps?ll=50.018055,36.192511&z=16&t=m&hl=en&gl=UA&mapclient=embed&q=Velyka+Panasivska+St,+183+Kharkiv+Kharkivs%27ka+oblast+61000">
                                        <i class="fas fa-map-marker-alt"></i>
                                        @if($locale == 'ru')
                                            61040, г. Харьков, ул.Большая Панасовская, 183
                                        @elseif($locale == 'ua')
                                            {{ Setting::get('address') }}
                                        @elseif($locale == 'en')
                                            61040, M. Kharkiv, Velika Panasivska St., 183
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 сol-md-12 col-lg-12 col-xl-6 right-side-footer">
                    <div class="row justify-content-center">
                        @if($locale == 'ru')
                            <h3 class="title-footer">Есть вопрос?</h3>
                        @elseif($locale == 'ua')
                            <h3 class="title-footer">Є питання?</h3>
                        @elseif($locale == 'en')
                            <h3 class="title-footer">Have questions?</h3>
                        @endif
                    </div>
                    <div class="d-flex form-callback">
                        <form action="/contact" method="POST" class="d-flex flex-column">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="row current">
                                        <div class="form-group">
                                            @if($locale == 'ru')
                                                <input type="text" name="name" class="col-12 form-control" placeholder="Имя">
                                            @elseif($locale == 'ua')
                                                <input type="text" name="name" class="col-12 form-control" placeholder="Iм'я">
                                            @elseif($locale == 'en')
                                                <input type="text" name="name" class="col-12 form-control" placeholder="Name">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            @if($locale == 'ru')
                                                <input type="email" name="mail" class="col-12 form-control" placeholder="E-mail">
                                            @elseif($locale == 'ua')
                                                <input type="email" name="mail" class="col-12 form-control" placeholder="E-mail">
                                            @elseif($locale == 'en')
                                                <input type="email" name="mail" class="col-12 form-control" placeholder="E-mail">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group">
                                        @if($locale == 'ru')
                                            <textarea class="form-control" name="message" placeholder="Сообщение"></textarea>
                                        @elseif($locale == 'ua')
                                            <textarea class="form-control" name="message" placeholder="Повідомлення"></textarea>
                                        @elseif($locale == 'en')
                                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                @if($locale == 'ru')
                                    <input type="submit" class="sbmt-btn-footer" value="Отправить">
                                @elseif($locale == 'ua')
                                    <input type="submit" class="sbmt-btn-footer" value="Надіслати">
                                @elseif($locale == 'en')
                                    <input type="submit" class="sbmt-btn-footer" value="Send">
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
