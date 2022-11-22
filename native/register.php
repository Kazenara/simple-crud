<?php
require ('koneksi.php');
if ( isset($_POST['register']) ) {
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_name'];

    $query  = "INSERT INTO user_detail VALUES ('','$userMail','$userPass','$userName',3)";
    // " " yang kosong itu adalah id. biar dia otomatis. kalau gabisa regis dispesifikkan 
    $result = mysqli_query($koneksi, $query);
    header ('location: login.php');
    // header location dimatikan biar tau errornya dimana.
}
?>
<html>
<head>
    <tittle>Register</tittle>
</head>
<body>
    <form action="register.php" method="POST">
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" require></p>
        <p>password : <input type="password" name="txt_pass" require></p>
        <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_name" require></p>
        <p>level : <select name="level" id=""><?php
        $query = "SELECT * FROM level_detail";
        $result = mysqli_query($koneksi, $query);
        while($rows = mysqli_fetch_array($result)) {
            $idlevel = $rows ['id_level'];
            $level   = $rows ['level'];
        }
        ?><option value=""></option>
        </p></select>
        <!--value yang ditangkap bukan admin atau user, tapi satu atau duanya  -->
        <button type="submit" name="register">REGISTER</button>
    </form>
    <p>Do you have an account? <a href="login.php">login</a></p>
</body>
</html>
<!-- session : untuk manajemen user.
tidak semua orang punya hak akses yang sama  -->