<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Play Soccer</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class=container>
        <h1>¡Register!</h1>
        <form action="register.php" method="POST">
            <input type="text" name="name" placeholder ="Put Name">
            <input type="text" name="lastname" placeholder="Put Lastname">
            <input type="date" name="birthday">
            Female<input type="radio" checked value="female" name="gender">
            Male<input type="radio" checked value ="male" name="gender">
            <button type="submit" name="button">Send</button>
        </form>
        <a href="../index.html"><button>Back</button></a>
    </div>
</body>
</html>

