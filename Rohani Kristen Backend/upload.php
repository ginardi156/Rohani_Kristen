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
        <link href="css/phpupload.css" rel="stylesheet" />
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
                        <h1 class="mt-4">Upload Gambar</h1>
                        <ol class="breadcrumb mb-5">
                            <li class="breadcrumb-item active">Editor Carousel</li>
                        </ol>
                        <div class="row">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-2">
                            <center><input class="form-control" name="NamaFile" id="file" type="file" placeholder="file"></center>
                            </div>
                            <center><input class="btn btn-primary" type="submit" name="proses" value="Upload"></center>
                        </Form>
                        <?php
                            $koneksi = mysqli_connect("localhost","root","","db_rohkris");

                            if(isset($_POST['proses'])){

                                $direktori = "assets/img/";
                                $file_name =$_FILES['NamaFile']['name'];
                                move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

                                mysqli_query($koneksi, "insert into image_upload_carousel set file='$file_name'");

                                echo '<script type="text/javascript">'; 
                                echo 'alert("File Berhasil Diupload!");';
                                echo 'window.location.href = "index.php";';
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
