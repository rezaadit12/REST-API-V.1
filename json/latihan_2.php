<?php

// file_get_contents = untuk mengambil data

$data = file_get_contents('coba.json'); // bisa juga mengambil dari link 

$siswa = json_decode($data, true); // jika tidak ditambah "true" maka akan menjadi object bukan array


var_dump($siswa);

