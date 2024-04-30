<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Dashboard</title>

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
               <!-- importt content header -->
               <?php include(APPPATH . 'Views/templates/backend/content_header.php') ?>

               <!-- Main content -->
               <section class="content">
                    <div class="container-fluid">
                         <!-- Small boxes (Stat box) -->
                         <div class="row">
                              <div class="col-lg-3 col-6">
                                   <!-- small box -->
                                   <div class="small-box bg-info">
                                        <div class="inner">
                                             <h3><?php echo $number_rows ?></h3>

                                             <p>Mading Video</p>
                                        </div>
                                        <div class="icon">
                                             <i class="fas fa-play-circle"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                   </div>
                              </div>
                         </div>
                         <!-- /.row -->


                         <!-- Main row -->
                         <div class="row">
                              <div class="col-lg-12">
                                   <div class="card">
                                        <div class="card-header  bg-dark">
                                             <h1 class="card-title">
                                                  <i class="fa fa-home" style="font-size: 1.5rem;"> Dashboard</i>
                                             </h1>
                                        </div>
                                        <div class="card-body">
                                             <h3>Selamat Datang !</h3>
                                             <div class="table-responsive">
                                                  <table class="table table-borderless ">
                                                       <tr>
                                                            <th width="10%">Nama</th>
                                                            <th width="1%">:</th>
                                                            <td>
                                                                 <p>Admin!</p>
                                                            </td>
                                                       </tr>
                                                  </table>
                                             </div>
                                        </div> <!--card body  -->
                                   </div>
                              </div>
                         </div>
                    </div>
               </section>
          </div>
          <!-- /.content-wrapper -->
          <footer class="main-footer">
               <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
               All rights reserved.
               <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.2.0
               </div>
          </footer>

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
               <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
     </div>
     <!-- ./wrapper -->


     <!-- import js  -->

     <?php include(APPPATH . 'Views/imports/js.php') ?>


</body>

</html>