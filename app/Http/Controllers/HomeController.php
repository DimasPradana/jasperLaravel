<?php

namespace App\Http\Controllers;

// cossou/jasperphp
use JasperPHP;

class HomeController extends Controller
{
    //
    public function index()
    {
        //jasper ready to call
        //$input = public_path().'/report/hello_world.jrxml';
        $input = public_path().'/report/skp_penetapan.jrxml';
        $output = public_path().'/report/output/';
        $ext = "pdf";
        $compile = JasperPHP::compile($input)->execute();
        echo "<pre>";
        print_r($compile);
        echo "<pre>";
    }

    public function process()
    {
        //$input = public_path().'/report/hello_world.jrxml';
        $input = public_path().'/report/skp_penetapan.jasper';
        $output = public_path().'/report/output/';
        $dateStart = '2019-01-01';
        $dateEnd = '2019-04-30';
        $ext1 = "pdf";
        $ext2 = "xlsx";
        $process = JasperPHP::process(
            $input,
            $output,
            array(
                $ext1, $ext2
            ),
            array(
                "dateStart" => $dateStart,
                "dateEnd" => $dateEnd,
                "REPORT_LOCALE" => 'in_ID'
            ),
            array(
                "driver" => "mysql",
                "username" => "admin",
                "password" => "12345",
                "host" => "localhost",
                "database" => "e-pajak"
            )
        )->execute();
        // buat debug
        //echo JasperPHP::process(
            //$input,
            //$output,
            //$ext,
            //array(
                //"dateStart" => $dateStart,
                //"dateEnd" => $dateEnd,
                //'REPORT_LOCALE' => 'in_ID'
            //)
        //)->output();
        echo "<pre>";
        print_r($process);
        echo "<pre>";
    }
}
