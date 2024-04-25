<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Video</title>

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
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Video</li>
                                <li class="breadcrumb-item"><a href="<?php echo site_url('list_video') ?>">List Video</a></li>
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
                            <i class="far fa-list-alt"></i> List Video
                        </div>
                        <div class="card-body">
                            <!-- Show list of category -->
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">NO</th>
                                        <th>Nama Video</th>
                                        <th>Video</th>
                                        <th>Status</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Nama Video Disini
                                        </td>
                                        <td>
                                            Ini adalah video
                                        </td>
                                        <td>
                                            Publish
                                        </td>
                                        <td>
                                            <div class="btn-group " role="group" aria-label="Action buttons">
                                                <a href="" class="btn btn-sm btn-success mr-1" target="_blank"><i class="nav-icon fas fa-eye"></i></a>
                                                <a href="" class="btn btn-sm btn-warning mr-1"><i class="nav-icon fas fa-edit"></i></a>
                                                <form action="" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="nav-icon fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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