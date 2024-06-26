<?php 

/* require_once('assets/settings/connection.php'); 
$query="SELECT * FROM image_upload_carousel ORDER BY id"; 
$result=mysqli_query($con,$query); */

require_once 'assets/settings/connection.php';
require_once 'assets/settings/function.php';

$result = profile_editor();
$result2 = profile_editor_rohkris();

?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ADMIN ROHKRIS SMPN 28 JKT</title>
        <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"><img src="assets/img/logo.png" style="display: block; margin-left: 70px; margin-right: auto;" width="50px" height="50px"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <div class="sb-sidenav-menu-heading">Beranda</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Editor Carousel
                            </a>
                            <a class="nav-link" href="profiledesc.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-pen"></i></div>
                                Profile Editor
                            </a>
                            <div class="sb-sidenav-menu-heading">Pengaturan</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Keluar Akun
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">PROFILE EDITOR</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Editor Teks!</li>
                        </ol>
                        <div class="row">
                        
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Profile Sekolah
                            </div>
                            <div class="card-body">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th><center>Deskripsi</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result)) 
                                    { 
                                        $id = $row['id'];
                                        $desc = $row['deskripsi'];
                                    ?> 
                                        <tr>
                                            <td style="text-align:justify; width:75%; "><?php echo $desc ?></td>
                                            <td>
                                                <center><a href="editsekolah.php?id=<?php echo $row['id']; ?>" class ="btn btn-primary">Ubah!</a></center>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php 
                                    } 
                                    ?> 
                                </table>
                            </div> 
                        </div>
                    </div>
                    <div class="container-fluid px-4">
                        <div class="row">
                        
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Profile Rohkris
                            </div>
                            <div class="card-body">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th><center>Deskripsi</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result2)) 
                                    { 
                                        $id = $row['id'];
                                        $desc = $row['deskripsi'];
                                    ?> 
                                        <tr>
                                            <td style="text-align:justify; width:75%; "><?php echo $desc ?></td>
                                            <td>
                                                <center><a href="editrohkris.php?id=<?php echo $row['id']; ?>" class ="btn btn-primary">Ubah!</a></center>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php 
                                    } 
                                    ?> 
                                </table>
                            </div> 
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
