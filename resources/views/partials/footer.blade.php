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
                                <span>
                                    Графік роботи:
                                </span>
                            </div>
                            <div class="d-flex">
                                <span>
                                    {{ Setting::get('schedule') }}
                                </span>
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
                                        {{ Setting::get('address') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 сol-md-12 col-lg-12 col-xl-6 right-side-footer">
                    <div class="row justify-content-center">
                        <h3 class="title-footer">Have questions?</h3>
                    </div>
                    <div class="d-flex form-callback">
                        <form action="/contact" method="POST" class="d-flex flex-column">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="row current">
                                        <div class="form-group">
                                            <input type="text" name="name" class="col-12 form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="mail" class="col-12 form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Massage"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <input type="submit" class="sbmt-btn-footer" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
