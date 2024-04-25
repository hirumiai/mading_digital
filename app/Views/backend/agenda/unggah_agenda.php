<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unggah Agenda</title>

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
                            <h1 class="m-0">Agenda</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Agenda</li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('/unggah_agenda') ?>">Unggah Agenda</a></li>
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
                            <i class="fas fa-upload"></i> Unggah Agenda
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama_agenda">Nama Agenda </label>
                                    <input type="text" class="form-control" id="nama_agenda" name="nama_agenda" placeholder="Masukan Nama Agenda">
                                </div>
                                <div class="form-group">
                                    <label for="file_video">File Agenda</label>
                                    <input type="file" class="form-control-file" id="file_video" name="file_video">
                                </div>
                                <div class="d-flex justify-content-end flex-column">
                                    <button class="btn btn-primary mb-2" type="submit" name="agenda_status" value="draft">
                                        Draft
                                    </button>
                                    <button class="btn btn-success" type="submit" name="agenda_status" value="publikasi">
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