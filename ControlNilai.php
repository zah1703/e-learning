<?php
include ('../koneksi.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nilai = $_POST['nilai'];

    $query = mysqli_query($koneksi,"update tugas set nilai='$nilai' where id='$id'");
    if ($query) {
        echo "succes";
    } else {
        echo "Not succes";
    }
}