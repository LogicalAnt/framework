<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//require_once '\vendor\autoload.php'; //loaded in root index file

class Test extends CI_Controller {


    public function index()
    {
        \Cartalyst\Sentinel\Native\Facades\Sentinel::register(array(
            'email'    => 'john.doe@example.com',
            'password' => 'foobar',
        ));

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->output();      
    }
}
