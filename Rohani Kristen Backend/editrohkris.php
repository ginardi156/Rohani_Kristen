<?php
    require_once 'assets/settings/connection.php';
    require_once 'assets/settings/function.php';

    $id = $_GET['id'];

    $result = profile_editor_rohkris();
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
        <link href="css/phpedit.css" rel="stylesheet" />
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
                        <h1 class="mt-4">Edit Text</h1>
                        <ol class="breadcrumb mb-5">
                            <li class="breadcrumb-item active">Profile Sekolah</li>
                        </ol>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>PERHATIAN!</strong> mohon untuk tidak menggunakan tanda kutip satu seperti <strong>( 'TEXT' )</strong> pada awal kalimat. Karena dapat membuat sistem <strong>ERROR!!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="row">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-2">
                            <!-- Input Hidden -->
                            <center><input type="hidden" name="id" value="<?php echo $id ?>"></center>
                            <!-- Input Tidak Hidden -->
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result)) 
                                    { 
                                        $desc = $row['deskripsi'];
                                    ?> 
                            <center>
                            <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="11"><?php echo $desc ?></textarea>
                            </div>
                            <?php 
                                } 
                            ?> 
                            <center><input class="btn btn-primary" type="submit" name="proses" value="Ubah"></center>
                        </Form>
                        <?php
                            $koneksi = mysqli_connect("localhost","root","","db_rohkris");

                            if(isset($_POST['proses'])){

                                $desc = $_POST['deskripsi'];

                                mysqli_query($koneksi, "UPDATE deskripsi_rohkris SET deskripsi='$desc'");

                                echo '<script type="text/javascript">'; 
                                echo 'alert("File Berhasil Diubah!");';
                                echo 'window.location.href = "profiledesc.php";';
                                echo '</script>';
                            }
                        ?>

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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>