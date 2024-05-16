@extends('dashboard.layouts.main')
@section('container')
<h2>Tabel Daftar Artikel</h2>
<div class="table-responsive small">
    <table class="table table-striped table-sm table-align-middle">
        <thead class="text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>data</td>
                <td>
                    <a class="btn btn-warning text-white btn-sm" href="">Edit</a>
                    <a class="btn btn-success btn-sm" href="">Lihat</a>
                    <a class="btn btn-danger btn-sm" href="">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection