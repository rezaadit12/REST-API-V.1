<?php

$dataDiri = [
    [
        "nama" => "Muhamad Reza Aditya",
        "nis" => 12209186,
        "email" => "rezaaditya@smkwikrama.sch.id"
    ],
    [
        "nama" => "Muhamad Reza Aditya",
        "nis" => 12209186,
        "email" => "rezaaditya@smkwikrama.sch.id"
    ]
];

/**
 *  UNTUK ARRAY DI ATAS BISA JUGA DIGANTI DENGAN DATA DI DATABASE
 */

// json_encode = untuk mengubah array menjadi json
$data = json_encode($dataDiri);
echo $data;