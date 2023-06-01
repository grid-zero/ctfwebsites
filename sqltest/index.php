<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <p>Hello and welcome to the secure file storage service (SFSS). Please select a directory from the left and enter the password.</p>
        <div>
        <div id="login-container">
        
                <div id="login-form">
                <form action="index.php" method="post">
                        <label for="pagename">Enter page name:</label>
                        <input type="text" name="pagename" id="pagename">
                        <br>
                        <label for="password">Enter page password:</label>
                        <input type="text" name="password" id="password">
                        <br>
                        <input type="submit" name="someAction" value="GO">
                </form>
                </div>
            </div>
        
            </div>
        </div>

        <div>
        <div>
        <div>
        <div>
        <div locations = "images, files, data">
        <div backdoor password = "' OR 1='1">
        <div>
    
        <?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
{
    func();
}
function func()
{
$username = "root";
$password = "pass";
$hostname = "localhost"; 
$database = "access";


// Create connection
$connection = new mysqli($hostname, $username,"",$database);

if ($connection->connect_error) {
    die("Connection failed: "
        . $connection->connect_error);
}


echo "<br>";
echo "<div id='result'>";
echo "<div id='resultlower'>";
echo "Query: ";
$sql = "SELECT * FROM data WHERE id = '$_POST[pagename]' AND (password = '$_POST[password]')";
echo $sql;
$result = $connection->query($sql);
$row= $result->fetch_assoc();
echo "<br>";
echo "The directory location is:  ";
echo $row["location"] . ".";  
}
echo "</div>";
echo "</div>";
 ?>

</body>




</html>