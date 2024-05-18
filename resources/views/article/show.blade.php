@extends('main.main')
@section('container')
    <section id="article-content">
        <div class="container">
            <div class="box-article">
                <div class="fw-bold fs-1 text-center text-white">
                    {{ $post->title }}
                </div>
                <div class="img-fluid mt-4 d-flex justify-content-center">
                    <img src="{{ Storage::url('article/' . $post->image) }}" alt="{{ $post->slug }}" class="rounded" style="width: auto; height: 500px;">
                </div>
                <p class="fs-9 text-white my-2" style="color: #C9C9C9; margin-left: 268px">Created By <span><a
                            class="text-decoration-none" style="color: #FF1E1E;"
                            href="https://linkedin.com/in/prayoga-sungkowo" target="_blank">Prayoga Sungkowo</a></span>
                    {{ $post->created_at->diffForHumans() }} . <span>{!! str_replace('<img', '<img style="width: auto; height:400px; display: block; margin-left: auto; margin-right: auto; border-radius: 20px;"', $post->body) !!}</span></p>
            </div>
        </div>
    </section>
@endsection
