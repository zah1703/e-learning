<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location: ../view/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>E-LEARNING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <style>
    h2 {
      text-align: center;
  }

</style> -->
</head>
<?php include('navbar.php'); ?>

<body>
    <div style="width: 90%; margin-left: auto; margin-right: auto; margin-top : 7%">
        <div class="container">
            <?php 
    if($_SESSION['level'] == 'dosen') {
    include('v_dosen.php');

    } ?>

            <?php 
    if($_SESSION['level'] == 'mahasiswa') {
    
        include('submit_tugas.php');

     } ?>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
        </div>
</body>

</html>