<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sadarberbagi | Login</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!--Font Awesome-->
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../ ../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="../assets/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!--Favicon-->
      <link rel="icon" href="../assets/ico/favicon.ico" style="width:16px;height:16px">


      <style type="text/css">
        .omb_login .omb_loginOr {
          position: relative;
          font-size: 1.5em;
          color: #aaa;
          margin-top: 1em;
          margin-bottom: 1em;
          padding-top: 0.5em;
          padding-bottom: 0.5em;
        }
        .omb_login .omb_loginOr .omb_hrOr {
          background-color: #cdcdcd;
          height: 1px;
          margin-top: 0px !important;
          margin-bottom: 0px !important;
        }
        .omb_login .omb_loginOr .omb_spanOr {
          display: block;
          position: absolute;
          left: 50%;
          top: -0.6em;
          margin-left: -1.5em;
          background-color: white;
          width: 3em;
          text-align: center;
        }

      </style> 

    </head>

    <body>

      <!--NAVBAR-->
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default" style="height:100%">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <img src="../assets/img/logo-sadarberbagi.png" style="width:175px;height:62px"> $nbsp
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="../pages">HOME <span class="sr-only">(current)</span></a></li>
              <li><a href="../pages/mulaifundrising">SAYA MAU FUNDRISING</a></li>
              <li><a href="../pages/campaign">LIHAT CONTOH</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cari Campaign">
              </div>
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="../pages/masuk">MASUK</a></li>
              <li><a href="../pages/daftar">DAFTAR</a></li>
              <li><a href="../pages/cekstatusdonasi">STATUS DONASI</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!--/NAVBAR-->

      <!--CONTAIN-->

      <!--CONTENT LOGIN-->
      <div style="background-color:#F2F3F5">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <br>
              <div class="well" style="background-color:white">
               <form class="form-horizontal">
                 <center>
                  <h3>Selamat Datang!</h3>
                  <p>Silakan login untuk mengakses semua fitur sadarberbagi.com</p>


                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <a href="#">Lupa Password?</a>
                  </div>


                  <button type="button" class="btn btn-success btn-block">Masuk</button>
                </form>

                <div class="row omb_row-sm-offset-3 omb_loginOr">
                  <div class="col-xs-12 col-sm-12">
                    <hr class="omb_hrOr">
                    <span class="omb_spanOr">ATAU</span>
                  </div>
                </div>
                <br>

                <a href="#" class="btn btn-info btn-block">
                  <i class="fa fa-facebook-square"></i> LOG-IN WITH FACEBOOK
                </a>
                <small>Kami tidak akan posting apapun di facebook anda kecuali dengan izin anda.</small>

                <!--Divider-->
                <div class="row omb_row-sm-offset-3 omb_loginOr">
                  <div class="col-xs-12 col-sm-12">
                    <hr class="omb_hrOr">
                  </div>
                </div>

                <p>Belum Punya Akun? <a href="../pages/daftar">Daftar</a></p>

              </center>

            </div>


          </div>
        </div>
      </div>
    </div>


    <!--CONTENT 6-->

    <div class="jumbotron" style="background-color:#022646">
     <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h3 style="color:#EEE2EC">Tentang Kami</h3>
          <a href="#">Apa itu Sadarberbagi?</a><br>
          <a href="#">Tim Kami</a><br>
          <a href="#">Karir</a><br>
          <a href="#">Partner</a><br>
          <a href="#">Artikel</a><br>
          <a href="#">Blog</a>
        </div>

        <div class="col-lg-3">
          <h3 style="color:#EEE2EC">Menggalang Dana</h3>
          <a href="#">Buat Campaign</a><br>
          <a href="#">Cek Status Donasi</a><br>
          <a href="#">Syarat dan Ketentuan</a><br>
          <a href="#">Kebijakan Privasi</a><br>
          <a href="#">Live Support</a><br>
        </div>

        <div class="col-lg-3">
          <h3 style="color:#EEE2EC">Hubungi Kami</h3>
          <p style="color:#43ABA4;font-size:14px">
            PT. Sadar Berbagi Indonesia<br>
            Jl. Keputih Tegal Bakti II/3A, Sukolilo, Surabaya<br>
            Telepon: 0896 7909 3686<br>
            Email: support@sadarberbagi.com<br>
            Google Maps: ktbs.in/maps
          </p>
        </div>

        <div class="col-lg-3">
          <h3 style="color:#EEE2EC">Lihat Channel kami di</h3>
          <img src="../assets/img/logo-fb.png" style="width:60px;height:60px">
          <img src="../assets/img/logo-twitter.png" style="width:60px;height:60px">
          <img src="../assets/img/logo-instagram.png" style="width:60px;height:60px">
          <img src="../assets/img/logo-youtube.png" style="width:60px;height:60px">
        </div>
      </div>
    </div>

    <br><br>
    <div class="container">
      <center>
        <p style="background-color:#EEE2EC;height:0.5px"></p>
        <p style="color:#EEE2EC;font-size:12px;">COPYRIGHT &copy; 2015 PT. SADAR BERBAGI INDONESIA ALL RIGHTS RESERVED</p>
      </center>
    </div>

  </div>
  <!--/CONTAIN-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the user load faster -->
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    
  </body>
  </html>
