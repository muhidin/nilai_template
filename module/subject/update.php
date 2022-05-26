<?php
if (isset($_POST['update'])) {
    include('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hour = $_POST['hour'];

    $sql = "UPDATE subjects SET subject='$subject', hour='$hour' WHERE id='$id'";
    if (mysqli_query($config, $sql)) {
        echo '<script>window.location.href="?m=subject&s=view"</script>';
    } else {
        echo '<script>alert("Data gagal diupdate!"); window.location.href="?m=subject&s=add"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}