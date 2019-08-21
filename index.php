<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lab5');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($link, "utf8");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_SESSION['Username']) == false)
{
    $sql = "SELECT level FROM users WHERE login = "."'".$_SESSION["login"]."'";
    $myresult = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($myresult);
}
    $sql2 = "SELECT content, level, title FROM pages WHERE level = ".$row["level"];
    $result2 = mysqli_query($link, $sql2);
    $row = mysqli_fetch_assoc($result2);
    $_SESSION["title"] = $row["title"];
    $_SESSION["content"] = $row["content"];

    $result = mysqli_query($link,"SELECT id, title FROM pages WHERE level <=".$row["level"]);
    $allNav = "";
    while($row = mysqli_fetch_assoc($result))
    {
        $allNav = "<li><a href=\"index.php?page=".$row["id"]."\">".$row["title"] ."</a></li>".$allNav;
    }

    echo $allNav;
?>
<!DOCTYPE html>
<html>
<head>

</head>

<body>
<div class="container">
    <div class="panel panel-default">
    <div class="panel-heading"><?php echo "<h2>".$_SESSION["title"]."</h2>"; ?></div
    <div class="panel-body"><?php echo $_SESSION["content"]; ?></div>
</body>
</html>