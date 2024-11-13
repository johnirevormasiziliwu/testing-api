<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Waktu extends BaseController
{
    public function waktuSekarang()
    {
    
        $currentDateTime = date('Y-m-d H:i:s');
        return $this->response->setJSON([
            'status' => 'sukses',
            'waktu' => $currentDateTime
        ]);
    }
}
