          <!-- Main Sidebar Container -->
          <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
              <!-- Brand Logo -->
              <a href="<?php echo site_url('/dashboard') ?>" class="brand-link">
                  <span class="brand-text font-weight-light">MADING DISPUSIP</span>
              </a>

              <!-- Sidebar -->
              <div class="sidebar">
                  <!-- Sidebar Menu -->
                  <nav class="mt-2">
                      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                          <li class="nav-item">
                              <a href="<?php echo site_url('/dashboard') ?>" class="nav-link">
                                  <i class="nav-icon fas fa-tachometer-alt"></i>
                                  <p>
                                      Dashboard
                                  </p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="nav-icon fas fa-copy"></i>
                                  <p>
                                      Video
                                      <i class="fas fa-angle-left right"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="<?php echo site_url('list_video') ?>" class="nav-link">
                                          <i class="far nav-icon"></i>
                                          <p>List Video</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?php echo site_url('unggah_video') ?>" class="nav-link">
                                          <i class="far nav-icon"></i>
                                          <p>Unggah Video</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-chart-pie"></i>
                                  <p>
                                      Agenda
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="<?php echo site_url('list_agenda') ?>" class="nav-link">
                                          <i class="far nav-icon"></i>
                                          <p>List Agenda</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?php echo site_url('unggah_angenda') ?>" class="nav-link">
                                          <i class="far nav-icon"></i>
                                          <p>Unggah Agenda</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo site_url('logout') ?>" class="nav-link">
                                  <i class="nav-icon fas fa-sign-out-alt"></i>
                                  <p>
                                      Log Out
                                  </p>
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
          </aside>