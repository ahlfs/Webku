<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index(): string
    {
        return view('home');
    }

    public function message()
    {
        $data = $this->request->getPost();
        $email = \Config\Services::email();
        $senderemail = $data['senderemail'];
        $sendername = $data['sendername'];
        $receiver = "ahlulffirdaus@gmail.com";
        $email->setTo($receiver);
        $email->setSubject('Message from ' . $sendername);
        $pesan = $data['pesan'];
        $message = "<html><body>
    <p>Hi Bang AL,</p>
    <p style='font-weight: bold;'>Ada Pesan Masuk dari orang</p>
    <p>Sender Email : {$senderemail}</p>
    <p>Sender Name : {$sendername}</p>
    <br>
    <p style='font-size: 14px;'>Message : </p>
    <p>{$pesan}</p><br>
    </body></html>";
        $email->setMessage($message);
        if ($email->send()) {
            $this->session->setFlashdata('emailsentmessage', 'Email Sent Successfully');
            return redirect()->back();
            
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
}
