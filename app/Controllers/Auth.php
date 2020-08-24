<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        // mengembalikan inputan username
        $data['username'] = $this->request->getVar('username');

        if ($this->request->getMethod() == 'post') {
            // validation
            $rules = [
                'username' => 'required|min_length[2]|max_length[20]',
                'password' => 'required|userValidate[username,password]',
            ];

            $customErrors = [
                'password' => [
                    'userValidate' => 'username dan password tidak cocok!',
                    'required' => 'password wajib kamu isi!',
                ]
            ];

            if (!$this->validate($rules, $customErrors)) {
                $data['validation'] = $this->validator;
            } else {
                $AuthModel = new AuthModel;

                $user = $AuthModel->where('username', $this->request->getVar('username'))
                    ->first();

                $this->userSetSession($user);

                return redirect()->to(base_url() . '/admin');
            }
        }

        echo view('auth/login', $data);
    }

    private function userSetSession($user)
    {
        $data = [
            'username' => $user['username'],
            'isLogged_in' => true,
        ];

        session()->set($data);
        return true;
    }

    public function registration()
    {

        helper(['form']);

        $data = [];
        $data['title'] = 'Indah Taman | Registrasi page';
        if ($this->request->getMethod() == 'post') {
            // validation
            $rules = [
                'username' => 'required|min_length[2]|max_length[20]',
                'password' => 'required|min_length[5]',
                'password_confirm' => 'matches[password]'
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $AuthModel = new AuthModel;
                $newData = [
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                ];
                $AuthModel->save($newData);

                $session = session();
                $session->setFlashdata('success', 'Registrasi akun sukses!');
                return redirect()->to(base_url() . '/login');
            }
        }

        echo view('auth/registration', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url() . '/login');
    }
}
