<?php
if (isset($_POST['save'])) {
    include('config.php');
    $subject = $_POST['subject'];
    $hour = $_POST['hour'];

    $sql = "INSERT INTO subjects (subject, hour) VALUES ('$subject', '$hour')";
    if (mysqli_query($config, $sql)) {
        echo '<script>window.location.href="?m=subject&s=view"</script>';
    } else {
        echo '<script>alert("Data gagal disimpan!"); window.location.href="?m=subject&s=add"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}