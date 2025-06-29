<?php
include 'header_puskesmas.php';
include 'sidebar.php';

$page = $_GET['page'] ?? 'list';
if ($page == 'form') {
    include 'praktikum_form.php';
} else {
    include 'praktikum_pasien.php';
}

include 'footer_puskesmas.php';
?>
