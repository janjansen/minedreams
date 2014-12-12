@extends('layout.main')

@section('page_header')
контакты - питомник Майн Дримс
@stop

@section('meta_description')
контакты - питомник Майн Дримс
@stop

@section('meta_keywords')
контакты - питомник Майн Дримс
@stop

@section('content')
<h1>{{$header}}</h1>
<div class="line"></div>

<div class="items">
@foreach ($dogs as $dog)
    <div class="box col2 web">
        <div class="image">
            <a href="/img/dogs/{{$dog->full_size_foto}}" rel="prettyPhoto[{{$dog->id}}]" title="{{$dog->name}}">
                <span class="overlay zoom"></span>
                <img src="/img/dogs/thumbnail/{{$dog->small_foto}}" alt="{{$dog->name}}" />
            </a>
        </div>
        <h4>{{$dog->name}}</h4>
        <p style="min-height: 100px">
            {{$dog->title}}<br>
            <em>{{$dog->short_info}}</em>
        </p>
    </div>
@endforeach
</div>
@stop
