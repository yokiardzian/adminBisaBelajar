<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Tambah Kelas</title>

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

           
            <?php 
            include ('layout/sidebar.php')
           ?>
                       <!-- /.navbar-static-side -->
        </nav>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Kelas</h1>
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
                </div>
            </div>
            <div class="input-group">
                <label for"usr">Upload Icon:</label>
                    <span class="btn btn-file">   
                <input type="file"></span>
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
                </div>
            </div>
            <div class="input-group">
                <label for"usr">Upload Icon:</label>
                    <span class="btn btn-file">   
                <input type="file"></span>
            </div>
            
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Bab Baru</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="usr">Judul Bab:</label>
                            <input type="text" placeholder="Contoh: Matematika, IPS" class="form-control" id="usr">
                        <a class="glyphicon glyphicon-plus">Tambah Subbab</a>
                    </div>
                    <div class="form-group">
                        <label for="usr">URL Video:</label>
                            <input type="text" placeholder="Contoh: https://www.youtube.com/watch?v=VPRjCeoBqrI" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="comment">Latihan:</label>
                            <textarea class="form-control" rows="10" id="comment">
                                Lorem ipsum dolor sit amet, vocent complectitur ex eam, ne vim aeterno petentium. Cum semper facete alienum ea, vis graeci ornatus consequuntur id, mei hinc rationibus ad. Nec cu dicat omittantur, ei mei odio paulo, at sed impetus omittam. Eu eum vocent deleniti scaevola, ius fugit option sensibus an, in delenit appetere disputationi pri. Nisl nonumy viderer eu ius, et detracto sapientem vix. Luptatum postulant adversarium est ne.

                                Et eius deserunt salutandi mei, duo id ridens erroribus, eu altera aliquam nominavi eum. Has ea meis forensibus signiferumque. Ferri vitae commune ea mei. Ex populo recteque mei, ne per enim nonumes omittam, labores fastidii ei has. Sit audire intellegat an, ex dicat aeterno fastidii vim.
                            </textarea>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"  checked>
                            A. Jawaban Benar
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            B. Jawaban Salah
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                            C. Jawaban Salah
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                            D. Jawaban Salah
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
                            E. Jawaban Salah
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="comment">Pembahasan:</label>
                            <textarea class="form-control" rows="10" id="comment">
                                Lorem ipsum dolor sit amet, vocent complectitur ex eam, ne vim aeterno petentium. Cum semper facete alienum ea, vis graeci ornatus consequuntur id, mei hinc rationibus ad. Nec cu dicat omittantur, ei mei odio paulo, at sed impetus omittam. Eu eum vocent deleniti scaevola, ius fugit option sensibus an, in delenit appetere disputationi pri. Nisl nonumy viderer eu ius, et detracto sapientem vix. Luptatum postulant adversarium est ne.

                                Et eius deserunt salutandi mei, duo id ridens erroribus, eu altera aliquam nominavi eum. Has ea meis forensibus signiferumque. Ferri vitae commune ea mei. Ex populo recteque mei, ne per enim nonumes omittam, labores fastidii ei has. Sit audire intellegat an, ex dicat aeterno fastidii vim.
                            </textarea>
                    </div>
                    <a class="glyphicon glyphicon-plus">Tambah Soal</a>

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambah Kelas</h1>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Ringkasan:</label>
                            <textarea class="form-control" rows="10" id="comment">
                                Lorem ipsum dolor sit amet, vocent complectitur ex eam, ne vim aeterno petentium. Cum semper facete alienum ea, vis graeci ornatus consequuntur id, mei hinc rationibus ad. Nec cu dicat omittantur, ei mei odio paulo, at sed impetus omittam. Eu eum vocent deleniti scaevola, ius fugit option sensibus an, in delenit appetere disputationi pri. Nisl nonumy viderer eu ius, et detracto sapientem vix. Luptatum postulant adversarium est ne.

                                Et eius deserunt salutandi mei, duo id ridens erroribus, eu altera aliquam nominavi eum. Has ea meis forensibus signiferumque. Ferri vitae commune ea mei. Ex populo recteque mei, ne per enim nonumes omittam, labores fastidii ei has. Sit audire intellegat an, ex dicat aeterno fastidii vim.
                            </textarea>
                    </div>

                    <button type="button" class="btn btn-default">Simpan</button>

                </div>
            </div>
               
        </div>
       

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
