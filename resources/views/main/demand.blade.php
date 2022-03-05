@extends('layouts.main')
{{--@push('scripts')--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--@endpush--}}
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">Оставить заявку</h1>
                    <section class="edica-contact py-5 mb-5">
                        <div class="row">
                            <div class="col-md-8 contact-form-wrapper">
                                <form action="{{ route('dcv') }}" method="POST">
                                    @csrf
                                    <h5 data-aos="fade-up">Форма заявки</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6" data-aos="fade-up">
                                            <label for="fio">Фамилия Имя Отчество</label>
                                            <input type="text" class="form-control" id="fio" name="fio"
                                                   placeholder="Ваши полные Фамилия Имя Отчество">
                                        </div>
                                        <div class="form-group col-md-6" data-aos="fade-up">
                                            <label for="phone_number">Телефон</label>
                                            <input type="text" class="form-control" id="phone_number"
                                                   name="phone_number"
                                                   placeholder="Ваш мобильный номер телефона">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <label for="email">Почта E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   placeholder="Ваша электронная почта">
                                        </div>
                                        <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <label for="location">Локация</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                   placeholder="Где будет проходить фотосессия">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6" data-aos="fade-up">
                                            <label for="suitable_time">Удобная дата и время</label>
                                            <input type="datetime-local" class="form-control" id="suitable_time"
                                                   name="suitable_time"
                                                   placeholder="Когда будет проходить мероприятие?">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mt-4 mb-4">
                                            <div class="captcha">
                                                <span>{!! captcha_img() !!}</span>
                                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                    &#x21bb;
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>Защита от спама</label>
                                            <input id="captcha" type="text" class="form-control"
                                                   placeholder="Введите ответ" name="captcha">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-lg" data-aos="fade-up"
                                            data-aos-delay="300">Отправить заявку
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-4 contact-sidebar" data-aos="fade-left">
                                <h5>Связаться с нами</h5>
                                <p>Вам понравились наши работы и вам нужна тематическая фотосессия? Мы готовы помочь
                                    вам
                                    с понедельника по пятницу с 9 утра по восточному времени до 10 вечера по
                                    восточному
                                    времени.</p>
                                <p>Новозаводская 56,<br> Москва</p>
                                <div class="embed-responsive embed-responsive-1by1 contact-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12090.496282731767!2d-73.98517381282224!3d40.74829681924569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259041366262b%3A0xfdac298467953648!2sMurray%20Hill%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1588137209658!5m2!1sen!2sin"
                                        width="600" height="450" frameborder="0" style="border:0;"
                                        allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
{{--@push('scripts')--}}
{{--    <script>--}}
{{--        $('#reload').click(function () {--}}
{{--            $.ajax({--}}
{{--                type: 'GET',--}}
{{--                url: 'demand-reload-captcha',--}}
{{--                success: function (data) {--}}
{{--                    $(".captcha span").html(data.captcha);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
{{--@push('style')--}}
{{--    <style>--}}
{{--        .container {--}}
{{--            max-width: 800px;--}}
{{--        }--}}

{{--        .reload {--}}
{{--            font-family: Lucida Sans Unicode--}}
{{--        }--}}
{{--    </style>--}}
{{--@endpush--}}

