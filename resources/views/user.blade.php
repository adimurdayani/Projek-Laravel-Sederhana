@extends('layouts.master')
@section('title', $title)

@section('konten')

    {{-- konten --}}
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                {{-- Tombol Tambah --}}
                <a href="/user/tambah" class="btn btn-primary mb-3">Tambah data</a>
                {{-- Tabel --}}
                <table class="table">
                    <thead class="bg-success text-white">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="/user/edit" class="btn btn-warning">Edit</a>
                                <a href="/user/hapus" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
                {{-- penutup tabel --}}
            </div>
        </div>
    </div>

@endsection
