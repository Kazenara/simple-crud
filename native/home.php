<?php
require ('koneksi.php');
// $email  = $_GET['user_fullname'];
?>
<html>
    <head>
        <title>Home</title>
    </head>
<body>
    <h1>Selamat Datang</h1>
    <table border='1'>
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Nama</td>
            <td></td>
        </tr>
        <?php
        $query  = "SELECT * FROM user_detail";
        $result = mysqli_query($koneksi, $query);
        $no     = 1;

        while ($row = mysqli_fetch_array($result)) {
            $userMail = $row['user_email'];
            $userName = $row['user_fullname'];
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $userMail; ?></td>
            <td><?php echo $userName; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>">hapus</a>
            </td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </table>
    <br>
    <button><a href="login.php">Log Out</a></button>
</body>
</html>

<!-- <?php echo $email;?> -->
<!-- semua session dimulai dari start $_session, setelah pakai $_SESSION itu nama session value disimpan divariabel atau langsung diberi nilai -->

