<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Email</th>
        <th>Username</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include_once "getData.php";
    $users = getData(); // Supposons que getData() renvoie un tableau d'utilisateurs

    foreach ($users as $user) {
        // Utilisation des données de chaque utilisateur
        $email = $user['users_email'];
        $username = $user['username'];

        // Affichage des données dans une ligne du tableau
        echo "<tr>";
        echo "<td>$email</td>";
        echo "<td>$username</td>";
       echo " <div class='btn-group'>
            <td> <input type='button' class='btn btn-secondary' value='Edit'></td>
            <td><input type='button' class='btn btn-danger' value='Delete'></td>
        </div>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>
