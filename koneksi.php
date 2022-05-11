<?php
define('SERVERNAME', 'localhost');
define('HOSTNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'mydb');
define('TABLE', 'buku_tamu');

$MySQli = new mysqli(SERVERNAME,HOSTNAME,PASSWORD,DATABASE);

if ($MySQli->connect_errno) {
	echo "Gagal koneksi database MySQL karena : ";
	echo $MySQli->connect_error;
}else {
	echo "Koneksi berhasil";
}
?>