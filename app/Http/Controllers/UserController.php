<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', [
            'title' => 'User',
            'users' => $users
        ]);
    }

    public function tambah()
    {
        return view('tambah', [
            'title' => 'Tambah Data'
        ]);
    }

    public function aksiTambah(Request $request)
    {
        // melakukan validasi data yang diinput oleh pengguna
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'max:255'],
        ]);

        // proses penyimpanan data ke dalam database
        User::create($data);

        // menampilkan pesan berhasil ketika data berhasil disimpan
        return redirect()->back()->with('sukses', 'Data berhasil disimpan');
    }

    public function edit(User $user)
    {
        return view('edit', [
            'title' => 'Edit Data',
            'user' => $user
        ]);
    }

    public function aksiUpdate(Request $request, User $user)
    {
        // melakukan validasi data yang diinput oleh pengguna
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['required', 'string', 'max:255'],
        ]);

        // proses mengubah data ke dalam database
        $user->update($data);

        // menampilkan pesan berhasil ketika data berhasil disimpan
        return redirect()->back()->with('sukses', 'Data berhasil diubah');
    }

    public function hapus(User $user)
    {
        $user->delete();
        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }
}
