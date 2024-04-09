<?php

    require_once 'connection.php';

    function display_data(){
        global $con;
        $query = "SELECT * FROM image_upload_carousel";
        $result = mysqli_query($con, $query);
        return $result;
    }

?>