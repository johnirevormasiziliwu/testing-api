<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LuasPersegi extends BaseController
{

    public function hitungLuasPersegi()
    {

        $panjang = $this->request->getPost('panjang');
        $lebar = $this->request->getPost('lebar');

        if (!$panjang || !$lebar) {
            return response()->setJSON(
                [
                    'status' => 'gagal',
                    'message' => 'Panjang dan lebar harus diisi'
                ],
                400
            );
        }

        $luas = $panjang * $lebar;

        return response()->setJSON([
            'status' => 'sukses',
            'luas' => $luas
        ], 200);
    }
}
