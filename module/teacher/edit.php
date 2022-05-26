<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Guru</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href=".">Home</a></li>
                    <li class="breadcrumb-item active">Guru</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="card-title h3 col-8">Edit Guru</div>
                        <div class="col-4">
                            <a href="?m=teacher" class="btn btn-large btn-secondary" style="float: right;"> <i class="fas fa-undo"> </i> &nbsp;Kembali</a>
                        </div>
                    </div>
                    <?php
                    include_once('config.php');
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM teachers WHERE id = '$id'";
                    $result = mysqli_query($config, $sql);
                    $r = mysqli_fetch_assoc($result)
                    ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="?m=teacher&s=update" method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                </div>
                                <input type="number" name="nip" class="form-control" placeholder="Nomor Induk Guru (max 16 digit)*" value="<?= $r['nip'] ?>" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Nama Guru*" value="<?= $r['name'] ?>" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" name="pob" class="form-control" placeholder="Tempat Lahir (isi dengan nama Kabupaten/Kota)" value="<?= $r['pob'] ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                                </div>
                                <input type="date" name="dob" class="form-control" placeholder="Tanggal Lahir" value="<?= $r['dob'] ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                </div>
                                <input type="number" name="phone" class="form-control" placeholder="Nomor Handphone" value="<?= $r['phone'] ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-portrait"></i></span>
                                </div>
                                <img src="assets/images/teachers/small_<?= $r['photo'] ?>" alt="Tanpa Foto" height="74px">
                                <input type="file" name="foto" accept=".jpg" class="form-control">
                                <small>Klik Untuk Mengganti Foto</small>
                            </div>
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-book"></i></span>
                                </div>
                                <select name="subject_id" class="form-control" required>
                                    <option value="">Mata Pelajaran*</option>
                                    <?php
                                    $sql2 = "SELECT * FROM subjects ORDER BY subject ASC";
                                    $query2 = mysqli_query($config, $sql2);
                                    while ($row = mysqli_fetch_array($query2)) {
                                        if($row['id'] == $r['subject_id']){
                                            echo '<option value="'.$row['id'].'" selected>'.$row['subject'].'</option>';
                                        } else {
                                            echo '<option value="'.$row['id'].'">'.$row['subject'].'</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                    <input type="hidden" name="id" value="<?= $r['id'] ?>">
                                    <input type="submit" name="update" class="btn btn-md btn-primary" value="Update">&nbsp;&nbsp;&nbsp;
                                    <input type="reset" class="btn btn-md btn-warning">
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->


        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->