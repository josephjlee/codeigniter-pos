<i class="fas fa-user-circle"></i>  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cash-register"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><h1>POS</h1></div>
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'user/index' ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <!-- Divider -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'user/customer'?>">
            <i class="fas fa-user"></i>
            <span>Customer</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'user/product'?>">
              <i class="fas fa-poll-h"></i>
              <span>Product</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'user/category'?>">
               <i class="fas fa-poll"></i>
               <span>Category</span></a>
             </li>

             <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'user/sale'?>">
                <i class="fas fa-funnel-dollar"></i>
                <span>Sale</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'user/sale_item' ?>">
                  <i class="fas fa-archive"></i>
                  <span>Sale Item</span></a>
                </li>

              </ul>
              <!-- End of Sidebar -->

              <!-- Content Wrapper -->
              <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                  <!-- Topbar -->
                  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                      <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                        <a href="#" class="nav-link dropdown-toggle" id="user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "<b>".$this->session->userdata('name'); ?></b></span>
                          <i class="fas fa-user-circle"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                          <a class="dropdown-item" href="<?php echo base_url().'user/logout'?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                          </a>
                        </div>
                      </li>

                    </ul>

                  </nav>
                  <!-- End of Topbar -->
                  <!-- Begin Page Content -->
                  <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h1 mb-0 text-dark">Category Products</h1>
                    </div> 
                    <br/> 
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">Category Lists</h6>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                             <tr> 
                              <th>No</th> 
                              <th>Name</th> 
                              <th>Created at</th> 
                              <th>Updated at</th>
                              <th></th>
                            </tr> 
                          </thead> 
                          <tbody> 
                           <?php 
                           $no = 1; 
                           foreach($categories as $c){ 
                            ?> 
                            <tr> 
                             <td><?php echo $no++; ?></td> 
                             <td><?php echo $c->name ?></td> 
                             <td><?php echo $c->created_at ?></td> 
                             <td><?php echo $c->updated_at ?></td>
                             <td> 
                              <a class="btn btn-sm btn-warning" href="<?php echo base_url().'user/category_edit/'.$c->id; ?>"><span class="glyphicon glyphicon-wrench"></span> Edit</a> 
                              <a class="btn btn-sm btn-danger" href="<?php echo base_url().'user/category_delete/'.$c->id; ?>"><span class="glyphicon glyphicon-trash"></span> delete</a> 
                            </td> 
                          </tr> 
                          <?php 
                        } 
                        ?> 
                      </tbody>
                    </table>
                    <a href="<?php echo base_url().'user/category_add'; ?>" class="btn btn-sm btn-primary"><span class='glyphicon glyphicon-plus'></span> New Category</a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; Harris Hendrato 2019</span>
              </div>
            </div>
          </footer>
        </div>
      </div>
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="<?php echo base_url().'user/logout'?>">Logout</a>
            </div>
          </div>
        </div>
      </div> 