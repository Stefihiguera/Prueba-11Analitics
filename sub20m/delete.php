<?php
include("db8.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM sub20m WHERE id = '$id'";
    $query =  mysqli_query($conex, $delete);

    if($query){
        header("Location:sub20m.php");
    }
}
?>