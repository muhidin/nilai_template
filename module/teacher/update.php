<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    include('func/upload.php');

    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $subject_id = $_POST['subject_id'];
    $location = $_FILES['foto']['tmp_name'];
    $filename = $_FILES['foto']['name'];
    $filetype = $_FILES['foto']['type'];

    if (empty($location)) {
        $sql = "UPDATE teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', phone='$phone', subject_id='$subject_id' WHERE id='$id'";
    } else {
        $folder = "assets/images/teachers/";
        $size = 100;
        UploadFoto($filename, $folder, $size);
        $sql = "UPDATE teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', phone='$phone', photo='$filename', subject_id='$subject_id' WHERE id='$id'";
    }

    if (mysqli_query($config, $sql)) {
        echo '<script>window.location.href="?m=teacher&s=view"</script>';
    } else {
        echo '<script>alert("Data gagal diupdate!"); window.location.href="?m=teacher&s=add"</script>';
        // var_dump($sql);
    }
} else {
    echo '<script>window.history.back()</script>';
}