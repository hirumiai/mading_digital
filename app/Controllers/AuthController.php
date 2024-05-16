<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{

    protected $userModel;
    public function __construct()
    {

        $this->userModel = new UserModel();
    }


    public function index()
    {
        //
        return view('login');
    }


    // Pada setiap akses halaman admin yang memerlukan login
    public function loginProcess()
    {
        // menggunakan library validation 
        $validate = \Config\Services::validation();

        // membuat rule untuk import form 

        $validate->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);

        // menjalanakan validasi
        if (!$validate->withRequest($this->request)->run()) {
            // jika validasi gagal 
            session()->setFlashdata('errors', 'wrong_rule');
            return redirect()->to('login');
        }


        // mendapatkan input dari form 
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // query data pengguna berdasarkan input  form 

        $data = $this->userModel->getDataUser($username, $password);



        // check if data empty 
        if (empty($data)) {
            session()->setFlashdata('errors', 'user_empty');
            return redirect()->to('login');
        }

        // set session 
        session()->set([
            'isLogin' => true
        ]);

        // redirect to dashboard 
        return redirect()->to('dashboard');
    }

    // Saat admin logout
    public function logout()
    {
        // Membersihkan session yang menandakan status login admin


        session()->destroy();


        return redirect()->to('/login');

        // Redirect ke halaman login atau halaman lainnya setelah logout
    }
}
