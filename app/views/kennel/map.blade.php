@extends('layout.main')

@section('content')
<h1 class="h2">Карта проезда</h1>
<br>
<div class="row">
    <div class="col-md-offset-1 col-md-2">
        <img src="//placehold.it/100x100" class="img-responsive img-circle">
    </div>
    <div class="col-md-3">
        
        <address>
            <b>Барабадзе Елена</b><br>
            г.Москва,ул.Плещеева, д.19, кв.4
        </address>
    </div>
    <div class="col-md-2">
        <img src="//placehold.it/100x100" class="img-responsive img-circle">
    </div>
    <div class="col-md-3">
        <address>
            <b>Сомкина Ирина</b><br>
            г.Москва,ул.Плещеева, д.22А, кв. 197
        </address>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center">
        <img class="img-responsive" src="//api-maps.yandex.ru/services/constructor/1.0/static/?sid=elrJOoTM_qOWzpTTYfXnhViEMGJinhKX&width=600&height=400" alt="карта проезда"/>
    </div>
</div>
@stop

@section('center_title')
Питомник Mine Dreams
@stop