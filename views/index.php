<?php
include '_header.php';

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'abc':

            break;
        default:
            include "trangchu/home.php";
            break;
    }
} else {
    include "trangchu/home.php";
}

include "_footer.php";
