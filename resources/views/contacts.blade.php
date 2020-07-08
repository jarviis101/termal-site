@extends('layouts.layout', [
    'title' => $data->title,
    'meta_title' => $data->extras['meta_title'],
    'meta_description' => $data->extras['meta_description'],
    'meta_keywords' => $data->extras['meta_keywords'],
])
@section('content')
    <section class="container-fluid" id="contacts-section">
        <div class="row">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <h1 class="title-section">{{$data->title}}</h1>
                </div>
                <div class="row">
                    @if(!empty($contacts))
                        @foreach($contacts as $contact)
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 contact-block">
                                <h3 class="title-text">
                                    {{$contact->title}}
                                </h3>
                                <div class="add-text">
                                    {!! $contact->description !!}
                                </div>
                            </div>
                        @endforeach
                    @endif


                    <!-- <div class="col-xl-6 contact-block">
                        <h3 class="title-text">
                            Директор
                        </h3>
                        <span class="add-text">
                            Юрченко Станислав Сергеевич <br />
                            Тел. +38 067 572 50 73
                        </span>
                    </div>
                    <div class="col-xl-6 contact-block">
                        <h3 class="title-text">
                            Главный инженер
                        </h3>
                        <span class="add-text">
                            Грабар Сергей Иванович <br />
                            Тел. +38 098 052 59 91
                        </span>
                    </div>
                    <div class="col-xl-6 contact-block">
                        <h3 class="title-text blacked">
                            Бухгалтерия
                        </h3>
                        <span class="add-text blacked">
                            Кириченко Оксана Константиновка <br />
                            Тел. +3 050 302 15 61
                        </span>
                    </div>
                    <div class="col-xl-6 contact-block">
                        <h3 class="title-text blacked">
                            Сметно-договорной отдел
                        </h3>
                        <span class="add-text blacked">
                            Шаповалова Дарина Владимировна <br />
                            Тел. +38 063 8041380, <br />
                                +38 067 303 93 72
                        </span>
                    </div>
                    <div class="col-xl-6 contact-block">
                        <h3 class="title-text blacked">
                            Отдел продаж
                        </h3>
                        <span class="add-text blacked">
                            Онищенко Олег Иванович <br />
                            Тел. + 3 066 577 34 84
                        </span>
                    </div> -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 contact-block">
                        <h3 class="title-text blacked">
                            ГРАФИК РАБОТЫ
                        </h3>
                        <span class="add-text blacked">
                            ПН-ПТ: 8:30 - 17:00
                        </span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 contact-block">
                        <h3 class="title-text blacked">
                            Обратная связь
                        </h3>
                        <form action="/contact" method="POST" class="row form-contact">
                            @csrf
                            <div class="form-group col-xl-6">
                                <input type="text" name="name" class="form-control" placeholder="Имя">
                            </div>
                            <div class="form-group col-xl-6">
                                <input type="email" name="mail" class="form-control" placeholder="Электронная почта">
                            </div>
                            <div class="form-group col-xl-6">
                                <input type="tel" name="number" class="form-control" placeholder="Телефонный номер">
                            </div>
                            <div class="form-group col-xl-6">
                                <input type="text" name="theme" class="form-control" placeholder="Тема">
                            </div>
                            <div class="form-group col-xl-12">
                                <textarea class="form-control" name="message" placeholder="Сообщение"></textarea>
                            </div>
                            <div class="form-group col-xl-2">
                                <input type="submit" class="btn" id="btn-send" value="Отправить">
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 contact-block">
                        <h3 class="title-text blacked">
                            КАРТА ПРОЕЗДА
                        </h3>
                        <span class="add-text blacked">
                            61040, м. Харків, вул.Велика Панасівська, 183
                        </span>
                        <iframe class="map-embed" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.642336979997!2d36.190322615893706!3d50.01805862630654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a16a3a668b19%3A0x742a4ca71c52256a!2sVelyka%20Panasivska%20St%2C%20183%2C%20Kharkiv%2C%20Kharkivs&#39;ka%20oblast%2C%2061000!5e0!3m2!1sen!2sua!4v1593513111956!5m2!1sen!2sua" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
