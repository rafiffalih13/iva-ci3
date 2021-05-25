<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon.ico"> -->

    <title>Helfina Care</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top flex-md-nowrap">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Helfina Care</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-md-auto">

          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
            </li>

            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
            </li>
          <?php endif; ?>

          <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fa fa-user-circle"></i> Account
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <?php if($this->session->userdata('user_level')==0) : ?>
                   <!-- <div class="dropdown-divider"></div> -->
                   <a class="dropdown-item" href="<?php echo base_url(); ?>admin/index">Admin Page</a>
                   <!-- <div class="dropdown-divider"></div> -->
                  <?php endif; ?>
                  <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="<?php echo base_url(); ?>users/profile">Profile Info</a>
                 <a class="dropdown-item" href="<?php echo base_url(); ?>users/changepassword">Change Password</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="<?php echo base_url(); ?>posts/create">Create Post</a>
                 <a class="dropdown-item" href="<?php echo base_url(); ?>categories/create">Create Category</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="<?php echo base_url(); ?>users/logout">Logout</a>
               </div>
            </li>
          <?php endif; ?>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url(); ?>admin/index">
                  <span data-feather="home"></span>
                  Insights <span></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/user_control">
                  <span data-feather="user"></span>
                  User Control
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/post_control">
                  <span data-feather="file-text"></span>
                  Blog Post Control
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/category_control">
                  <span data-feather="file">(current)</span>
                  Category Control
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/verifikasipost">
                  <span data-feather="search">(current)</span>
                  Verifikasi Post
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/lihat_curhatan">
                  <span data-feather="search">(current)</span>
                  Lihat Curhat
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul> -->

            <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul> -->
          </div>
        </nav>
