<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "tokobuku";

    mysqli_connect($server, $user, $password, $database) OR DIE ("koneksi Gagal");