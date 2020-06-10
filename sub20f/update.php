<?php
include("db7.php");

if(isset($_POST['button'])){
    if(strlen($_POST['name'])>1 && strlen($_POST['lastname'])>1){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $update = "UPDATE `register` SET name='$name',lastname='$lastname', gender='$gender',birthday='$birthday' WHERE id='$id'";
        $query = mysqli_query($conex, $update);

        if($query){
            header("Location:sub20f.php");
        }
    }
}
?>