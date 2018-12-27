ok, yeee!!!123
<?php

# DEBUG: echo getenv("MYSQL_ROOT_PASSWORD");
# or
# DEBUG: $_ENV['MYSQL_ROOT_PASSWORD'];

$link = new mysqli("api_mysql", "root", $_ENV['MYSQL_ROOT_PASSWORD'], "time");

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
