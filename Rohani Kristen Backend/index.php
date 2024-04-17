<?php 

/* require_once('assets/settings/connection.php'); 
$query="SELECT * FROM image_upload_carousel ORDER BY id"; 
$result=mysqli_query($con,$query); */

require_once 'assets/settings/connection.php';
require_once 'assets/settings/function.php';

$result = display_data();
$no = 1;

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php"><img src="assets/img/logo.png" style="display: block; margin-left: 70px; margin-right: auto;" width="50px" height="50px"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <!-- Null Options -->
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">PROFILE</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Editor Carousel
                            </a>
                            <a class="nav-link" href="profiledesc.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-pen"></i></div>
                                Profile Sekolah
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
                        <h1 class="mt-4">PROFILE</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Editor Carousel</li>
                        </ol>
                        <div class="row">
                        
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Editor Carousel!
                            </div>
                            <div class="card-body">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Position</center></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result)) 
                                    { 
                                        $id = $row['id'];
                                        $file = $row['file'];
                                    ?> 
                                        <tr>
                                            <td><center><?php echo $no++ ?></center></td>
                                            <td><center><img src="assets/img/<?php echo $file ?>" width="400px" height="250px"></center></td>
                                            <td>
                                            <form action="delete.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                                <input type="hidden" name="file" value="<?php echo $file ?>">
                                                <button type="submit" name="delete" class="btn btn-danger">Hapus!</button>
                                            </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php 
                                    } 
                                    ?> 
                                </table>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-1"> 
                                    <a class="btn btn-primary" href="upload.php">Upload Gambar!</a>
                                </div>
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
