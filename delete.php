<?php

    include_once('function.php');
    if(isset($_GET['del'])){
        $userid = $_GET['del'];
        $deleterecord = new DB_con();
        $sql = $deleterecord->delete($userid);
        if($sql){
            echo "<script>alert('Reccord Delete Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }
?>