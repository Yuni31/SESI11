<?php
    $data ["NAMA"] = "YUNI";
    $data ["TGL_LAHIR"] = "2004-07-31";
    $data ["JKEL"] = "P";
    $data ["ALAMAT"] = "KLUNGKUNG";
    $data ["ZODIAK"] = "LEO";

    header("Content-type: application/json; charset=utf-8");

    echo json_encode ($data);