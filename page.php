<?php
    $login = "";
    $username = "";
    $level = "";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lab5";
    session_start();
    ob_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
        $_SESSION["level"] = 0;   
    }
   if (isset($_POST["mybutton"]))
   {
        $_SESSION["title"] = "sesja";
   }  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT login, level FROM users";
    $sql2 = "SELECT title, content FROM pages";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) 
    {
        //echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["content"]. "<br>";
    }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["login"]))){
            $username = "Please enter username.";
        } 
        else
        {
        $login = trim($_POST["login"]);
        $param_login = $login;
        $_SESSION["loggedin"] = true;
        $_SESSION["login"] = $login;
        $_SESSION["username"] = $username;     
        $_SESSION["level"] = trim($_POST["level"]);
        while($row = $result->fetch_assoc()) 
        {
            if($row["login"] === $login)
            {
                 $_SESSION["level"] = $row["level"];
            }
        }                      
        header("location: index.php");
        die();
        }
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h2>Zaloguj sie</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="login" name="login" value="<?php echo $login; ?>">
                <span class="help-block"><?php echo $username; ?></span>
            </div>
            <button type="submit" class="btn btn-info btn-lg" name="sub">Zaloguj</button>

        </form>
    </div>
</div>
</body>
</html>