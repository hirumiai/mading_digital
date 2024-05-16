<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user'; // Nama tabel database

    protected $primaryKey = 'user_id'; // Primary key tabel

    protected $allowedFields = ['user_nama', 'user_password']; // Kolom yang diizinkan untuk disimpan

    protected $returnType = 'array'; // Tipe data kembalian query

    // Metode untuk mendapatkan data pengguna berdasarkan nama pengguna (user_nama)
    public function getUserByUsername($username)
    {
        return $this->where('user_nama', $username)->first();
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
