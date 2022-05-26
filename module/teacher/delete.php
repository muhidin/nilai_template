<?php
if (isset($_GET['id'])) {
    require_once('config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM teachers WHERE id = '$id'";
    $sql2 = "SELECT photo FROM teachers WHERE id = '$id'";
    $result2 = mysqli_query($config, $sql2);
    $r2 = mysqli_fetch_assoc($result2);
    if ($r2['photo'] != "") {
        unlink('assets/images/teachers/' . $r2['photo']);
        unlink('assets/images/teachers/small_' . $r2['photo']);
    }
    $result = mysqli_query($config, $sql);
    if ($result) {
        echo "<script>location='?m=teacher&s=view';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); location='?m=teacher&s=view';</script>";
        // var_dump($result);
    }
}