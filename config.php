<?php

$db['hostname'] = 'localhost';
$db['username'] = 'root';
$db['password'] = '';
$db['database'] = 'onlineshop';

$db = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']); 
if(!$db){
    echo "Gagal koneksi ke database!";die;
}