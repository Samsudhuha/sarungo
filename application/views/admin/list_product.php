<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Product</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('public/argon-dashboard-master/assets/img/brand/favicon.png') ?>" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url('public/argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css') ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('public/argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('public/argon-dashboard-master/assets/css/argon.css?v=1.2.0') ?>" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          Sarungo
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin') ?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url('product') ?>">
                <i class="ni ni-basket text-primary"></i>
                <span class="nav-link-text">Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('transaction') ?>">
                <i class="ni ni-cart text-primary"></i>
                <span class="nav-link-text">Transaction</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <i class="ni ni-circle-08"></i>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $user['name'] ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <!-- Dark table -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">List Product</h3>
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Add
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('product/store') ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Name</label>
                                <input class="form-control" type="text" name="name" required id="example-text-input">
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Price</label>
                                <input class="form-control" type="number" name="price" required id="example-text-input">
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Stock</label>
                                <input class="form-control" type="number" name="stock" required id="example-text-input">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="form-control-label">Type Product</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                                <option value="">Please select</option>
                                <option value="1">New Arrivals</option>
                                <option value="2">Featured Products</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">File</label>
                                <div class="custom-file">
                                    <input accept="image/*" type="file" class="custom-file-input" id="customFileLang" name="image" lang="en" required>
                                    <label class="custom-file-label" for="customFileLang">Select file</label>
                                </div>
                                <center>
                                    <img id="blah" src="#" alt="your image" style="height: 200px; margin-top:10px"/>
                                </center>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" value="Simpan" class="btn btn-primary" />
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Product Name</th>
                    <th scope="col" class="sort" data-sort="budget">Price</th>
                    <th scope="col" class="sort" data-sort="status">Stock</th>
                    <th scope="col">Image</th>
                    <th scope="col" class="sort" data-sort="type">Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                    <?php for ($i=0; $i < count($data); $i++) { ?>
                        <tr>
                          <th scope="row">
                          <div class="media align-items-center">
                              <div class="media-body">
                                <span class="name mb-0 text-sm"><?php echo $data[$i]->name ?></span>
                              </div>
                            </div>
                          </th>
                          <td class="budget">
                            $<?php echo $data[$i]->price ?>
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <span class="status"><?php echo $data[$i]->stock ?></span>
                            </span>
                          </td>
                          <td>
                          <a href="#">
                                <img alt="Image placeholder" src="<?php echo base_url('image/' . $data[$i]->image) ?>" style="height: 150px;width:auto">
                              </a>
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                                <?php if($data[$i]->type == 1) { ?>
                                    <span class="type">New Arrivals</span>
                                <?php } else { ?>
                                    <span class="type">Featured Products</span>
                                <?php } ?>
                            </span>
                          </td>
                          <td>
                              <div>
                              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?php echo $i ?>">
                                Edit
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo base_url('product/edit') ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Name</label>
                                                <input class="form-control" type="text" name="id" required id="example-text-input" hidden value="<?php echo $data[$i]->id ?>">
                                                <input class="form-control" type="text" name="name" required id="example-text-input" value="<?php echo $data[$i]->name ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Price</label>
                                                <input class="form-control" type="number" name="price" required id="example-text-input" value="<?php echo $data[$i]->price ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Stock</label>
                                                <input class="form-control" type="number" name="stock" required id="example-text-input" value="<?php echo $data[$i]->stock ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Type Product</label>
                                                <select class="form-control" id="example-text-input" name="type" required>
                                                <?php if($data[$i]->type == 1) { ?>
                                                    <option value="1" selected>New Arrivals</option>
                                                    <option value="2">Featured Products</option>
                                                <?php } else { ?>
                                                    <option value="1">New Arrivals</option>
                                                    <option value="2" selected>Featured Products</option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" value="Simpan" class="btn btn-primary" />
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $i ?>">
                                Delete
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Delete Product</h5>
                                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo base_url('product/delete') ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <center>
                                                <h4>Are you sure want to delete product <?php echo $data[$i]->name ?> ? </h4>
                                            </center>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="id" required id="example-text-input" hidden value="<?php echo $data[$i]->id ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" value="Simpan" class="btn btn-primary" />
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                              </div>
                          </td>
                        </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url('public/argon-dashboard-master/assets/vendor/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('public/argon-dashboard-master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('public/argon-dashboard-master/assets/vendor/js-cookie/js.cookie.js') ?>"></script>
  <script src="<?php echo base_url('public/argon-dashboard-master/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') ?>"></script>
  <script src="<?php echo base_url('public/argon-dashboard-master/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url('public/argon-dashboard-master/assets/vendor/chart.js/dist/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('public/argon-dashboard-master/assets/vendor/chart.js/dist/Chart.extension.js') ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url('public/argon-dashboard-master/assets/js/argon.js?v=1.2.0') ?>"></script>
  <script>
      $(document).ready(function()
        {
            $("#blah").hide();
        });
    customFileLang.onchange = evt => {
        const [file] = customFileLang.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
        $("#blah").show();
    }
  </script>
</body>

</html>