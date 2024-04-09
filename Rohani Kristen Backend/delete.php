<?php 

    require_once 'assets/settings/connection.php';
    
    $id = $_POST['id'];
    $file = $_POST['file'];

    $query= "DELETE FROM image_upload_carousel WHERE id='$id'";
    $result= mysqli_query($con, $query);

    if($result)
    {
        unlink("assets/img/$file");
        echo '<script type="text/javascript">'; 
        echo 'alert("File Berhasil Dihapus!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("File Gagal Dihapus!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
?>