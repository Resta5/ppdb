<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


class EmailController extends Controller
{
    public function index()
    {
        $isi_email = [
            'title' => 'SMKN 3 BANDUNG',
            'body' => 'Selamat Anda Lulus.Silahkan datang kesekolah sebelum akhir maret.Kami menunggu anda.',
        ];

        Mail::to('muhamadrestha5@gmail.com')->send(new SendEmail($isi_email));
        return 'Berhasil mengirim';
    }
}
