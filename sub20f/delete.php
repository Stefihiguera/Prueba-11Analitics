<?php
include("db7.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM register WHERE id = '$id'";
    $query =  mysqli_query($conex, $delete);

    if($query){
        header("Location:sub20f.php");
    }
}
?>