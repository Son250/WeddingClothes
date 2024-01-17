<?php


include 'header.php';
// include 'boxleft.php';
// include 'menu.php';

?>

<?php
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];

    switch ($act) {
        case 'home':

            include "trangchu/home.php";
            break;
        case '':
            include "trangchu/home.php";
            break;
        default:
            include "trangchu/home.php";
            break;
    }
} else {
    include "trangchu/home.php";
}
?>
<?php
include "footer.php";
?>