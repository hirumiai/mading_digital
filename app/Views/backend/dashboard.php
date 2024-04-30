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
                              <!-- Left col -->

                              <!-- /.Left col -->
                              <!-- right col (We are only adding the ID to make the widgets sortable)-->
                              <section class="col-lg-5 connectedSortable">

                                   <!-- Calendar -->
                                   <div class="card bg-gradient-success">
                                        <div class="card-header border-0">

                                             <h3 class="card-title">
                                                  <i class="far fa-calendar-alt"></i>
                                                  Calendar
                                             </h3>
                                             <!-- tools card -->
                                             <div class="card-tools">
                                                  <!-- button with a dropdown -->
                                                  <div class="btn-group">
                                                       <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                                            <i class="fas fa-bars"></i>
                                                       </button>
                                                       <div class="dropdown-menu" role="menu">
                                                            <a href="#" class="dropdown-item">Add new event</a>
                                                            <a href="#" class="dropdown-item">Clear events</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item">View calendar</a>
                                                       </div>
                                                  </div>
                                                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                                       <i class="fas fa-minus"></i>
                                                  </button>
                                             </div>
                                             <!-- /. tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body pt-0">
                                             <div id="calendar" style="width: 100%"></div>
                                        </div>
                                   </div>
                              </section>
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