<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing_page');
    }

    public function submitRequest()
    {
        // Mengambil data dari form
        $name  = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');

        // Untuk sementara kita kirim pesan sukses kembali ke halaman
        return redirect()->to(base_url('/'))->with('success', "Thank you $name, your invitation request for $email has been received!");
    }
}
