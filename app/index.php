ok, yeee!!!123
<?php

$link = new mysqli("api_mysql", "root", "my-secret-pw", "time");

if ($link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, description FROM times";
$result = $link->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . ", name: " . $row["description"];
}

phpinfo();

?>