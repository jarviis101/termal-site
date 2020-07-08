<footer class="container-fluid" id="footer-second">
    <div class="row">
        <div class="col-xl-6">
            <div class="row justify-content-center">
                <h3 class="title-footer">Have questions?</h3>
            </div>
        </div>
        <div class="col-xl-6"></div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="d-flex justify-content-center">
                <form action="/contact" method="POST" class="d-flex flex-column col-xl-8">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="row current-row">
                                <div class="form-group">
                                    <input type="text" name="name" class="col-12 form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="mail" class="col-12 form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
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
            <div class="row other-info">
                <div class="col-lg-12 col-xl-6">
                    <div class="d-flex">
                        <span class="footer-name-comp">
                            {{ Setting::get('adderss') }}
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

                <div class="col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-xl-12 pad">
                            <a class="footer-link" href="mailto:{{ Setting::get('contact_number') }}">
                                <i class="fas fa-phone"></i>
                                {{ Setting::get('contact_number') }}
                            </a>
                        </div>
                        <div class="col-xl-12 pad">
                            <a class="footer-link" href="tel:{{ Setting::get('contact_email') }}">
                                <i class="fas fa-envelope"></i>
                                {{ Setting::get('contact_email') }}
                            </a>
                        </div>
                        <div class="col-xl-12 pad">
                            <a class="footer-link" href="https://www.google.com/maps?ll=50.018055,36.192511&z=16&t=m&hl=en&gl=UA&mapclient=embed&q=Velyka+Panasivska+St,+183+Kharkiv+Kharkivs%27ka+oblast+61000">
                                <i class="fas fa-map-marker-alt"></i>
                                {{ Setting::get('address') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 no-pad">
            <iframe class="map-embed" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.642336979997!2d36.190322615893706!3d50.01805862630654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a16a3a668b19%3A0x742a4ca71c52256a!2sVelyka%20Panasivska%20St%2C%20183%2C%20Kharkiv%2C%20Kharkivs&#39;ka%20oblast%2C%2061000!5e0!3m2!1sen!2sua!4v1593513111956!5m2!1sen!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</footer>
