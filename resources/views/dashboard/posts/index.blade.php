@extends('dashboard.layouts.main')
@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> 
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tabel Daftar Article</h1>
        </div>
        <div class="table-responsive small" style="margin: 0 10px 0 20px">
            <table class="table table-striped table-sm">
                <thead class="">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @forelse ($post as $posts)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $posts->title }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('dashboard.destroy', $posts->slug) }}"
                            method="POST">
                            <a href="{{ route('dashboard.show', $posts->slug) }}"
                                class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('dashboard.edit', $posts->slug) }}"
                                    class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Product Belum Tersedia
                            </div>
                        @endforelse
                </tbody>
            </table>
        </div>
    @endsection
