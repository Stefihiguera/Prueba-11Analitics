<?php
include("db5.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $modify = "SELECT * FROM register WHERE id = $id";
    $query = mysqli_query($conex, $modify);
    
    if(mysqli_num_rows($query)){
        $row = mysqli_fetch_array($query);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Date</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="modify.css">
</head>
<body>
    <section>
        <div class="container">
            <h1>¡Update!</h1>
            <form action="update.php" method="POST">
                <input type="text" name="id" value="<?php echo $row['id']; ?>">
                <input type="text" name="name" value="<?php echo $row['name']; ?>">
                <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
                <input type="date" name="birthday" value="<?php echo $row['birthday']; ?>">
                <h3>Female</h3><input type="radio" name="gender" checked value="female">,
                <h3>Male</h3><input type="radio" name="gender" value="male">
                <button type="submit" name="button">Update</button>
            </form>
            <a href="sub17f.php"><button>Back</button></a>
        </div>
    </section>
</body>
</html>