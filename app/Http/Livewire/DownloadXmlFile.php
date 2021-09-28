<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Livewire\Component;

class DownloadXmlFile extends Component
{

    public function downloadXmlFile()
    {

        $local_file = "download_xml/oferty.xml";
        $server_file = "przykladowy_xml.xml";
        $ftp_server = "server649883.nazwa.pl";
        $ftp_user_name = "server649883";
        $ftp_user_pass = "Tentego77";

        $conn_id = ftp_connect($ftp_server);


        ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);


        if (ftp_get($conn_id, $local_file, $server_file, FTP_ASCII)) {
            echo "Successfully written to $local_file\n";
        } else {
            echo "There was a problem\n";
        }

        ftp_close($conn_id);

//        Ta funkcja ściąga plik ze storage
//        $file = Storage::download("test.txt");
//        return  Storage::download($file_path);

//        dump($file_path);
    }

    public function render()
    {
        return view('livewire.download-file');
    }
}
