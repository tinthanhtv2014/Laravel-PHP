@extends('layouts.base')

@section('title','Home page')

@section('main')
    <div class="row mt-3">
        @foreach($articles as $article)
        <div class="card" style="width: 18rem;">
        <img src="{{$article->hinhanh}}" class="card-img-top" alt="...">
        <div class="card-body">
             <h5 class="card-title">{{$article->ten_bviet}}</h5>
             <p class="card-text">
             <a href="{{route('articles.show',$article->ma_bviet)}}"> {{$article->tomtat}}</a>   
            </p>
             <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        @endforeach
    </div>
@endsection