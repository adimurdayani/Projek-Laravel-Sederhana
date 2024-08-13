@extends('layouts.master')
@section('title', $title)

@section('konten')

    {{-- konten --}}
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                {{-- Tombol Tambah --}}
                <a href="/user/tambah" class="btn btn-primary mb-3">Tambah data</a>

                @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif

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
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="form-inline">
                                    <a href="/user/edit/{{ $user->id }}" class="btn btn-warning">Edit</a>
                                    <form action="/user/hapus/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="confirm('Apakah anda yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{-- penutup tabel --}}
            </div>
        </div>
    </div>

@endsection
