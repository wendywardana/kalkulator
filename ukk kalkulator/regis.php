<?php
include 'config.php';
if(isset($_POST['submit'])){
    $nm=$_POST['nama'];
    $em=$_POST['email'];
    $p=$_POST['pass'];
    $sel="SELECT * FROM user WHERE email='$em'";
    $cek=mysqli_query($conn,$sel);
    if(mysqli_num_rows($cek) > 0){
        echo '<script>alert("Data anda sudah ada")</script>';
    }else{
        $ins="INSERT INTO user VALUES(null,'$nm','$em','$p')";
        mysqli_query($conn,$ins);
        header('Location:login.php');
    }
}
?>
<html>
    <head>
            <title>login</title>
    </head>
    <body>
        <h1>Halaman Register</h1>
        <center>
        <form action="" method="post">
            <label for="">Nama :</label>
            <input type="text" name="nama"><br>
            <label for="">Email :</label>
            <input type="email" name="email"><br>
            <label for="">Password :</label>
            <input type="password" name="pass"><br>
            <input type="submit" name="submit">
            <p>Jika sudah punya akun silahkan <a href="login.php">login</a></p>         
        </form>
        </center>
    </body>
</html>