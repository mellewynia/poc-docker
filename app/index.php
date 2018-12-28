ok, yeee!!!123
<?php

# DEBUG: $_ENV['MYSQL_ROOT_PASSWORD'];
#
# DO NOT EVER USE getenv("MYSQL_ROOT_PASSWORD")... 
# more info on this topic: https://github.com/laravel/framework/issues/7354

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
