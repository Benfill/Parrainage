<?php
function getData(){
    include_once "db.php";
    $user = [];
    $sql = "SELECT * FROM users;";
    $result = $db->query($sql); // Utilisation de $GLOBALS['db'] pour accéder à la connexion
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user[] = $row;
        }
    }

    return $user;
}
?>
