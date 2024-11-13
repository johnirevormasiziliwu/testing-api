<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class GetNama extends BaseController
{
    public function sapaPengguna()
    {
        
        $nama = $this->request->getGet('nama');

      
        if (!$nama) {
            return response()->setJSON('Nama harus diisi');
        }

       
        return $this->response->setJSON([
            'status' => 'sukses',
            'message' => 'Halo, ' . $nama . '! Selamat datang di Aplikasi Kami.'
        ]);
    }
}
