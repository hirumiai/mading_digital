<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user'; // Nama tabel database


    protected $allowedFields = ['user_nama', 'user_password']; // Kolom yang diizinkan untuk disimpan

    // Metode untuk mendapatkan data pengguna berdasarkan nama pengguna (user_nama)
    public function getDataUser($username, $password)
    {
        return $this->db->table('user')
            ->where('user_nama', $username)
            ->where('user_password',  md5($password))
            ->get()
            ->getRowObject();
    }

    // Metode untuk menyimpan data pengguna dengan password yang di-hash
    public function insertUser($username, $password)
    {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data pengguna ke dalam database
        $data = [
            'user_nama' => $username,
            'user_password' => $hashedPassword
        ];

        return $this->insert($data);
    }
}
