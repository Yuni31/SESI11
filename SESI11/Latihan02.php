<?php
    $data [0] ["NAMA"] = "YUNI";
    $data [0] ["TGL_LAHIR"] = "2004-07-31";
    $data [0] ["JKEL"] = "P";
    $data [0] ["ALAMAT"] = "KLUNGKUNG";
    $data [0] ["ZODIAK"] = "LEO";

    $data [1] ["NAMA"] = "DADE";
    $data [1] ["TGL_LAHIR"] = "2004-02-04";
    $data [1] ["JKEL"] = "L";
    $data [1] ["ALAMAT"] = "KLUNGKUNG";
    $data [1] ["ZODIAK"] = "CAPRICORN";

    $data [2] ["NAMA"] = "TEDY";
    $data [2] ["TGL_LAHIR"] = "1992-08-23";
    $data [2] ["JKEL"] = "L";
    $data [2] ["ALAMAT"] = "KLUNGKUNG";
    $data [2] ["ZODIAK"] = "VIRGO";

    $data [3] ["NAMA"] = "CHANDRA";
    $data [3] ["TGL_LAHIR"] = "2019-07-01";
    $data [3] ["JKEL"] = "L";
    $data [3] ["ALAMAT"] = "KLUNGKUNG";
    $data [3] ["ZODIAK"] = "CANCER";


    header("Content-type: application/json; charset=utf-8");

    echo json_encode ($data);