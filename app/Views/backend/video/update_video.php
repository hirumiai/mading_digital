<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Video</title>

    <!-- import css -->
    <?php include(APPPATH . 'Views/imports/css.php') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- import preloader -->
        <?php include(APPPATH . 'Views/templates/backend/preloader.php') ?>


        <!-- importt navbar -->
        <?php include(APPPATH . 'Views/templates/backend/navbar.php') ?>


        <!-- importt sidebar -->
        <?php include(APPPATH . 'Views/templates/backend/sidebar.php') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Video</h1>
                            <a href="<?php echo site_url('list_video') ?>" class="btn btn-success mt-2">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Video</li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('/upload_video') ?>">Update Video</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-upload"></i> Update Video
                        </div>
                        <?php
                        $session = session();
                        if ($session->getFlashdata('errors') == 'wrong_rule') {
                            echo "<div class='alert alert-danger font-weight-bold text-center'>
                                tolong isi form dengan benar
                                </div>";
                        } else if ($session->errors == 'type_file') {
                            echo "<div class='alert alert-danger font-weight-bold text-center'>
                                Hanya format video yang diperbolehkan
                                </div>";
                        } else if ($session->errors == 'nothing') {
                            echo "<div class='alert alert-danger font-weight-bold text-center'>
                                Silahkan pilih file video
                                </div>";
                        } else if ($session->getFlashdata('errors') == 'no_file_uploaded') {
                            echo "<div class='alert alert-danger font-weight-bold text-center'>
                                Tidak ada file yang diupload
                                </div>";
                        }

                        ?>
                        <div class="card-body">
                            <form action="<?php echo site_url('update_video/process') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="id_video" value="<?php echo $data_video->id_video ?>">
                                <div class="form-group">
                                    <label for="nama_video">Nama video </label>
                                    <input type="text" class="form-control" id="nama_video" name="nama_video" placeholder="Masukan Nama Video" value="<?php echo $data_video->nama_video ?>" require>
                                </div>
                                <div class="form-group">
                                    <label for="file_video">File Video</label>
                                    <input type="file" class="form-control-file" id="file_video" name="file_video" require>
                                </div>
                                <div class="d-flex justify-content-end flex-column">
                                    <button class="btn btn-primary mb-2" type="submit" name="status_video" value="draft">
                                        Draft
                                    </button>
                                    <button class="btn btn-success" type="submit" name="status_video" value="publish">
                                        Publish
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->


        <!-- importt footer -->
        <?php include(APPPATH . 'Views/templates/backend/footer.php') ?>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <!-- import js  -->
    <?php include(APPPATH . 'Views/imports/js.php') ?>

    <script>
        // auto change date by year for footer
        const thisYear = new Date();
        document.getElementById('tanggal').innerHTML = thisYear.getFullYear();
    </script>
</body>

</html>