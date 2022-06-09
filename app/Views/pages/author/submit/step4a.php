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
    Argon Design System by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url(); ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?= base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>/assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark py-2">
    <div class="container">
      <a class="navbar-brand" href="#">Information Technology Journal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
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
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Account</span>
            </a>
            <div class="dropdown-menu">
              <a href="<?= base_url(); ?>/examples/login.html" class="dropdown-item">Login</a>
              <a href="<?= base_url(); ?>/examples/register.html" class="dropdown-item">Register</a>
              <a href="<?= base_url(); ?>/examples/register.html" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>
  <!-- End Navbar -->

  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="page-header">
        <h2 class="text-center">Add a Supplementary File</h2>
        <hr>

        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <form action="<?= base_url() ?>/ejurnal_save/save_4a/<?= $id; ?>" method="post">
              
              <input type="submit" name="submit" value="←Back" class="button btn btn-primary btn-sm mb-5" />
            </form>
          </div>
        </div>

        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">

            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="textField" class="form-control" name="title" value="Untitled">
              </div>
              <div class="form-group">
                <label for="creator">Creator (or owner) of file</label>
                <input type="textField" class="form-control" id="creator" name="creator">
              </div>
              <div class="form-group">
                <label for="title">Keywords</label>
                <input type="textField" class="form-control" name="keywords">
              </div>
              <div class="form-group">
                <label for="subject">Subjects</label>
                <input type="textField" class="form-control" id="subject" name="subject">
              </div>
              <div class="select_menu">
                <label class="mr-3 mt-3 mb-3" for="type">Type</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="type">
                  <option label="Research Instrument" value="Research Instrument" selected="selected">Research Instrument</option>
                  <option label="Research Materials" value="Research Materials">Research Materials</option>
                  <option label="Research Results" value="Research Results">Research Results</option>
                  <option label="Transcripts" value="Transcripts">Transcripts</option>
                  <option label="Data Analysis" value="Data Analysis">Data Analysis</option>
                  <option label="Data Set" value="Data Set">Data Set</option>
                  <option label="Source Text" value="Source Text">Source Text</option>
                  <option label="Other" value="">Other</option>
                </select>
                <br />Specify other: <input type="text" name="typeother" value="" size="45" maxlength="255" class="textField"/>
              </div>
              <div class="form-group">
                <label class="mt-3 mb-3" for="Brief_description">Brief description</label>
                <textarea class="form-control" id="Brief_description" rows="3" name="brief_description"></textarea>
              </div>
              <tr valign="top">
                <td class="label">
                  <label for="dateCreated">
                    Date </label>
                </td>
                <td class="value">
                  <input type="text" id="dateCreated" name="date_created" value="" size="11" maxlength="10" class="textField" /> YYYY-MM-DD
                  <br />
                  <span class="instruct">Date when data was collected or instrument created.</span>
                </td>
              </tr>
            </form>
              
              <hr>
              
              <h4>Supplementary File</h4>
              
              <table>
                <tr>
                  <td>Nama File: </td>
                  <td name="filename"><?= $filedata->filename; ?></td>
                </tr>
                <tr>
                  <td>Original: </td>
                  <td name="original"><?= $filedata->original; ?></td>
                </tr>
                <tr>
                  <td>Size: </td>
                  <td name="size"><?= $filedata->size; ?></td>
                </tr>
                <tr>
                  <td>Date Uploaded: </td>
                  <td><?= $filedata->date_uploaded; ?></td>
                </tr>
              </table>
              
              <hr>

              <form action="<?= base_url() ?>/ejurnal_save/step4a_replace/<?= $id; ?>" method="post" enctype="multipart/form-data">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile03" name="filename">
                  <label class="custom-file-label" for="inputGroupFile03">Replace file</label>
                  <small class="mb-3">Use Save to upload file.</small>
                </div>
                
                <br>
                
                <table>
                  <tr>
                    <td>
                      <input type="submit" name="submit" value="Save and continue" class="button btn btn-primary btn-sm mr-3" />
                    </td>
              </form>
              
                <td>
                  <form action="<?= base_url() ?>/AuthorController/" method="post">
                    <input type="submit" name="submit" value="Cancel" class="button btn btn-primary btn-sm" />
                  </form>
                </td>
              </tr>
            </table>
            <br>



          </div>
        </div>
      </div>

    </div>
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
                <li>
                  <a href="#!" class="text-white">Suscribe</a>
                </li>
                <li>
                  <a href="#!" class="text-white">manage</a>
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
                <li>
                  <a href="#!" class="text-white">login</a>
                </li>
                <li>
                  <a href="#!" class="text-white">logout</a>
                </li>
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
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url(); ?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>/assets/js/plugins/moment.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>/assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="<?= base_url(); ?>ttps://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?= base_url(); ?>/assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="<?= base_url(); ?>ttps://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>