@extends('dashboard.layouts.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Article</h1>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action="{{ route('dashboard.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <div class="mb-2">
                                        <img id="preview-image" src="{{ Storage::url('article/'. $post->image) }}" alt="Old Image" width="100">
                                    </div>
                                    <label class="font-weight-bold">IMAGE</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" id="image">
                                    @error('image')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">TITLE</label>
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title', $post->title) }}" placeholder="Masukkan Judul Artikel">

                                    <!-- error message untuk title -->
                                    @error('title')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">CONTENT</label>
                                    <textarea id="editor" class="form-control @error('body') is-invalid @enderror" name="body" rows="5">{{ old('body', $post->body) }}</textarea>


                                    <!-- error message untuk description -->
                                    @error('body')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                                <button type="reset" class="btn btn-md btn-warning text-white">RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
