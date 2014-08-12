@extends('layout.main')

@section('content')
<h1 class="h2">{{$header}}</h1>

@foreach ($dogs as $dog)
    <div class="row dog_box">
       <div class="col-md-2">
           <a href="/img/dogs/{{$dog->full_size_foto}}" data-lightbox="{{$dog->id}}" data-title="{{$dog->name}}" title="{{$dog->name}}">
               <img src="/img/dogs/thumbnail/{{$dog->small_foto}}" class="img-circle img-responsive" alt="{{$dog->name}}">
           </a>
       </div>
       <div class="col-md-9">
           <span class="lead">{{$dog->name}}</span><br>
           <span>{{$dog->title}}</span><br>
           <i>{{$dog->short_info}}</i>
       </div>
   </div>
@endforeach
@stop

@section('center_title')
{{$centerTitle}}
@stop

@section('title')
@stop