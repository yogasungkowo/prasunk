@extends('dashboard.layouts.main')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h1 class="h2">Show Article {{ $post->title}}</h1>
    <div class="small">
        <hr>
        <h2 class="fw-bold text-center">{{ $post->title }}</h2>
        <div class="d-flex justify-content-center mt-5">
            <img  src="{{ Storage::url('article/'. $post->image) }}" alt="{{ $post->slug }}" class="img-fluid rounded" style="width: 400px; height: auto">
        </div>
        <div class="my-5" style="margin: 0 200px 0 200px; text-align: justify;">
            <p class="fw-bold text-center">{{ $post->created_at->diffForHumans() }}</p>
            <p class="text-center fw-bold">{!! str_replace('<img', '<img style="width: 550px; height:auto; display: block; margin-left: auto; margin-right: auto; border-radius: 20px"', $post->body) !!}</p>
        </div>
    </div>
@endsection

