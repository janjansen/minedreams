@extends('layout.main')

@section('page_header')
контакты - питомник Майн Дримс
@stop

@section('meta_description')
@stop

@section('meta_keywords')
@stop

@section('content')
<h1 class="title">Карта проезда</h1>
<div class="line"></div>
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Qyq1dvUovVVcgBp08G4A-bUH9OMsIldl&width=700&height=350"></script>
<br><br>
<h3>Отправьте нам сообщение</h3>
<div class="line"></div>
@if (Session::has('user_feedback_report'))
    @if (Session::get('user_feedback_report') == 1)
        <div class="info-box" style="border-radius: 3px;">
            Сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.
        </div>
    @else
        <div class="warning-box" style="border-radius: 3px;">
            Не удается отправить сообщение. Попробуйте позже.
        </div>
    @endif
@else
    <!-- Begin Form -->
    <div class="form-container">
        <form class="forms" action="/send_feedback" method="post">
            <fieldset>
                <ol>
                    <li class="form-row text-input-row">
                        <label>Имя</label>
                        <input type="text" name="name" value="" class="text-input" title="" />
                    </li>
                    <li class="form-row text-input-row">
                        <label>Email\Телефон</label>
                        <input type="text" name="email" value="" oninvalid="this.setCustomValidity('Пожалуйста, укажите способ обратной связи')" class="text-input required email" title="" />
                    </li>
                    <li class="form-row text-area-row">
                        <label>Сообщение</label>
                        <textarea name="message" class="text-area required"></textarea>
                    </li>
                        <li class="form-row hidden-row">
                        <input type="hidden" name="hidden" value="" />
                    </li>
                    <li class="button-row">
                        <input type="submit" value="Отправить" name="submit" class="btn-submit" />
                    </li>
                </ol>
            <input type="hidden" name="v_error" id="v-error" value="Required" />
            <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
            </fieldset>
        </form>
        <div class="response"></div>
    </div>
    <!-- End Form -->
@endif

@stop
