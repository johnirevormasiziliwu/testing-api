<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pesan extends BaseController
{
    public function simpanPesan()
    {
       
        $pesan = $this->request->getPost('pesan');

       
        if (!$pesan) {
            return response()->setJSON(['message' => 'Pesan harus diisi'], 400);
        }

        
        $status = true; 
        

        if ($status ) {
            return $this->response->setJSON([
                'status' => 'sukses',
                'message' => 'Pesan berhasil disimpan',
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'gagal',
                'message' => 'Pesan gagal disimpan',
            ]);
        }
    }

}
