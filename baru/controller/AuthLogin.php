<?php
session_start();
include ('../koneksi.php');


if (isset($_POST['submit'])) {

    /*
        kita melakukan filter terlebih dahulu untuk mengindari
        serangan peretas dengan kode bypass dengan kode di bawah
    */
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    /*
        Dan akan melakukan query jika di rasa aman
        melakukan pengecekan username
    */

        $data = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
        $row = mysqli_fetch_assoc($data);

    /*
        Data login di simpan dalam bentuk session
    */

        $_SESSION['login'] = $_POST['submit'];
        $newuser = $row['username'];

    /*
        Melakukan pengecekkan user jika username 
        tidak di temukan di dalam databse maka
        akan di redirect ke halaman kembali
    */
        if (!$newuser) {
          echo "<script>
          alert('Username Tidak Ada');
          window.location.href='../view/login.php';
          </script>";
      }

      if (mysqli_num_rows($data) > 0) {

    /* 
       kode di atas jika di baca 
       if = jika mysqli_num_rows($data) > 0 artinya jika nilai yang di tampilkan
       lebih besar dari 0 maka artinya ada data akan di ambil data seperti kode
       di bawah
    */

       if ($password == $row['password']) {

             /*
                variabel password akan melakukan pengecekan 
                jika password sama dari yang di inputkan user 
                maka akan melakukan pengambilan data dalam bentuk
                session
             */

                // $_SESSION['id'] = $row['id'];
                // $_SESSION['NRP'] = $row['NRP'];
                // $_SESSION['Nama'] = $row['Nama'];
                // $_SESSION['Jenis_Kelamin'] = $row['Jenis_Kelamin'];
                // $_SESSION['Jurusan'] = $row['Jurusan'];
                // $_SESSION['Email'] = $row['Email'];
                // $_SESSION['Alamat'] = $row['Alamat'];
                // $_SESSION['No_Hp'] = $row['No_Hp'];
                // $_SESSION['Asal_SMA'] = $row['Asal_SMA'];                
                $_SESSION['level'] = $row['level'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['user_id'] = $row['id'];
 
                setcookie($_SESSION['username'], $_SESSION['password'], time() + (60 * 60), "/"); // 60 second * 60 = 1 Jam

             /*
                 Redirect to halaman dasboard
             */
                 echo "<script>
                 alert('Succes Log in');
                 window.location.href='../view/admin/dashboard.php';
                 </script>"; 
                 exit();

             }else {

             /*
                 Jika salah maka akan di Redirect 
                 to halaman login kembali
             */
                 echo "<script>
                 alert('Password Salah');
                 window.location.href='../view/login.php';
                 </script>"; 
                 
             }


         }

     }

     