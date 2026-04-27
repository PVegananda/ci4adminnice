<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            // Static user data - April (password: 123)
            $dataUser = [
                'username' => 'april',
                'password' => '202cb962ac59075b964b07152d234b70', // MD5: 123
                'role' => 'admin'
            ];

            if ($username == $dataUser['username']) {
                if (md5($password) == $dataUser['password']) {
                    // Login successful - set session
                    session()->set([
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
                        'isLoggedIn' => TRUE
                    ]);

                    return redirect()->to(base_url('/'));
                } else {
                    // Password incorrect
                    session()->setFlashdata('failed', 'Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                // Username not found
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            // Show login form
            return view('v_login');
        }
    }

    public function logout()
    {
        // Destroy session
        session()->destroy();
        return redirect()->to('login');
    }
}
