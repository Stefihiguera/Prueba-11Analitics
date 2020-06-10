<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Sub13 Male</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="team.css">
    <!-- LINK FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div>
            <a href="form.php">
                <button type="submit">¡Add New Player</button>
            </a>
        </div>
        <hr>
        <table>
            <thead>
                <tr class="row-title">
                    <th class="th">Id</th>
                    <th class="th">Name</th>
                    <th class="th">LastName</th>
                    <th class="th">Gender</th>
                    <th class="th">Birthday</th>
                    <th class="th">Edit</th>
                    <th class="th">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("db8.php");
                include("register.php");
                $select = "SELECT `id`, `name`, `lastname`, `gender`, `birthday` FROM `sub20m`";
                $conect = mysqli_query($conex, $select);

                while($row = mysqli_fetch_assoc($conect)){ ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['birthday']; ?></td>
                    <td><a href="modify.php?id=<?php echo $row['id'];?>"><i class="fas fa-user-edit"></i></a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']?>"><i class="fas fa-trash-alt"></a></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
        <a href="../index.html"><button>Back</button></a>
    </div>
</body>
</html>


