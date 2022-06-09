<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/img/favicon.png">
	<title>
		
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- Nucleo Icons -->
	<link href="<?= base_url(); ?>/assets/styles/css/nucleo-icons.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>/assets/styles/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<link href="<?= base_url(); ?>/assets/styles/css/font-awesome.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>/assets/styles/css/nucleo-svg.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="<?= base_url(); ?>/assets/styles/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="login-page">
<!-- Navbar -->
	<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark py-2">
		<div class="container">
		<a class="navbar-brand" href="<?= base_url(); ?>/Home/">Information Technology Journal</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url(); ?>/Home/">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">User Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Search</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Current</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Archives</a>
			</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link" data-toggle="dropdown" role="button">
					<i class="ni ni-collection d-lg-none"></i>
					<?php if (!empty(session()->get('username'))) : ?>
						<span class="nav-link-inner--text">Hi, <?= session()->get('username'); ?></span>
					<?php else : ?>
						<span class="nav-link-inner--text">Account</span>
					<?php endif; ?>
				</a>
				<div class="dropdown-menu">
					<?php if (!empty(session()->get('username'))) : ?>
						<a href="<?= base_url(); ?>/Log/logout" class="dropdown-item">Logout</a>
					<?php else : ?>
						<a href="<?= base_url(); ?>/Home/login" class="dropdown-item">Login</a>
					<?php endif; ?>
						<a href="<?= base_url(); ?>/Home/register" class="dropdown-item">Register</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
	<!-- End Navbar -->
    <?= $this->renderSection('content'); ?>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    
  
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    
    <!-- Section: Form -->

    <!-- Section: Text -->
    
    
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row align-items-start">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-blue">NOTIFICATIONS</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">View</a>
            </li>
            <!-- <li>
              <a href="#!" class="text-white">Suscribe</a>
            </li> -->
            <li>
              <a href="#!" class="text-white">Manage</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-blue">Browse</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">By Issue</a>
            </li>
            <li>
              <a href="#!" class="text-white">By Author</a>
            </li>
            <li>
              <a href="#!" class="text-white">By Title</a>
            </li>
            <li>
              <a href="#!" class="text-white">Other Journals</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-blue">information</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">For Readers</a>
            </li>
            <li>
              <a href="#!" class="text-white">For Authors</a>
            </li>
            <li>
              <a href="#!" class="text-white">For Librarians</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-blue">user</h5>

          <ul class="list-unstyled mb-0">
            <?php if (!empty(session()->get('username'))) : ?>
            <li>
              <a href="<?= base_url(); ?>/User/logout" class="text-white">Logout</a>
            </li>
            <?php else : ?>
            <li>
              <a href="<?= base_url(); ?>/Pages/login" class="text-white">Login</a>
            </li>
            <?php endif; ?>
            <li>
              <a href="#!" class="text-white">My Journals</a>
            </li>
            <li>
              <a href="#!" class="text-white">My Profile</a>
            </li>
          </ul>
        </div>
       
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    
    <a class="text-white" href="https://mdbootstrap.com/"></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->