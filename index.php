
<?php
session_start();
include "koneksi.php";
if(isset($_SESSION['id_admin'])==0){
  echo '<script>alert("Maaf...Untuk Masuk Ke Halaman Administrator Anda Harus Login Terlebih Dahulu !!!");
  window.location.href="login.php"</script>';
}else{
  //$query  = mysqli_query($koneksi,"SELECT * FROM admin WHERE id_admin='".$_SESSION['id_admin']."'");
  //$row    = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRESTASI SISWA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
        include("koneksi.php");
        include("function.php");
        menu();

        if(isset($_GET['carisis'])){
            include("siswa.php");
        } else if(isset($_GET['carigur'])){
            include("guru.php");
        } else if(isset($_GET['carijen'])){
            include("jenis.php");
        } else if(isset($_GET['cariclu'])){
            include("club.php");
        } else if(isset($_GET['caripres'])){
            include("prestasi.php");
        } else if(isset($_GET['hal'])){
            $hal=$_GET['hal'];
            if($hal=='siswa'){
                include("siswa.php");
            } else if($hal=='sistambah'){
                include("siswa_tambah.php");
            } else if($hal=='sisedit'){
                include("siswa_edit.php");
            } else if($hal=='sishapus'){
                include("siswa_hapus.php");
            }
            $hal=$_GET['hal'];
            if($hal=='guru'){
                include("guru.php");
            }else if($hal=='gurtambah'){
                include("guru_tambah.php");       
            } else if($hal=='guredit'){
                include("guru_edit.php");
            } else if($hal=='gurhapus'){
                include("guru_hapus.php");
            }
            $hal=$_GET['hal'];
            if($hal=='jenis'){
                include("jenis.php");
            } else if($hal=='jentambah'){
                include("jenis_tambah.php");
            } else if($hal=='jenedit'){
                include("jenis_edit.php");
            } else if($hal=='jenhapus'){
                include("jenis_hapus.php");
            }
            $hal=$_GET['hal'];
            if($hal=='club'){
                include("club.php");
            } else if($hal=='clutambah'){
                include("club_tambah.php");
            } else if($hal=='cluedit'){
                include("club_edit.php");
            } else if($hal=='cluhapus'){
                include("club_hapus.php");
            }
            $hal=$_GET['hal'];
            if($hal=='prestasi'){
                include("prestasi.php");
            } else if($hal=='prestambah'){
                include("prestasi_tambah.php");
            } else if($hal=='presedit'){
                include("prestasi_edit.php");
            } else if($hal=='preshapus'){
                include("prestasi_hapus.php");
            }

        }else{
        beranda();
        }
        
        footer();
        ?>
  </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>

<?php } ?>
