<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mata Pelajaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href=".">Home</a></li>
                    <li class="breadcrumb-item active">Mata Pelajaran</li>
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
                        <div class="card-title h3 col-8">Tambah Mata Pelajaran</div>
                        <div class="col-4">
                            <a href="?m=subject" class="btn btn-large btn-secondary" style="float: right;"> <i class="fas fa-undo"> </i> &nbsp;Kembali</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="?m=subject&s=save" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-copy"></i></span>
                                </div>
                                <input type="text" name="subject" class="form-control" placeholder="Nama Mata Pelajaran*" required autofocus>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-clock"></i></span>
                                </div>
                                <input type="text" name="hour" class="form-control" placeholder="Jam Mata Pelajaran*" maxlength="2" required>
                            </div>
                            <div class="input-group mb-3">
                                    <input type="submit" name="save" class="btn btn-md btn-primary" value="Simpan">&nbsp;&nbsp;&nbsp;
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