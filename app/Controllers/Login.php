<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('login'); // Menampilkan halaman login
    }

    public function process()
    {
        // Ambil data dari form login
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Periksa apakah username atau password tidak diisi
        if (
            empty($username) || empty($password)
        ) {
            return redirect()->to('/login')->with('error', 'Username dan password harus diisi.');
        }

        // Validasi login
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('user_nama', $username)->first();

        // Periksa apakah pengguna ditemukan
        if (!$user) {
            // Pengguna tidak ditemukan, tampilkan pesan error
            return redirect()->to('/login')->with('error', 'Username tidak ditemukan.');
        }

        // Periksa apakah kata sandi cocok
        //if (!password_verify($password, $user['user_password'])) {
        // Kata sandi tidak cocok, tampilkan pesan error
        //   return redirect()->to('/login')->with('error', 'Password salah.');
        //}

        // Jika kedua kondisi di atas terlewati, login berhasil
        // Set session dan redirect ke halaman dashboard
        $session = session();
        $session->set([
            'user_id' => $user['user_id'],
            'username' => $user['user_nama']
            //  'password' => $user['user_password']
        ]);
        return redirect()->to('/dashboard');
    }

    // Saat login admin berhasil
    public function login()
    {
        // Proses otentikasi admin

        // Set session untuk menandakan bahwa admin telah login
        $session = session();
        $session->set('admin_logged_in', true);

        // Redirect ke halaman admin setelah login berhasil
    }

    // Pada setiap akses halaman admin yang memerlukan login
    public function protectedPage()
    {
        // Periksa apakah admin telah login
        $session = session();
        if (!$session->has('admin_logged_in') || !$session->get('admin_logged_in')) {
            // Jika admin belum login, redirect ke halaman login
            return redirect()->to('/login');
        }

        // Halaman admin yang diakses
    }

    // Saat admin logout
    public function logout()
    {
        // Membersihkan session yang menandakan status login admin
        $session = session();
        $session->remove('admin_logged_in');

        // Redirect ke halaman login atau halaman lainnya setelah logout
    }
}
