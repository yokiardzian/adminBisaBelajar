<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dashboard Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw"></i> Kelas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tambahKelas.php">Tambah Kelas</a>
                                </li>
                                <li>
                                    <a href="kelolaKelas.php">Kelola Kelas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw"></i> Tryout<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Tambah Tryout</a>
                                </li>
                                <li>
                                    <a href="#">Kelola Tryout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-fw"></i> Info<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Tambah Info</a>
                                </li>
                                <li>
                                    <a href="#">Kelola Info</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw"></i> Statistik<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Statistik Pengunjung</a>
                                </li>
                                <li>
                                    <a href="#">Statistik</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Kelas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Pilih Kategori</h3>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="SD" value="option1"> SD
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="SMP" value="option2"> SMP
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="SMA" value="option3"> SMA
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="UN" value="option3"> UN
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="SBMPTN" value="option3"> SBMPTN
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="SBMPTN" value="option3"> Lain-lain
                    </label>
                    <br>
                    <a class="glyphicon glyphicon-plus">Tambah Kategori</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>Pilih Pelajaran</h3>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="SD" value="option1"> MTK
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="SMP" value="option2"> IPA
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="SMA" value="option3"> IPS
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="UN" value="option3"> B. INGGRIS
                    </label>
                    <br>
                    <a class="glyphicon glyphicon-plus">Tambah Pelajaran</a>
                </div>
            </div>
            
            <br>

            <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>Sistem Persamaan Linear Dua Variabel</td>
                    <td><a link="">Edit</a> | <a link="">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>Sistem Persamaan Linear Tiga Variabel</td>
                    <td><a link="">Edit</a> | <a link="">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>Sistem Persamaan Linear X Variabel</td>
                    <td><a link="">Edit</a> | <a link="">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>Sistem Persamaan Linear Y Variabel</td>
                    <td><a link="">Edit</a> | <a link="">Hapus</a></td>
                  </tr>
                  <tr>
                    <td>Sistem Persamaan Linear Z Variabel</td>
                    <td><a link="">Edit</a> | <a link="">Hapus</a></td>
                  </tr>
                </tbody>
            </table>
       

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
