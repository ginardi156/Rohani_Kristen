<?php

    require_once 'connection.php';

    function display_data(){
        global $con;
        $query = "SELECT * FROM image_upload_carousel";
        $result = mysqli_query($con, $query);
        return $result;
    }

    function profile_editor(){
        global $con;
        $query = "SELECT * FROM deskripsi_sekolah";
        $result = mysqli_query($con, $query);
        return $result;
    }

    function profile_editor_rohkris(){
        global $con;
        $query = "SELECT * FROM deskripsi_rohkris";
        $result = mysqli_query($con, $query);
        return $result;
    }
?>