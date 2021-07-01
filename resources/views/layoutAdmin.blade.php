<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title') </title>
    <link href='{{ asset("css/bootstrap.css")}}' rel="stylesheet" />
    <link href='{{ asset("css/font-awesome.css")}}' rel="stylesheet" />
    <link href='{{ asset("css/basic2.css")}}' rel="stylesheet" />
    <link href='{{ asset("css/custom.css")}}' rel="stylesheet" />
    <!-- <link href='../http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->

    <!-- TABLE STYLES-->
    <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="font-size : 16px" class="navbar-brand" href="#">SHOES ID</a>
            </div>

            <div class="header-right">

            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="/admin"><i class="fa fa-dashboard "></i> Home </a>
                    </li> 
                    
                    <li>
                        <a href="/barang"><i class="fa fa-book "></i> Item</a>
                    </li> 
                    <li>
                        <a href="/tambah_barang"><i class="fa fa-book "></i> Tambah Item</a>
                    </li> 
                    

                    <li>
                        <a href="#"><i class="fa fa-table"></i>Laporan <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <li>
                                <a href="/admin/pembayaran"><i class="fa fa-circle-o "></i>Laporan Pembayaran</a>
                            </li>                             
                            <li>
                                <a href="/admin/terkirim"><i class="fa fa-circle-o "></i>Laporan Terkirim</a>
                            </li>  
                            <li>
                                <a href="/admin/harian"><i class="fa fa-circle-o "></i>Laporan Harian</a>
                            </li> 
                             
                                                     
                           
                        </ul>
                    </li> 
                    
                    
                    

                    <li action="#" method="post">
                        <a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>

                    
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        @yield('body')
                    </div>
                </div>          

            </div>
        </div>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.metisMenu.js"></script>

    <script src="js/custom.js"></script>
    
    
    

    <!-- DATA TABLE SCRIPTS -->
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
        
</body>
</html>
