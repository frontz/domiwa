<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadXmlController extends Controller
{
    public function index()
    {
        $xmlDataString = file_get_contents(public_path('download_xml/oferty.xml'));
        $xmlObject = simplexml_load_string($xmlDataString);

        $json = json_encode($xmlObject);
        $phpDataArray = json_decode($json, true);

        dd($phpDataArray);
    }
}
