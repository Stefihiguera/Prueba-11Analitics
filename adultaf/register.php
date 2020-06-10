<?php
include("db1.php");

if(isset($_POST['button'])){
    if(strlen($_POST['name']) > 1 && strlen($_POST['lastname']) > 1){
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $gender = trim($_POST['gender']);
        $birthday = trim($_POST['birthday']);
        $input = "INSERT INTO register(`name`, `lastname`, `gender`, `birthday`) VALUES ('$name','$lastname','$gender','$birthday')";
        $query = mysqli_query($conex, $input);

        if($query){
            header("Location:adultaf.php");
        }else{
            header("Location:adultaf.php");
        }
    }
}
?>