<?php

echo "Jest jak jest";


$local_file = "test.txt";
$server_file = "test.txt";
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
