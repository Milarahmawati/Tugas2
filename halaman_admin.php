<!DOCTYPE html>
<html>
<head>
    <title>Halaman admin - ww.malasngoding.com</title>
</head>
<body>
    <?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
} 

?>
<h1>Halaman Admin</h1>

<p>Halo<b><?php echo $_SESSION['username'];?></b> Anda telah lohin sebagai <b><?php echo $_SESSION['level'];?></b>.</p>
<a href="logout.php">LOGOUT</a>

<br/>
<br/>

<a>Membuat Login Multi Level Dengan PHP</a>
</body>
</html
