<?php
include("db8.php");

if(isset($_POST['button'])){
    if(strlen($_POST['name']) > 1 && strlen($_POST['lastname']) > 1){
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $gender = trim($_POST['gender']);
        $birthday = trim($_POST['birthday']);
        $input = "INSERT INTO sub20m(`name`, `lastname`, `gender`, `birthday`) VALUES ('$name','$lastname','$gender','$birthday')";
        $query = mysqli_query($conex, $input);

        if($query){
            header("Location:sub20m.php");
        }else{
            header("Location:sub20m.php");
        }
    }
}
?>